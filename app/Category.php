<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model {
    // 컬럼중 노출하지않을것을 표기
    protected $guarded =[];

    /*******************************************************************
     * @return BelongsTo
     *******************************************************************/

    /*******************************************************************
     * @return HasMany
     *******************************************************************/
    // 2차 카테고리
    public function category_details() {
        return $this->hasMany('App\CategoryDetail','category_id','id');
    }

    // 프로젝트
    public function project() {
        return $this->hasMany('App\Project','category_id','id');
    }

    /*******************************************************************
     * @return HasOne
     *******************************************************************/
}
