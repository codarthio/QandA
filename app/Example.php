<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Example extends Model
{
    //
    protected $fillable = [
            'example'
        ];

    public static function randomExample(){
        $rand = Example::all()->random(1);


        return $rand->map(function($rand){
            return trim($rand->example, '["]');
        });
    }
}
