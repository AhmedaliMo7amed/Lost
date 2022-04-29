<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ContactInfo extends Model
{
    use  Notifiable;
    protected $table = 'contact_infos';

    protected $fillable = [
        'user_id',
        'mobile_1',
        'mobile_2',
        'government',
        'city',
        'street',
        'facebookLink',
        'whatsapp'
    ];

    public function user()
    {
    return $this->belongsTo(User::class);
    }

}
