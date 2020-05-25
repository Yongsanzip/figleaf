<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model {
    // 소프트 삭제
    use SoftDeletes;
    // 컬럼중 노출하지않을것을 표기
    protected $guarded =[];

    /*******************************************************************
     * @return BelongsTo
     *******************************************************************/
    public function project(){
        return $this->belongsTo('App\Project','project_id','id');
    }

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public function project_user(){
        return $this->belongsTo('App\User','project_user_id','id');
    }
    /*******************************************************************
     * @return HasMany
     *******************************************************************/

    public function message_details(){
        return $this->hasMany('App\MessageDetail','message_id','id');
    }
    /*******************************************************************
     * @return HasOne
     *******************************************************************/


    /*******************************************************************
     * @return Custom
     *******************************************************************/
    public function latest_time(){
        return $this->hasMany('App\MessageDetail','message_id','id')->orderBy('created_at','DESC')->first();
    }
}
