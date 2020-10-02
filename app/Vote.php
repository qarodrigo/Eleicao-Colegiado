<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = [
        'option'
    ];


    public function Voter(){
        return $this->belongsTo('App/Voter');
    }
}
