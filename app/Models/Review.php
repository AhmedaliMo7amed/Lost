<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Review extends Model
{
    use Notifiable;
    protected $table = 'reviews';

    protected $fillable = [
        'owner_id',
        'report_id',
        'theifName',
        'theifNatID',
        'theifMobile',
        'theifPicture',
        'additional_info'
    ];

    public function storeOwner()
    {
        return $this->belongsTo(Owner::class , 'owner_id');
    }
    public function report()
    {
        return $this->belongsTo(Report::class , 'report_id');
    }
}
