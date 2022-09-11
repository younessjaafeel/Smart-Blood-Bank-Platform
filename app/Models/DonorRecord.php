<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonorRecord extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
         'gender',
         'address' ,
         'date_of_birth',
         'avatar',
         'blood_group',
          'weight' ,
          'phone',
          'is_donor',
          'last_donated'
    ];
}
