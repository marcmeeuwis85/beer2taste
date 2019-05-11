<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\BeerTasting
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $hash
 * @property string $status
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BeerTasting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BeerTasting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BeerTasting query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BeerTasting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BeerTasting whereHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BeerTasting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BeerTasting whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BeerTasting whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BeerTasting whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Beer[] $beers
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Question[] $questions
 */
class BeerTasting extends Model
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function questions()
    {
        return $this->belongsToMany(Question::class, 'beer_tasting_questions');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function beers()
    {
        return $this->belongsToMany(Beer::class, 'beer_tasting_beers')->withPivot('position');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function results()
    {
        return $this->belongsToMany(Question::class, 'beer_tasting_results')
            ->withPivot('person_id', 'beer_id', 'answer')
            ->withTimestamps();
    }

    //
}
