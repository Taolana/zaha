<?php

namespace App\Models;


use App\Models\Place;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Guide extends Authenticatable
{
    use Notifiable;

    protected $guard = 'guide';

    protected $fillable = [
        'pseudo', 'first_name', 'last_name', 'phone_number', 'is_local_guide', 'is_guide', 'profile_picture', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function places()
    {
        return $this->hasMany(Place::class);
    }
}
