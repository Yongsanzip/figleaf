<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupportLog extends Model {
    // 컬럼중 노출하지않을것을 표기
    protected $guarded =[];

    /*******************************************************************
     * @return BelongsTo
     *******************************************************************/
    public function support(){
        return $this->belongsTo('App\Support','support_id','id');
    }

    public function option(){
        return $this->belongsTo('App\Option','support_option_id','id');
    }
    /*******************************************************************
     * @return HasMany
     *******************************************************************/

    /*******************************************************************
     * @return HasOne
     *******************************************************************/
}
