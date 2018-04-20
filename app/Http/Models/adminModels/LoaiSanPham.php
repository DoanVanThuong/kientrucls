<?php


namespace App\Http\Models\adminModels;

use Illuminate\Database\Eloquent\Model;
use App\Http\Helpers\Constants;
use Illuminate\Support\Facades\DB;

class LoaiSanPham extends Model
{
    //khi báo tên bảng
    protected  $table = "categories";

    //khai báo relationship
    //1 loai sp co nhieu san pham
    public function sanpham()
    {
    	return $this->hasMany('App\Http\Models\adminModels\SanPham','category_id' ,'id');
    }

    public static function getTableName(){
        return with(new static)->getTable();
    }

}
