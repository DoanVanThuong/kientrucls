<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\AdminModels\LoaiDuAn;
use App\Http\Models\AdminModels\DuAn;


class LoaiDuAnController extends Controller
{
    function getDanhSach() {
        $loaiduan = LoaiDuAn::all();
        return view('adminls.loaiduan.danhsach', [
            'loaiduan' => $loaiduan
        ]);
    }

    function getThem() {
        return view('adminls.loaiduan.them');
    }
}
