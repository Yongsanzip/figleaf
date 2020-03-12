<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model {
    // 소프트 삭제

    // 컬럼중 노출하지않을것을 표기
    protected $guarded =[];

    /*******************************************************************
     * @return BelongsTo
     *******************************************************************/

    /*******************************************************************
     * @return HasMany
     *******************************************************************/
    public function contentDetail() {
        return $this->hasMany('App\ContentDetail', 'content_id', 'id');
    }

    /*******************************************************************
     * @return HasOne
     *******************************************************************/


    /*******************************************************************
     * @return 사용자정의
     *******************************************************************/
    public function lastestContent($id) {
        $data = ContentDetail::where('content_id', $id)->orderBy('updated_at', 'desc')->first();
        if ($data) {
            $result = $data->updated_at;
        } else {
            $result = Content::where('id', $id)->first()->updated_at;
        }

        $result = $result->format('Y-m-d H:i');

        return $result;
    }
}
