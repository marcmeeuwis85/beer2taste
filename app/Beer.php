<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Beer
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string|null $image
 * @property string|null $content
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Beer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Beer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Beer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Beer whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Beer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Beer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Beer whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Beer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Beer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Beer extends Model
{
    protected $guarded = ['id'];
    //
}
