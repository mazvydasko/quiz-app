<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    //

    protected $table = 'results';

    public function topic(){
        return $this->belongsTo('App\Topic');
    }

    public function user() {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function options() {
        return $this->hasMany('App\UserOption', 'result_id', 'id');
    }
}
