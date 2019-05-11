<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Question
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $type
 * @property int $position
 * @property mixed|null $possible_answers
 * @property string|null $group
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question wherePossibleAnswers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Question extends Model
{
    public function possibleAnswers()
    {
        return json_decode( strlen($this->possible_answers) > 0 ? $this->possible_answers : "{}" );
    }
    //
}
