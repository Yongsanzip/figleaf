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

    // 디자이너/브랜드소개
    public function introduction() {
        return $this->hasOne('App\Introduction', 'project_id', 'id');
    }

    // 정산정보
    public function account() {
        return $this->hasOne('App\Account', 'project_id', 'id');
    }

    // 이미지 파일 - 대표이미지
    public function main_image() {
        return $this->hasOne('App\ProjectImage', 'project_id', 'id')->where('image_division', 1);
    }

    // 이미지 파일 - 사업자등록증
    public function company_image() {
        return $this->hasOne('App\ProjectImage', 'project_id', 'id')->where('image_division', 2);
    }

    // 이미지 파일 - 통장 사본
    public function bank_image() {
        return $this->hasOne('App\ProjectImage', 'project_id', 'id')->where('image_division', 3);
    }

}
