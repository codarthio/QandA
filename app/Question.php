<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillable = [
      'question_text'
    ];



    public function answers(){
        return $this->hasMany('App\Question')->orderBy('created_at', 'DESC');
    }
}
