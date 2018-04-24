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

    function getSua($id) {
        $tintuc = TinTuc::find($id);
        if(!$tintuc) {
            return;
        }
        return view('adminls.tintuc.sua', [
            'tintuc' => $tintuc
        ]);
    }
    function getXoa($id) {
        $tintuc = TinTuc::find($id);
        if(!$tintuc) {
            return;
        }
        unlink($tintuc->img);
        $tintuc>delete();
    return redirect('/admin/tintuc/danhsach')->with('thongbao','Xóa thành công '.''. $tintuc->name);	
    }

    function postThem(Request $request) {
        
    	$this->validate($request,[
            'tieude' => 'required|min:10',
            'mota' =>'required',
            'noidung' => 'required',
    	],
    	[
            'tieude.required' =>'bạn chưa nhập tiêu đề',
            'tieude.min' =>'tiêu đề ít nhất 10 ký tự',
            'mota.required' =>'bạn chưa nhập tóm tắt',
            'noidung.required' =>'bạn chưa nhập nội dung',
        ]);
        $tintuc = new TinTuc();
        $tintuc->title = $request->tieude;
        $tintuc->slug = str_slug($request->tieude);
        $tintuc->des = $request->mota;
        $tintuc->content =  $request->noidung;

         //kiem tra upload anh
         if($request->hasFile('anh')) { 
            if ($request->file('anh')->isValid()) {                
                $file = $request->file('anh');
                $format =strtolower( $file->getClientOriginalExtension());
                    if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  ) {
                        alert()->error('Có lỗi', 'Error');
                        return redirect('admin/tintuc/them')->with('loi','file ảnh phải có đuôi jpg, png, jpeg, bmp');
                    }             
                    //lay url hinh
                    $tenhinh = $file->getClientOriginalName();                    
                    $hinh = str_random(4)."_".$tenhinh;
                    //neu random trung thi chay lai random lai
                    while (file_exists("img/news/".$hinh)) {
                        $hinh = str_random(4)."_".$tenhinh;
                    }
                    //luu hinh vào thu muc
                    $file->move('img/news', $hinh);
                    $tintuc->img = strtolower('img/news/'.$hinh);
                }
                else
                return redirect('admin/tintuc/them')->with('loi','Lỗi, vui lòng kiểm tra lại');                
            }        
         else
         {             
             $tintuc->img = " ";
         }         
		$tintuc->save();
		//thêm thành công thì làm gì?
		return redirect('admin/tintuc/them')->with('thongbao','thêm thành công');
    }

    function postSua(Request $request, $id) {
        
    	$this->validate($request,[
            'tieude' => 'required|min:10',
            'mota' =>'required',
            'noidung' => 'required',
    	],
    	[
            'tieude.required' =>'bạn chưa nhập tiêu đề',
            'tieude.min' =>'tiêu đề ít nhất 10 ký tự',
            'mota.required' =>'bạn chưa nhập tóm tắt',
            'noidung.required' =>'bạn chưa nhập nội dung',
        ]);
        $tintuc = TinTuc::find($id);
        if(!$tintuc) {
            return;
        }
        $tintuc->title = $request->tieude;
        $tintuc->slug = str_slug($request->tieude);
        $tintuc->des = $request->mota;
        $tintuc->content =  $request->noidung;

         //kiem tra upload anh
         if($request->hasFile('anh')) { 
            if ($request->file('anh')->isValid()) {                
                $file = $request->file('anh');
                $format =strtolower( $file->getClientOriginalExtension());
                    if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  ) {
                        alert()->error('Có lỗi', 'Error');
                        return redirect('admin/tintuc/sua/'.$id)->with('loi','file ảnh phải có đuôi jpg, png, jpeg, bmp');
                    }             
                    //lay url hinh
                    $tenhinh = $file->getClientOriginalName();                    
                    $hinh = str_random(4)."_".$tenhinh;
                    //neu random trung thi chay lai random lai
                    while (file_exists("img/news/".$hinh)) {
                        $hinh = str_random(4)."_".$tenhinh;
                    }
                    //luu hinh vào thu muc
                    $file->move('img/news', $hinh);
                    unlink($tintuc->img);
                    $tintuc->img = strtolower('img/news/'.$hinh);
                }
                else
                return redirect('admin/tintuc/them')->with('loi','Lỗi, vui lòng kiểm tra lại');                
            }        
         else
         {             
             
         }         
		$tintuc->save();
		//thêm thành công thì làm gì?
		return redirect('admin/tintuc/danhsach')->with('thongbao','Sửa thành công');
    }
}


?>