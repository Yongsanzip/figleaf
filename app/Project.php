<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model {
    // 소프트 삭제
    use SoftDeletes;
    // 컬럼중 노출하지않을것을 표기
    protected $guarded =[];

    protected $dates = [
        'start_date',
        'account_date',
        'deadline',
        'delivery_date',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /*******************************************************************
     * @return BelongsTo
     *******************************************************************/
    // 1차 카테고리
    public function category() {
        return $this->belongsTo('App\Category','category_id','id');
    }
    // 2차 카테고리
    public function category_detail() {
        return $this->belongsTo('App\CategoryDetail','category2_id','id');
    }

    /*******************************************************************
     * @return HasMany
     *******************************************************************/
    // 옵션
    public function options(){
        return $this->hasMany('App\Option','project_id','id');
    }

    // 옵션 데이터가 한 개라도 존재하는지 project/create.blade 에서 사용
    public function option_exist($id) {
        return $this->hasMany('App\Option','project_id','id')->where('project_id', $id)->first();
    }

    // 사이즈
    public function sizes() {
        return $this->hasMany('App\Size','project_id','id');
    }

    // 사이즈 데이터가 한 개라도 존재하는지 project/create.blade 에서 사용
    public function size_exist($id) {
        return $this->hasMany('App\Size','project_id','id')->where('project_id', $id)->first();
    }

    // 원단-재질
    public function fabrics() {
        return $this->hasMany('App\Fabric', 'project_id', 'id');
    }

    // 원단-재질
    public function fabric_exist($id) {
        return $this->hasMany('App\Fabric', 'project_id', 'id')->where('project_id', $id)->first();
    }

    // 취급정보
    public function informations() {
        return $this->hasMany('App\Informations', 'project_id', 'id');
    }

    // 비고
    public function notes() {
        return $this->hasMany('App\Note', 'project_id', 'id');
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
