<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio extends Model {
    // 소프트 삭제
    use SoftDeletes;
    // 컬럼중 노출하지않을것을 표기
    protected $guarded =[];

    /*******************************************************************
     * @return BelongsTo
     *******************************************************************/
    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }

    /*******************************************************************
     * @return HasMany
     *******************************************************************/
    //포트폴리오 대표이미지
    public function portfolio_images(){
        return $this->hasMany('App\PortfolioImage','portfolio_id','id')->whereImageDivision(1)->orderBy('created_at','DESC');
    }

    // 브랜드 로고 이미지
    public function brand_logo_images(){
        return $this->hasMany('App\PortfolioImage','portfolio_id','id')->whereImageDivision(2)->orderBy('created_at','DESC');
    }

    //브랜드 썸네일 이미지
    public function brand_thumbnail_images(){
        return $this->hasMany('App\PortfolioImage','portfolio_id','id')->whereImageDivision(3)->orderBy('created_at','DESC');
    }

    // 뉴스 이미지
    public function news_images(){
        return $this->hasMany('App\PortfolioImage','portfolio_id','id')->whereImageDivision(4);
    }
    /*******************************************************************
     * @return HasOne
     *******************************************************************/

    //포트폴리오
    public function brand(){
        return $this->hasOne('App\Brand','portfolio_id','id');
    }

}
