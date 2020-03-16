<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Support extends Model {
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
    /*******************************************************************
     * @return HasMany
     *******************************************************************/
    public function support_options(){
        return $this->hasMany('App\SupportOption','support_id','id');
    }
    /*******************************************************************
     * @return HasOne
     *******************************************************************/
}
