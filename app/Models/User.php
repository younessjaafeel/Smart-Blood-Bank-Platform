<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'users';
    protected $fillable = [
        'id',
        'name',
        'email',
        'path',
        'password',
         'gender',
         'address' ,
         'date_of_birth',
         'blood_group',
          'weight' ,
          'phone',
          'is_donor',
          'is_admin' ,
          'last_donated'


    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function patients(){
        return $this->belongsToMany('App\Models\patient');
    }

    public function donors(){
        return $this->belongsToMany('App\Models\donor');
    }
    public function getPathAttribute($value){
        return asset($value);
    }
}
