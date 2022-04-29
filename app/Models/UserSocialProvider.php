<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSocialProvider extends Model
{
    protected $table = 'user_social_providers';

    protected $fillable = [
        'provider_name',
        'provider_id',
        'user_id',
    ];

    protected $hidden = ['created_at','updated_at'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
