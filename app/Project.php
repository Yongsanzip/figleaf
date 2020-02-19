<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model {
    // 소프트 삭제
    use SoftDeletes;
    // 컬럼중 노출하지않을것을 표기
    protected $guarded =[];

    /*******************************************************************
     * @return BelongsTo
     *******************************************************************/

    /*******************************************************************
     * @return HasMany
     *******************************************************************/
    // 옵션
    public function options(){
        return $this->hasMany('App\Option','project_id','id');
    }

    // 사이즈
    public function sizes() {
        return $this->hasMany('App\Size','project_id','id');
    }

    // 원단-재질
    public function fabrics() {
        return $this->hasMany('App\Fabric', 'project_id', 'id');
    }

    // 취급정보
    public function informations() {
        return $this->hasMany('App\Informations', 'project_id', 'id');
    }
    /*******************************************************************
     * @return HasOne
     *******************************************************************/

}
