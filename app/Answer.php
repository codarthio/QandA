<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $fillable = [
        'answer_text'
    ];

    public function question(){
        return $this->belongsTo('App\Question');
    }
}
