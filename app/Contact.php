<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = [
        'image',
        'name',
        'surname',
        'email',
        'role',
        'last_login'
    ];
}
