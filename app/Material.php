<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Material extends Model {
    // 컬럼중 노출하지않을것을 표기
    protected $guarded =[];

    /*******************************************************************
     * @return BelongsTo
     *******************************************************************/
    public function group() {
        return $this->belongsTo('App\Group', 'group_id', 'id');
    }
    /*******************************************************************
     * @return HasMany
     *******************************************************************/
    public function fabrics() {
        return $this->hasMany('App\Fabric', 'material_id', 'id');
    }
    /*******************************************************************
     * @return HasOne
     *******************************************************************/


}
