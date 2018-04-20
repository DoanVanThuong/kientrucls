<?php

namespace App\Http\Models\adminModels;

use Illuminate\Database\Eloquent\Model;
use App\Http\Helpers\Constants;
use Illuminate\Support\Facades\DB;

class SanPham extends Model
{
    //khi báo tên bảng
    protected  $table = "products";
    //khai báo relationship 
    //1 sp thuộc 1 loại sp
    public function loaisanpham()
    {
    	return $this->belongsTo('App\Http\Models\adminModels\LoaiSanPham','category_id','id');
    }
    
}
