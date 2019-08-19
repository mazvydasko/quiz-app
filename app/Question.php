<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //

    protected $table = 'questions';

    public function options() {
        return $this->hasMany('App\Options', 'question_id', 'id');
    }

    public function correctOptionsCount() {
        return $this->options()->where('correct', 1 )->count();
    }

    public function correctOptions() {
       return  $this->options()->where('correct', 1)->get();
    }

    public function topic() {
        return $this->hasOne('App\Topic', 'id', 'topic_id');
    }

}
