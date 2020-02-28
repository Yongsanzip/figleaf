<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Informations extends Model
{
    // 소프트 삭제
    use SoftDeletes;
    // 컬럼중 노출하지않을것을 표기
    protected $guarded =[];

    /*******************************************************************
     * @return BelongsTo
     *******************************************************************/
    public function project() {
        return $this->belongsTo('App\Project', 'project_id', 'id');
    }

    public function information_detail(){
        return $this->belongsTo('App\InformationSelectList', 'detail_id', 'id');
    }
    /*******************************************************************
     * @return HasMany
     *******************************************************************/

    /*******************************************************************
     * @return HasOne
     *******************************************************************/

    public function information_name($data) {
        switch ($data) {
            case 1:
                $result = '물세탁';
                break;
            case 2:
                $result = '표백';
                break;
            case 3:
                $result = '다림질';
                break;
            case 4:
                $result = '드라이클리닝';
                break;
            case 5:
                $result = '드라이';
                break;
        }
        return $result;
    }

}
