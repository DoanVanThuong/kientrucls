<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\AdminModels\DuAn;
use App\Http\Models\adminModels\LoaiDuAn;


class DuAnController extends Controller
{
    function getDanhSach() {
        $duan = DuAn::all();
        // dd($duan);
        return view('adminls.duan.danhsach', [
            'duan' => $duan,
        ]);
    }
    
    function getSua($id) {
        $duan = DuAn::find($id);
        return view('adminls.duan.sua', [
            'duan' => $duan
        ]);
    }

    function getXoa($id) {
        $duan =  DuAn::find($id);
        if(!$duan) {
            return;
        }
        if(!Storage::exists($duan->img)) {
            echo "tontai";
            unlink($duan->img);   
        }
        $duan->delete();
        return redirect('/admin/duan/danhsach')->with('thongbao','xóa thành công'.' '.$duan->name);	      
    }
}
