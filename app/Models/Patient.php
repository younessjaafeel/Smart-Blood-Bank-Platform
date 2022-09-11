<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    public function accpetance_records(){
        return $this->belongsToMany('App\Models\Accpetance_record');
    }
    protected $fillable = [
        'Patient_id',
        'Patient_name',
         'Blood_group',
         'Disease' ,
         'Address',
         'phone',
         'number_units',

    ];

}
