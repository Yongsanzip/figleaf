<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InformationSelectList extends Model {
    // 컬럼중 노출하지않을것을 표기
    protected $guarded =[];

    /*******************************************************************
     * @return BelongsTo
     *******************************************************************/

    /*******************************************************************
     * @return HasMany
     *******************************************************************/

    public function informations() {
        return $this->hasMany('App\Informations', 'detail_id', 'id');
    }

    /*******************************************************************
     * @return HasOne
     *******************************************************************/

}
