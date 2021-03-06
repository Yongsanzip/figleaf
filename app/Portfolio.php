<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio extends Model {
    // 소프트 삭제
    use SoftDeletes;
    // 컬럼중 노출하지않을것을 표기
    protected $guarded =[];

    protected $casts = [
      'history' => "array",
      'awards' => "array",
      'association' => "array",
    ];
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
        return $this->hasMany('App\PortfolioImage','portfolio_id','id')->whereImageDivision(4)->orderBy('created_at','DESC');
    }
    // 히스토리
    public function histories(){
        return $this->hasMany('App\HistoryAward','portfolio_id','id')->whereType('0')->orderBy('year','DESC')->get();
    }
    // 수상내역
    public function awards(){
        return $this->hasMany('App\HistoryAward','portfolio_id','id')->whereType(1)->orderBy('year','DESC')->get();
    }
    // 협회활동
    public function association_activties(){
        return $this->hasMany('App\AssociationActivity','portfolio_id','id')->get();
    }

    public function look_books(){
        return $this->hasMany('App\LookBook','portfolio_id','id');
    }

    // 콘텐츠 상세
    public function contentDetails() {
        return $this->hasMany('App\ContentDetail', 'model_id', 'id')->where('status', 0)->orderBy('content_details.model_id', 'asc');
    }

    /*******************************************************************
     * @return HasOne
     *******************************************************************/
    // 유저
    public function users(){
        return $this->hasOne('App\User','user_id','id');
    }
    //포트폴리오
    public function brand(){
        return $this->hasOne('App\Brand','portfolio_id','id');
    }


    public function contentsRelation($model_id, $content_id) {
        $data = ContentDetail::where('model_id', $model_id)->where('content_id', $content_id)->first();

        if (isset($data)) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }
}
