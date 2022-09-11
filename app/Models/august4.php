<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class august4 extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'Blood_groups',
        'Donation_center',
        'Number_units',
    ];
}
