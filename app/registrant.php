<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrant extends Model
{
    //
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'city',
        'country',
        'job_title'       
    ];
}
