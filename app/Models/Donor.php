<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;
    public function donor_records(){
        return $this->belongsToMany('App\Models\DonorRecord');
    }

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
    public function getAvatarAttribute($value){
        return asset($value);
    }
}
