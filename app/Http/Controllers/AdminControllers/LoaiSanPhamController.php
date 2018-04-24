<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\adminModels\LoaiSanPham;
use RealRashid\SweetAlert\Facades\Alert;
class LoaiSanPhamController extends Controller
{
    function getDanhSach() {
        $name = LoaiSanPham::getTableName();
        $loaisanpham = LoaiSanPham::all();
		return view('adminls.loaisanpham.danhsach',[
            'loaisanpham'=>$loaisanpham,
            'name' => $name
            ]);
    }

    function getThem() {
        return view('adminls.loaisanpham.them');
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
        $loaisanpham->description = $request->description;
        $loaisanpham->slug =str_slug($request->tenloaiSP);   
         //kiem tra upload anh
        if($request->hasFile('anh')) { 
            if ($request->file('anh')->isValid()) {                
                $file = $request->file('anh');
                $format =strtolower( $file->getClientOriginalExtension());
                    if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  ) {
                        alert()->error('Có lỗi', 'Error');
                        return redirect('admin/loaisanpham/them')->with('loi','file ảnh phải có đuôi jpg, png, jpeg, bmp');
                    }             
                    //lay ten hinh
                    $tenhinh = $file->getClientOriginalName();
                    
                    //dat ten hinh cho khoi trung
                    $hinh = str_random(4)."_".$tenhinh;
                    //neu random trung thi chay lai random lai
                    while (file_exists("img/products/".$hinh)) {
                        $hinh = str_random(4)."_".$tenhinh;
                    }
                    //luu hinh vào thu muc
                    $file->move('img/products', $hinh);
                    $loaisanpham->img = strtolower('img/products/'.$hinh);
                }
                else
                return redirect('admin/loaisanpham/them')->with('loi','Lỗi, vui lòng kiểm tra lại');                
            }        
         else
         {             
             $loaisanpham->img = " ";
         }
		$loaisanpham->save();
		//thêm thành công thì làm gì?
		return redirect('admin/loaisanpham/them')->with('thongbao','thêm thành công');
    }

    function getSua($id) {
		//lấy ra id loại tin muốn sưa
        $loaisanpham = LoaiSanPham::find($id);	
        if(!$loaisanpham) {
            return;
        }
		return view('adminls.loaisanpham.sua' ,['loaisanpham' =>$loaisanpham]);
    }

    function postSua($id, Request $request) {
        $loaisanpham = LoaiSanPham::find($id);
        if(!$loaisanpham) {
            return;
        }
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
		$loaisanpham->description = $request->description;
        $loaisanpham->slug =str_slug($request->tenloaiSP); 
        
          //kiem tra upload anh
        if($request->hasFile('anh')) { 
            if ($request->file('anh')->isValid()) {                
                $file = $request->file('anh');
                $format =strtolower( $file->getClientOriginalExtension());
                    if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  ) {
                        alert()->error('Có lỗi', 'Error');
                        return redirect('admin/loaisanpham/sua/'.$id)->with('loi','file ảnh phải có đuôi jpg, png, jpeg, bmp');
                    }             
                    //lay ten hinh
                    $tenhinh = $file->getClientOriginalName();
                    
                    //dat ten hinh cho khoi trung
                    $hinh = str_random(4)."_".$tenhinh;
                    //neu random trung thi chay lai random lai
                    while (file_exists("img/products/".$hinh)) {
                        $hinh = str_random(4)."_".$tenhinh;
                    }
                    //luu hinh vào thu muc
                    $file->move('img/products', $hinh);
                    //xóa file cũ
                    unlink($loaisanpham->img);                    
                    $loaisanpham->img = strtolower('img/products/'.$hinh);
                      //xóa file cũ
                }
                else
                return redirect('admin/loaisanpham/sua/'.$id)->with('loi','Lỗi, vui lòng kiểm tra lại');                
            }        
         else
         {             
            //nếu không thay hình
         }
		$loaisanpham->save();
		//sau khi sửa xong trở lại trang sửa		
		return redirect('admin/loaisanpham/danhsach')->with('thongbao','sửa thành công');
    }

    function getXoa($id) {
        $loaisanpham = LoaiSanPham::find($id);
        if(!$loaisanpham) {
            alert()->error('Có lỗi', 'Error');
        }
        else
        unlink($loaisanpham->img);        
        
        alert()->success('Xóa thành công', 'Successfully');
        $loaisanpham->delete();
        return redirect('/admin/loaisanpham/danhsach')->with('thongbao','xóa thành công'.$loaisanpham->name);	

        
    }

}
