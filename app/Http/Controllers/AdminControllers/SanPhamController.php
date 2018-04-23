<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\adminModels\SanPham;
use App\Http\Models\adminModels\LoaiSanPham;
use RealRashid\SweetAlert\Facades\Alert;

class SanPhamController extends Controller
{
   function getDanhSach() {
       $sanpham = SanPham::all();
       $name = SanPham::getTableName();
       return view('adminls.sanpham.danhsach', [
           'sanpham' => $sanpham,
           'name' => $name
       ]);
   }

   function getThem() {
       $loaisanpham = LoaiSanPham::all();
       return view('adminls.sanpham.them', [
           'loaisanpham' => $loaisanpham
       ]);
   }

   function postThem(Request $request) {
        //validate
        $this->validate($request , 
			[
				'tenSP' =>'required|unique:products,name|min:3|max:100'
		], 
		[
			'tenSP.required' =>'Bạn chưa nhập tên sản phẩm',
			'tenSP.unique' =>'tên sản phẩm đã tồn tại',
			'tenSP.min' => 'tên sản phẩm phải có độ dài từ 3 cho đến 100 ký tự',
			'tenSP.max' => 'tên sản phẩm phải có độ dài từ 3 cho đến 100 ký tự',
        ]);
        
        $sanpham = new SanPham();
        $sanpham->category_id = $request->loaisanpham;        
        $sanpham->name = $request->tenSP;
        $sanpham->code = $request->maSP;
        $sanpham->price = (int)$request->giaSP;
        $sanpham->status = $request->tinhtrangSP;
        $sanpham->guarantee = $request->bhSP;        
        $sanpham->size = $request->kichthuocSP;
        $sanpham->des = $request->description;
        $sanpham->slug =str_slug($request->tenSP);   
          //kiem tra upload anh
          if($request->hasFile('anh')) { 
            if ($request->file('anh')->isValid()) {                
                $file = $request->file('anh');
                $format =strtolower( $file->getClientOriginalExtension());
                    if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  ) {
                        alert()->error('Có lỗi', 'Error');
                        return redirect('admin/sanpham/them')->with('loi','file ảnh phải có đuôi jpg, png, jpeg, bmp');
                    }             
                    //lay url hinh
                    $tenhinh = $file->getClientOriginalName();                    
                    $hinh = str_random(4)."_".$tenhinh;
                    //neu random trung thi chay lai random lai
                    while (file_exists("img/products/".$hinh)) {
                        $hinh = str_random(4)."_".$tenhinh;
                    }
                    //luu hinh vào thu muc
                    $file->move('img/products', $hinh);
                    $sanpham->img = strtolower('img/products/'.$hinh);
                }
                else
                return redirect('admin/sanpham/them')->with('loi','Lỗi, vui lòng kiểm tra lại');                
            }        
         else
         {             
             $sanpham->img = " ";
         }         
		$sanpham->save();
		//thêm thành công thì làm gì?
		return redirect('admin/sanpham/them')->with('thongbao','thêm thành công');
   }

    function getSua($id) {
        $loaisanpham = LoaiSanPham::all();
        $sanpham = SanPham::find($id);
        if(!$sanpham) {
           return;
        }
        return view('adminls.sanpham.sua', [
            'sanpham' => $sanpham,
            'loaisanpham' =>$loaisanpham
        ]);   
   }

   function postSua($id, Request $request) {
         //validate
         $this->validate($request , 
         [
             'tenSP' =>'required|unique:products,name|min:3|max:100'
     ], 
     [
         'tenSP.required' =>'Bạn chưa nhập tên sản phẩm',
         'tenSP.unique' =>'tên sản phẩm đã tồn tại',
         'tenSP.min' => 'tên sản phẩm phải có độ dài từ 3 cho đến 100 ký tự',
         'tenSP.max' => 'tên sản phẩm phải có độ dài từ 3 cho đến 100 ký tự',
     ]);
     
     $sanpham = SanPham::find($id);
     if(!$sanpham) {
         return;
     }
     $sanpham->category_id = $request->loaisanpham;        
     $sanpham->name = $request->tenSP;
     $sanpham->code = $request->maSP;
     $sanpham->price = (int)$request->giaSP;
     $sanpham->status = $request->tinhtrangSP;
     $sanpham->guarantee = $request->bhSP;        
     $sanpham->size = $request->kichthuocSP;
     $sanpham->des = $request->description;
     $sanpham->slug =str_slug($request->tenSP);   
       //kiem tra upload anh
       if($request->hasFile('anh')) { 
         if ($request->file('anh')->isValid()) {                
             $file = $request->file('anh');
             $format =strtolower( $file->getClientOriginalExtension());
                 if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  ) {
                     alert()->error('Có lỗi', 'Error');
                     return redirect('admin/sanpham/sua/'.$id)->with('loi','file ảnh phải có đuôi jpg, png, jpeg, bmp');
                 }             
                 //lay url hinh
                 $tenhinh = $file->getClientOriginalName();                    
                 $hinh = str_random(4)."_".$tenhinh;
                 //neu random trung thi chay lai random lai
                 while (file_exists("img/products/".$hinh)) {
                     $hinh = str_random(4)."_".$tenhinh;
                 }
                 //luu hinh vào thu muc
                 //xóa file cũ
                 unlink($sanpham->img);              
                 $file->move('img/products', $hinh);
                 $sanpham->img = strtolower('img/products/'.$hinh);
             }
             else
             return redirect('admin/sanpham/sua/'.$id)->with('loi','Lỗi, vui lòng kiểm tra lại');                
         }        
      else
      {             
         
      }         
     $sanpham->save();
     //thêm thành công thì làm gì?
     return redirect('admin/sanpham/sua/'.$id)->with('thongbao','sửa thành công');
   }

   function getXoa($id) {
    $sanpham = SanPham::find($id);
    if(!$sanpham){
        return;
    }
    unlink($sanpham->img);        
    
    $sanpham->delete();
    return redirect('/admin/sanpham/danhsach')->with('thongbao','Xóa thành công '.''. $sanpham->name);	

    
}
}
