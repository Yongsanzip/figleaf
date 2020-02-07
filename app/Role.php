<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'id'
        , 'role'
        , 'role_name'
        , 'created_at'
        , 'updated_at'
    ];


    public function role(){
        return $this->hasMany('App\User','role_id','id');
    }
}
