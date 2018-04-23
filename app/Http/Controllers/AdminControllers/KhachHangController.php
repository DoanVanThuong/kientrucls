<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\adminModels\KhachHang;


class KhachHangController extends Controller
{
    function getDanhSach() {
        $khachhang = KhachHang::all();
        return view('adminls.khachhang.danhsach',[
            'khachhang' => $khachhang
        ]);
    }

    function getThem() {
        return view('adminls.khachhang.them',[
        ]);
    }

    function getSua($id) {
        $khachhang = KhachHang::find($id);
        return view('adminls.khachhang.sua',[
            'khachhang' => $khachhang
        ]);
    }

    function getXoa($id) {
        $khachhang = KhachHang::find($id);
        if(!$khachhang) {
            return;
        }      
        $khachhang->delete();
        return redirect('admin/khachhang/danhsach')->with('thongbao', 'Xóa thành công khách hàng');                  
    }

    function postThem(Request $request) {
        $this->validate($request,
			[
				'tenKH' =>'required|min:3|max:100'
		], 
		[
			'tenKH.required' =>'Bạn chưa nhập tên khách hàng',
			'tenKH.min' => 'tên khách hàng phải có độ dài từ 3 cho đến 100 ký tự',
			'tenKH.max' => 'tên khách hàng phải có độ dài từ 3 cho đến 100 ký tự',
        ]);
		$khachhang = new KhachHang();
        $khachhang->name = $request->tenKH;           
          //kiem tra upload anh
        if($request->hasFile('anh')) { 
            if ($request->file('anh')->isValid()) {                
                $file = $request->file('anh');
                $format =strtolower( $file->getClientOriginalExtension());
                    if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  ) {
                        alert()->error('Có lỗi', 'Error');
                        return redirect('admin/khachhang/sua/'.$id)->with('loi','file ảnh phải có đuôi jpg, png, jpeg, bmp');
                    }             
                    //lay ten hinh
                    $tenhinh = $file->getClientOriginalName();
                    
                    //dat ten hinh cho khoi trung
                    $hinh = str_random(4)."_".$tenhinh;
                    //neu random trung thi chay lai random lai
                    while (file_exists("img/".$hinh)) {
                        $hinh = str_random(4)."_".$tenhinh;
                    }
                    //luu hinh vào thu muc
                    $file->move('img/', $hinh);
                    $khachhang->img = strtolower('img/'.$hinh);
                }
                else
                return redirect('admin/khachhang/them')->with('loi','Lỗi, vui lòng kiểm tra lại');                
            }        
         else
         {             
            $khachhang->img = " ";
         }
		$khachhang->save();
		//sau khi sửa xong trở lại trang sửa		
		return redirect('admin/khachhang/them')->with('thongbao','thêm thành công');
    }

    function postSua(Request $request, $id) {
        $khachhang = KhachHang::find($id);
        if(!$khachhang) {
            return;
        }
		$this->validate($request,
			[
				'tenKH' =>'required|min:3|max:100'
		], 
		[
			'tenKH.required' =>'Bạn chưa nhập tên khách hàng',
			'tenKH.min' => 'tên khách hàng phải có độ dài từ 3 cho đến 100 ký tự',
			'tenKH.max' => 'tên khách hàng phải có độ dài từ 3 cho đến 100 ký tự',
		]);
        $khachhang->name = $request->tenKH;           
          //kiem tra upload anh
        if($request->hasFile('anh')) { 
            if ($request->file('anh')->isValid()) {                
                $file = $request->file('anh');
                $format =strtolower( $file->getClientOriginalExtension());
                    if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  ) {
                        alert()->error('Có lỗi', 'Error');
                        return redirect('admin/khachhang/sua/'.$id)->with('loi','file ảnh phải có đuôi jpg, png, jpeg, bmp');
                    }             
                    //lay ten hinh
                    $tenhinh = $file->getClientOriginalName();
                    
                    //dat ten hinh cho khoi trung
                    $hinh = str_random(4)."_".$tenhinh;
                    //neu random trung thi chay lai random lai
                    while (file_exists("img/".$hinh)) {
                        $hinh = str_random(4)."_".$tenhinh;
                    }
                    //luu hinh vào thu muc
                    $file->move('img/', $hinh);
                    //xóa file cũ
                    unlink($khachhang->img);                    
                    $khachhang->img = strtolower('img/'.$hinh);
                      //xóa file cũ
                }
                else
                return redirect('admin/khachhang/sua/'.$id)->with('loi','Lỗi, vui lòng kiểm tra lại');                
            }        
         else
         {             
            //nếu không thay hình
         }
		$khachhang->save();
		//sau khi sửa xong trở lại trang sửa		
		return redirect('admin/khachhang/sua/'.$id.'/')->with('thongbao','sửa thành công');
    }
}
