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
        $duan = DuAn::all();
        return view('adminls.loaiduan.danhsach', [
            'loaiduan' => $loaiduan,
            'duan' => $duan,
        ]);
    }

    function getXoa($id) {
        $loaiduan =  LoaiDuAn::find($id);
        if(!$loaiduan) {
            return;
        }
        unlink($loaiduan->img);        
        $loaiduan->delete();
        return redirect('/admin/loaiduan/danhsach')->with('thongbao','xóa thành công'.' '.$loaiduan->name);	
        
    }

    public static function countProject($id) {
        $soLuongDuAn = DuAn::counts($id);
       return $soLuongDuAn;
    }

    function postThem(Request $request) {
         //validate
         $this->validate($request , 
         [
             'tenloai' =>'required|unique:categories,name|min:3|max:100'
     ], 
     [
         'tenloai.required' =>'Bạn chưa nhập tên loại sản phẩm',
         'tenloai.unique' =>'tên loại sản phẩm đã tồn tại',
         'tenloai.min' => 'tên loại sản phẩm phải có độ dài từ 3 cho đến 100 ký tự',
         'tenloai.max' => 'tên loại sản phẩm phải có độ dài từ 3 cho đến 100 ký tự',
     ]);
     $loaiduan = new LoaiDuAn();
     $loaiduan->name = $request->tenloai;
     $loaiduan->slug =str_slug($request->tenloai);   

       //kiem tra upload anh
       if($request->hasFile('anh')) { 
        if ($request->file('anh')->isValid()) {                
            $file = $request->file('anh');
            $format =strtolower( $file->getClientOriginalExtension());
                if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  ) {
                    alert()->error('Có lỗi', 'Error');
                    return redirect('admin/loaiduan/danhsach')->with('loi','file ảnh phải có đuôi jpg, png, jpeg, bmp');
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
                $loaiduan->img = strtolower('img/products/'.$hinh);
            }
            else
            return redirect('admin/loaiduan/them')->with('loi','Lỗi, vui lòng kiểm tra lại');                
        }        
     else
     {             
         $loaiduan->img = " ";
     }

     $loaiduan->save();
	return redirect('admin/loaiduan/them')->with('thongbao','thêm thành công');
     
    }
}
