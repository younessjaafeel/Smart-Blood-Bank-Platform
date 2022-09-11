<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\http\Controller\Admin\GoogleController;

class DonationCenters extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'latitude',
        'longitude',
        'address',
        'phone',
        'image'
    ];

      //Backup Page
}
