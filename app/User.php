<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    use Notifiable;

    /**************************************************************
     * The attributes that are mass assignable.
     * @var array
     **************************************************************/
    protected  $guarded = [];

    /**************************************************************
     * The attributes that should be hidden for arrays.
     * @var array
     **************************************************************/
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**************************************************************
     * The attributes that should be cast to native types.
     * @var array
     **************************************************************/
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsTo('App\Role','role_id','id');
    }


    /*******************************************************************
     * @return BelongsTo
     *******************************************************************/

    /*******************************************************************
     * @return HasMany
     *******************************************************************/

    /*******************************************************************
     * @return HasOne
     *******************************************************************/




    /*******************************************************************
     * @description Custom Function Area
     *******************************************************************/

    /**************************************************************
     * @function in_admin
     * @description 최고 관리자 체크
     * @return boolean
     **************************************************************/
    public function in_admin(){
        if($this->role_id == 4){
            return true;
        }
        return false;
    }

    /**************************************************************
     * @function in_semi_admin
     * @description 프로젝트 허가자 체크
     * @return boolean
     **************************************************************/
    public function in_semi_admin(){
        if($this->role_id == 3){
            return true;
        }
        return false;
    }

    /**************************************************************
     * @function is_designer
     * @description 디자이너 체크
     * @return boolean
     **************************************************************/
    public function is_designer(){
        if($this->role_id == 2){
            return true;
        }
        return false;
    }
}
