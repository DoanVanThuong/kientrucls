<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\adminModels\LienLac;

class LienLacController extends Controller
{
    function getSua() {
        $lienlac = LienLac::find(1);
        return view('adminls.lienlac.sua',[
            'lienlac' => $lienlac
        ]);
    }

    function postSua($id, Request $request) {
        $lienlac = LienLac::find($id);
        if(!$lienlac) {
            return;
        }
		$this->validate($request,
			[
                'diachi' =>'required',
				'dienthoai' =>'required|min:10|max:11',
		], 
		[
			'diachi.required' =>'Bạn chưa nhập địa chỉ',
            'dienthoai.max' => 'số điện thoại từ 10 - 11 số',
            'dienthoai.min' => 'số điện thoại từ 10 - 11 số',             
		]);
        $lienlac->address = $request->diachi;
        $lienlac->phone = $request->dienthoai;
        $lienlac->hotline = $request->hotline;
        $lienlac->fax = $request->fax;
        $lienlac->email = $request->email;
        $lienlac->save();   
        return redirect('admin/lienlac/danhsach')->with('thongbao','Sửa thành công');
    }
}
