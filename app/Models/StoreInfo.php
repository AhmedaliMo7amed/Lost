<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class StoreInfo extends Model
{
    use Notifiable;
    protected $table = 'store_infos';

    protected $fillable = [
        'owner_id',
        'storeName',
        'government',
        'city',
        'street',
        'storeMobile_1',
        'storeMobile_2',
        'facebookLink',
        'whatsapp'
    ];

    public function storeOwner()
    {
        return $this->belongsTo(storeOwner::class , 'owner_id');
    }
}

