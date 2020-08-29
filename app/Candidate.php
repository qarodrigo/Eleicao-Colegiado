<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = [
        'name', 'email', 'president_name', 'vice_president_name', 'description',
    ];
}
