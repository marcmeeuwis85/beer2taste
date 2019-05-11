<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Person
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Person newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Person newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Person query()
 * @mixin \Eloquent
 */
class Person extends Model
{
    protected $table = 'persons';
    public $guarded = ['id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function beerTastings()
    {
        return $this->belongsToMany(BeerTasting::class, 'beer_tasting_persons', 'person_id', 'beer_tasting_id')
            ->withTimestamps();
    }
}
