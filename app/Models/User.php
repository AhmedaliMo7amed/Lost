<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{
    use  Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'national_id',
        'password',
        'fullInfo',
        'avatar'
    ];

    public function socialProvider()
    {
        return $this->hasMany(UserSocialProvider::class);
    }

    public function contact()
    {
    return $this->hasOne(ContactInfo::class);
    }

    public function report()
    {
    return $this->hasMany(Report::class);
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
