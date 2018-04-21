<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\adminModels\TinTuc;



class TinTucController extends Controller
{
    function getDanhSach() {
        $tintuc = TinTuc::all();
        $name = TinTuc::getTableName();
        return view('adminls.tintuc.danhsach', [
            'tintuc' => $tintuc,
            'name' => $name
        ]);
    }
    function getThem() {
        return view('adminls.tintuc.them');
    }
    function getXoa($id) {
        $tintuc = TinTuc::find($id);
        if(!$tintuc) {
            return;
        }
        $tintuc>delete();
    return redirect('/admin/tintuc/danhsach')->with('thongbao','Xóa thành công '.''. $tintuc->name);	
    }

    function postThem(Request $request) {

    }

    function postSua($id ,Request $request) {
        
    }
}


?>