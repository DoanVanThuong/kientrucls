<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\adminModels\LoaiSanPham;

class LoaiSanPhamController extends Controller
{
    function getDanhSach() {
        $name = LoaiSanPham::getTableName();
        $loaisanpham = LoaiSanPham::all();
		return view('admin.loaisanpham.danhsach',[
            'loaisanpham'=>$loaisanpham,
            'name' => $name
            ]);
    }

}
