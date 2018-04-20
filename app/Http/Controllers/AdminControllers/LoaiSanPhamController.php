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

    function getThem() {
        return view('admin.loaisanpham.them');
    }

    function postThem(Request $request) {
        //validate
        $this->validate($request , 
			[
				'tenloaiSP' =>'required|unique:categories,name|min:3|max:100'
		], 
		[
			'tenloaiSP.required' =>'Bạn chưa nhập tên loại sản phẩm',
			'tenloaiSP.unique' =>'tên loại sản phẩm đã tồn tại',
			'tenloaiSP.min' => 'tên loại sản phẩm phải có độ dài từ 3 cho đến 100 ký tự',
			'tenloaiSP.max' => 'tên loại sản phẩm phải có độ dài từ 3 cho đến 100 ký tự',
		]);
		$loaisanpham = new LoaiSanPham();
        $loaisanpham->name = $request->tenloaiSP;
		$loaisanpham->type = $request->tenloaiSP;
        $loaisanpham->slug =str_slug($request->tenloaiSP);        
		$loaisanpham->save();
		//thêm thành công thì làm gì?
		return redirect('admin/loaisanpham/them')->with('thongbao','thêm thành công');
    }

    function getSua($id) {
		//lấy ra id loại tin muốn sưa
		$loaisanpham = LoaiSanPham::find($id);	
		return view('admin.loaisanpham.sua' ,['loaisanpham' =>$loaisanpham]);
    }

    function postSua($id, Request $request) {
        $loaisanpham = LoaiSanPham::find($id);
		$this->validate($request,
			[
				'tenloaiSP' =>'required|unique:categories,name|min:3|max:100'
		], 
		[
			'tenloaiSP.required' =>'Bạn chưa nhập tên loại sản phẩm',
			'tenloaiSP.unique' =>'tên loại sản phẩm đã tồn tại',
			'tenloaiSP.min' => 'tên loại sản phẩm phải có độ dài từ 3 cho đến 100 ký tự',
			'tenloaiSP.max' => 'tên loại sản phẩm phải có độ dài từ 3 cho đến 100 ký tự',
		]);
        $loaisanpham->name = $request->tenloaiSP;
		$loaisanpham->type = $request->tenloaiSP;
        $loaisanpham->slug =str_slug($request->tenloaiSP);        
		$loaisanpham->save();
		//sau khi sửa xong trở lại trang sửa		
		return redirect('admin/loaisanpham/sua/'.$id.'/')->with('thongbao','sửa thành công');
    }

    function getXoa($id) {
        $loaisanpham = LoaiSanPham::find($id);
		$loaisanpham->delete();
		// $loaitin->save();
		return redirect('/admin/loaisanpham/danhsach')->with('thongbao','xóa thành công');	
    }

}
