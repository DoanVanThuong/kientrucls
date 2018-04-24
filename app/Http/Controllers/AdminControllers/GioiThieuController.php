<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\adminModels\GioiThieu;

class GioiThieuController extends Controller
{
    function getSua($id) {
        $gioithieu = GioiThieu::find($id);
        return view('adminls.gioithieu.sua', [
            'gioithieu' => $gioithieu
        ]);
    }

    function postSua(Request $request, $id) {
        $gioithieu = GioiThieu::find($id);  
        if(!$gioithieu) {
            return;
        }
		$this->validate($request,
			[
                'tieude' =>'required',
				'noidung' =>'required'
		], 
		[
			'tieude.required' =>'Bạn chưa nhập tiêu đề',
            'noidung.required' => 'Bạn chưa nhập nội dung',
		]);
        $gioithieu->title = $request->tieude;
        $gioithieu->content = $request->noidung;
        $gioithieu->save();   
        return redirect('admin/gioithieu/sua/'.$id.'/')->with('thongbao','Sửa thành công');      
    }
}
