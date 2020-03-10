<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContentDetail extends Model {
    // 소프트 삭제
    use SoftDeletes;
    // 컬럼중 노출하지않을것을 표기
    protected $guarded =[];

    /*******************************************************************
     * @return BelongsTo
     *******************************************************************/
    public function content() {
        return $this->belongsTo('App\Content', 'content_id', 'id');
    }

    public function project() {
        return $this->belongsTo('App\Project', 'model_id', 'id')->where('status', 1);
    }

    public function portfolio() {
        return $this->belongsTo('App\Portfolio', 'model_id', 'id')->where('status', 0);
    }


    /*******************************************************************
     * @return HasMany
     *******************************************************************/

    /*******************************************************************
     * @return HasOne
     *******************************************************************/
}
