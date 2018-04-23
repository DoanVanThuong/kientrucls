<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\AdminModels\DuAn;
use App\Http\Models\adminModels\LoaiDuAn;
use Illuminate\Support\Facades\Storage;



class DuAnController extends Controller
{
    function getDanhSach() {
        $duan = DuAn::all();
        $loaiduan = LoaiDuAn::all();
        
        // dd($duan);
        return view('adminls.duan.danhsach', [
            'duan' => $duan,
            'loaiduan' => $loaiduan
        ]);
    }
    
    function getSua($id) {
        $duan = DuAn::find($id);
        return view('adminls.duan.sua', [
            'duan' => $duan
        ]);
    }

    function getXoa($id) {
        $duan =  DuAn::find($id);
        if(!$duan) {
            return;
        }
        if(!$duan->img) {
           $duan->img = "";            
        }
        unlink($duan->img);   
        $duan->delete();
        return redirect('/admin/duan/danhsach')->with('thongbao','xóa thành công'.' '.$duan->name);	      
    }

    function postThem(Request $request) {
        //validate
        $this->validate($request , 
        [
            'tenloai' =>'required|unique:project_category,name|min:3|max:100',
        ], 
    [
        'tenloai.required' =>'Bạn chưa nhập tên dự án',
        'tenloai.unique' =>'tên dự án đã tồn tại',
        'tenloai.min' => 'tên dự án phải có độ dài từ 3 cho đến 100 ký tự',
        'tenloai.max' => 'tên dự án phải có độ dài từ 3 cho đến 100 ký tự',
    ]);
    $duan = new DuAn();
    $duan->category_id = $request->loaiduan;
    $duan->name = $request->tenloai;
    $duan->des = $request->description;    
      //kiem tra upload anh
      if($request->hasFile('anh')) { 
       if ($request->file('anh')->isValid()) {                
           $file = $request->file('anh');
           $format =strtolower( $file->getClientOriginalExtension());
               if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  ) {
                   alert()->error('Có lỗi', 'Error');
                   return redirect('admin/duan/danhsach')->with('loi','file ảnh phải có đuôi jpg, png, jpeg, bmp');
                }             
                //lay ten hinh
                $tenhinh = $file->getClientOriginalName();
                
                //dat ten hinh cho khoi trung
                $hinh = str_random(4)."_".$tenhinh;
               
                //luu hinh vào thu muc tương ứng
                if($request->loaiduan == 1)
                {                    
                    $file->move('img/projects/bietthu', $hinh);
                    //neu random trung thi chay lai random lai
                    while (file_exists("img/projects/bietthu".$hinh)) {
                        $hinh = str_random(4)."_".$tenhinh;
                    }
                    echo"bietthu";
                    $duan->img = strtolower('img/projects/bietthu/'.$hinh);
                    
                }
                //luu hinh vào thu muc
                if($request->loaiduan == 2)
                {
                    $file->move('img/projects/nhaco', $hinh);
                    //neu random trung thi chay lai random lai
                    while (file_exists("img/projects/nhaco".$hinh)) {
                        $hinh = str_random(4)."_".$tenhinh;
                    }
                    $duan->img = strtolower('img/projects/nhaco/'.$hinh);                    
                }
                //luu hinh vào thu muc
                if($request->loaiduan == 3)
                {
                    $file->move('img/projects/nhalo', $hinh);
                    //neu random trung thi chay lai random lai
                    while (file_exists("img/projects/nhalo".$hinh)) {
                        $hinh = str_random(4)."_".$tenhinh;
                    }
                    $duan->img = strtolower('img/projects/nhalo/'.$hinh);                    
                }//luu hinh vào thu muc
                if($request->loaiduan == 4)
                {
                    $file->move('img/projects/vanphong', $hinh);
                    //neu random trung thi chay lai random lai
                    while (file_exists("img/projects/vanphong".$hinh)) {
                        $hinh = str_random(4)."_".$tenhinh;
                    }
                    $duan->img = strtolower('img/projects/vanphong/'.$hinh);
                }
           }
           else
           return redirect('admin/duan/them')->with('loi','Lỗi, vui lòng kiểm tra lại');                
       }        
    else
    {             
        $duan->img = " ";
    }
    $duan->save();
       return redirect('admin/duan/them')->with('thongbao','thêm thành công');
   }
}
