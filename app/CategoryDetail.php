<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryDetail extends Model {
    // 컬럼중 노출하지않을것을 표기
    protected $guarded =[];

    /*******************************************************************
     * @return BelongsTo
     *******************************************************************/
    public function category() {
        return $this->belongsTo('App\Category','category_id','id');
    }

    /*******************************************************************
     * @return HasMany
     *******************************************************************/

    /*******************************************************************
     * @return HasOne
     *******************************************************************/

}
