<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Report extends Model
{
    use Notifiable;
    protected $table = 'reports';

    protected $fillable = [
        'user_id' ,
        'serialNumber',
        'type',
        'brand',
        'model',
        'color',
        'RAM',
        'ROM',
        'frontCrach_top',
        'frontCrach_center',
        'frontCrach_bottom',
        'backCrach_top',
        'backCrach_center',
        'backCrach_bottom',
        'devicePicture',
        'additional_info',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }
    public function contact()
    {
        return $this->hasOneThrough('ContactInfo','User');
    }


    public function review()
    {
        return $this->hasMany(Review::class);
    }

}
