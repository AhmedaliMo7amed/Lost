<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnerSocialProvider extends Model
{
    protected $table = 'owner_social_providers';

    protected $fillable = [
        'provider_name',
        'provider_id',
        'owner_id',
    ];

    protected $hidden = ['created_at','updated_at'];

    public function owner(){
        return $this->belongsTo(Owner::class);
    }
}
