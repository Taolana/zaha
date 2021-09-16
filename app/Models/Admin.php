<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

        protected $guard = 'admin';

        protected $fillable = [
            'name', 'email', 'password', 'is_admin'
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
}
