<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'phone', 'email', 'blood_type', 'location'
    ];
}
