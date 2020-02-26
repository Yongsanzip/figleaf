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


}
