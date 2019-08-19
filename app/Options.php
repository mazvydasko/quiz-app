<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    //

    protected $table = 'questions_options';

    public function question()
    {
        return $this->hasOne('App\Question', 'id', 'question_id');
    }
}
