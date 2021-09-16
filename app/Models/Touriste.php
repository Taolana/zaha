<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Touriste extends Authenticatable
{
    use Notifiable;

    protected $guard = 'touriste';

    protected $fillable = [
        'pseudo', 'first_name',	'last_name', 'nationality',	'email', 'password', 'is_touriste',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
