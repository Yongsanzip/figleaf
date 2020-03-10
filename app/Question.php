<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model {
    // 소프트 삭제
    use SoftDeletes;
    // 컬럼중 노출하지않을것을 표기
    protected $guarded =[];

    protected $dates = [
        'answer_at',
    ];

    /*******************************************************************
     * @return BelongsTo
     *******************************************************************/
    public function user() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    /*******************************************************************
     * @return HasMany
     *******************************************************************/

    /*******************************************************************
     * @return HasOne
     *******************************************************************/

}
