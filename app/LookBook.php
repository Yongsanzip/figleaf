<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LookBook extends Model {
    // 소프트 삭제
    use SoftDeletes;
    // 컬럼중 노출하지않을것을 표기
    protected $guarded =[];

    /*******************************************************************
     * @return BelongsTo
     *******************************************************************/
    public function portfolio(){
        return $this->belongsTo('App\Portfolio','portfolio_id','id');
    }
    /*******************************************************************
     * @return HasMany
     *******************************************************************/
    public function look_book_images(){
        return $this->hasMany('App\LookBookImage','look_book_id','id');
    }
    /*******************************************************************
     * @return HasOne
     *******************************************************************/


}
