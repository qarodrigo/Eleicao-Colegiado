<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    protected $fillable = [
        'name', 'email', 'present','vote_id',
    ];
    
    public function Vote(){
        return $this->hasOne('App/Vote');
    }
}
