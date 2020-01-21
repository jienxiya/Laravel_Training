<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patients extends Model
{
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email'
    ];
    protected $hidden = [
        'password'
    ];
}
