<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewAdminProject extends Model
{
    protected $guarded =[];

    // 디자이너/브랜드소개
    public function introduction() {
        return $this->hasOne('App\Introduction', 'project_id', 'id');
    }

    /*******************************************************************
     * @return 사용자정의
     *******************************************************************/
    public function condition($data) {
        switch ($data) {
            case 1:
                $result = '대기중';
                break;
            case 2:
                $result= '진행중';
                break;
            case 3:
                $result = '반려';
                break;
            case 4:
                $result = '실패';
                break;
            case 5:
                $result = '성공';
                break;
        }

        return $result;
    }
}
