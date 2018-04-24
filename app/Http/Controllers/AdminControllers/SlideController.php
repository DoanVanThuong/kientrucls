<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\adminModels\Slide;

class SlideController extends Controller
{
    function getDanhSach() {
        $slide = Slide::all();
        return view('adminls.slide.danhsach', [
            'slide' => $slide
        ]);
    }

    function getThem() {
        return view('adminls.slide.them');
    }

    function getXoa($id) {
        $slide = Slide::find($id);
        if(!$slide) {
            return;
        }
        unlink($slide->img);
        $slide->delete();
		return redirect('admin/slide/danhsach')->with('thongbao','Xóa thành công');
         
    }

    function getSua($id) {
        $slide = Slide::find($id);
        return view('adminls.slide.sua', [
            'slide' => $slide
        ]);
    }

    function postThem(Request $request) {
       
		$slide = new Slide();
        $slide->title = $request->title; 
        $slide->sub = $request->sub;                          
          //kiem tra upload anh
        if($request->hasFile('anh')) { 
            if ($request->file('anh')->isValid()) {                
                $file = $request->file('anh');
                $format =strtolower( $file->getClientOriginalExtension());
                    if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  ) {
                        alert()->error('Có lỗi', 'Error');
                        return redirect('admin/slide/them/')->with('loi','file ảnh phải có đuôi jpg, png, jpeg, bmp');
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
                    $file->move('img/home', $hinh);
                    $slide->img = strtolower('img/home/'.$hinh);
                }
                else
                return redirect('admin/slide/them')->with('loi','Lỗi, vui lòng kiểm tra lại');                
            }        
         else
         {             
            $slide->img = " ";
         }
		$slide->save();
		//sau khi sửa xong trở lại trang sửa		
		return redirect('admin/slide/them')->with('thongbao','thêm thành công');
    }

    function postSua(Request $request, $id) {
       
        $slide = Slide::find($id);
        if(!$slide) {
            return;
        }
        $slide->title = $request->title; 
        $slide->sub = $request->sub;                          
          //kiem tra upload anh
        if($request->hasFile('anh')) { 
            if ($request->file('anh')->isValid()) {                
                $file = $request->file('anh');
                $format =strtolower( $file->getClientOriginalExtension());
                    if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  ) {
                        alert()->error('Có lỗi', 'Error');
                        return redirect('admin/slide/sua/'.$id)->with('loi','file ảnh phải có đuôi jpg, png, jpeg, bmp');
                    }             
                    //lay ten hinh
                    $tenhinh = $file->getClientOriginalName();
                    
                    //dat ten hinh cho khoi trung
                    $hinh = str_random(4)."_".$tenhinh;
                    //neu random trung thi chay lai random lai
                    while (file_exists("img/".$hinh)) {
                        $hinh = str_random(4)."_".$tenhinh;
                    }
                    unlink($slide->img);
                    //luu hinh vào thu muc
                    $file->move('img/home', $hinh);
                    $slide->img = strtolower('img/home/'.$hinh);
                }
                else
                return redirect('admin/slide/sua/'.$id)->with('loi','Lỗi, vui lòng kiểm tra lại');                
            }        
         else
         {             
          
         }
		$slide->save();
		//sau khi sửa xong trở lại trang sửa		
		return redirect('admin/slide/danhsach')->with('thongbao','sửa thành công');
    }
}
