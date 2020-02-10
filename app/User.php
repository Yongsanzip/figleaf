<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id'
        , 'role_id'
        , 'email'
        , 'password'
        , 'name'
        , 'home_phone'
        , 'cellphone'
        , 'zipcode'
        , 'address'
        , 'address_detail'
        , 'gender'
        , 'grade'
        , 'email_yn'
        , 'sms_yn'
        , 'email_verified_at'
        , 'thumbnail'
        , 'created_at'
        , 'update_at'
        , 'delete_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsTo('App\Role','role_id','id');
    }
}
