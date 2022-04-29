<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Owner extends Authenticatable implements JWTSubject
{
    protected $table = 'owners';

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'mobile',
        'password',
        'fullInfo',
        'avatar'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    public function socialProvider()
    {
        return $this->hasMany(OwnerSocialProvider::class);
    }

    public function store()
    {
        return $this->hasOne(StoreInfo::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
