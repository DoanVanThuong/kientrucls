<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\ProjectQModel;
use App\Http\Models\adminModels\LoaiDuAn;
use App\Http\Models\adminModels\BoSuuTap;



class BoSuuTapController extends Controller
{
    function getDanhSach() {
        $bietthu = ProjectQModel::getProjectByCategory(1);
        $nhaco = ProjectQModel::getProjectByCategory(2);
        $nhalo = ProjectQModel::getProjectByCategory(3);
        $vanphong = ProjectQModel::getProjectByCategory(4);
        
        return view('adminls.bosuutap.danhsach', [
            'bietthu' => $bietthu,
            'nhaco' => $nhaco,
            'nhalo' => $nhalo,
            'vanphong' => $vanphong,
            
        ]);
    }

    function getThem() {
        $loaiduan = LoaiDuAn::all();
        return view('adminls.bosuutap.them', [
            'loaiduan' => $loaiduan
        ]);
    }

    function getXoa($id) {
        $bosuutap =  BoSuuTap::find($id);
        if(!$bosuutap) {
            return;
        }
        if(!$bosuutap->img) {
           $bosuutap->img = " ";            
        }
        else
        unlink($bosuutap->img);   
        $bosuutap->delete();
        return redirect('/admin/bosuutap/danhsach')->with('thongbao','xóa thành công'.' '.$bosuutap->name);	      
    }

    function getSua($id) {
        $loaiduan = LoaiDuAn::all();
        $bosuutap = BoSuuTap::find($id);
        if(!$bosuutap) {
            return;
        }
        return view('adminls.bosuutap.sua',[
            'bosuutap' =>$bosuutap,
            'loaiduan' => $loaiduan
        ]);
    }
    function postThem(Request $request) {
        //validate
        $this->validate($request , 
        [
            'tenloai' =>'required|min:3|max:100',
        ], 
        [
            'tenloai.required' =>'Bạn chưa nhập tên dự án',
            'tenloai.min' => 'tên dự án phải có độ dài từ 3 cho đến 100 ký tự',
            'tenloai.max' => 'tên dự án phải có độ dài từ 3 cho đến 100 ký tự',
        ]);
        $bosuutap = new BoSuuTap();
        $bosuutap->category_id = $request->loaiduan;
        $bosuutap->name = $request->tenloai;
        //kiem tra upload anh
        if($request->hasFile('anh')) { 
        if ($request->file('anh')->isValid()) {                
            $file = $request->file('anh');
            $format =strtolower( $file->getClientOriginalExtension());
                if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  ) {
                    alert()->error('Có lỗi', 'Error');
                    return redirect('admin/bosuutap/danhsach')->with('loi','file ảnh phải có đuôi jpg, png, jpeg, bmp');
                    }             
                    //lay ten hinh
                    $tenhinh = $file->getClientOriginalName();
                    
                    //dat ten hinh cho khoi trung
                    $hinh = str_random(4)."_".$tenhinh;
                
                    //luu hinh vào thu muc tương ứng
                    if($request->loaiduan == 1)
                    {                    
                        $file->move('img/gallery/bietthu', $hinh);
                        //neu random trung thi chay lai random lai
                        while (file_exists("img/gallery/bietthu".$hinh)) {
                            $hinh = str_random(4)."_".$tenhinh;
                        }
                        $bosuutap->img = strtolower('img/gallery/bietthu/'.$hinh);
                        
                    }
                    //luu hinh vào thu muc
                    if($request->loaiduan == 2)
                    {
                        $file->move('img/gallery/nhaco', $hinh);
                        //neu random trung thi chay lai random lai
                        while (file_exists("img/gallery/nhaco".$hinh)) {
                            $hinh = str_random(4)."_".$tenhinh;
                        }
                        $bosuutap->img = strtolower('img/gallery/nhaco/'.$hinh);                    
                    }
                    //luu hinh vào thu muc
                    if($request->loaiduan == 3)
                    {
                        $file->move('img/gallery/nhalo', $hinh);
                        //neu random trung thi chay lai random lai
                        while (file_exists("img/gallery/nhalo".$hinh)) {
                            $hinh = str_random(4)."_".$tenhinh;
                        }
                        $bosuutap->img = strtolower('img/gallery/nhalo/'.$hinh);                    
                    }//luu hinh vào thu muc
                    if($request->loaiduan == 4)
                    {
                        $file->move('img/gallery/vanphong', $hinh);
                        //neu random trung thi chay lai random lai
                        while (file_exists("img/gallery/vanphong".$hinh)) {
                            $hinh = str_random(4)."_".$tenhinh;
                        }
                        $bosuutap->img = strtolower('img/gallery/vanphong/'.$hinh);
                    }
            }
            else
            return redirect('admin/bosuutap/them')->with('loi','Lỗi, vui lòng kiểm tra lại');                
        }        
        else
        {             
            $bosuutap->img = " ";
        }
        $bosuutap->save();
        return redirect('admin/bosuutap/them')->with('thongbao','thêm thành công');
   }

   function postSua(Request $request, $id) {
     //validate
     $this->validate($request , 
     [
        
     ], 
     [
     ]);
     $bosuutap = BoSuuTap::find($id);
     if(!$bosuutap) {
         return;
     }
     $bosuutap->category_id = $request->loaiduan;
     $bosuutap->name = $request->tenloai;
     //kiem tra upload anh
     if($request->hasFile('anh')) { 
     if ($request->file('anh')->isValid()) {                
         $file = $request->file('anh');
         $format =strtolower( $file->getClientOriginalExtension());
             if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  ) {
                 return redirect('admin/bosuutap/sua/'.$id)->with('loi','file ảnh phải có đuôi jpg, png, jpeg, bmp');
                 }             
                 //lay ten hinh
                 $tenhinh = $file->getClientOriginalName();
                 
                 //dat ten hinh cho khoi trung
                 $hinh = str_random(4)."_".$tenhinh;
             
                 //luu hinh vào thu muc tương ứng
                 if($request->loaiduan == 1)
                 {            
                     unlink($bosuutap->img);                                         
                     $file->move('img/gallery/bietthu', $hinh);
                     //neu random trung thi chay lai random lai
                     while (file_exists("img/gallery/bietthu".$hinh)) {
                         $hinh = str_random(4)."_".$tenhinh;
                     }
                     echo"bietthu";
                     $bosuutap->img = strtolower('img/gallery/bietthu/'.$hinh);
                     
                 }
                 //luu hinh vào thu muc
                 if($request->loaiduan == 2)
                 {
                     unlink($bosuutap->img);                                         
                     
                     $file->move('img/gallery/nhaco', $hinh);
                     //neu random trung thi chay lai random lai
                     while (file_exists("img/gallery/nhaco".$hinh)) {
                         $hinh = str_random(4)."_".$tenhinh;
                     }
                     $bosuutap->img = strtolower('img/gallery/nhaco/'.$hinh);                    
                 }
                 //luu hinh vào thu muc
                 if($request->loaiduan == 3)
                 {
                     unlink($bosuutap->img);                                         
                     $file->move('img/gallery/nhalo', $hinh);
                     //neu random trung thi chay lai random lai
                     while (file_exists("img/gallery/nhalo".$hinh)) {
                         $hinh = str_random(4)."_".$tenhinh;
                     }
                     $bosuutap->img = strtolower('img/gallery/nhalo/'.$hinh);                    
                 }//luu hinh vào thu muc
                 if($request->loaiduan == 4)
                 {
                     unlink($bosuutap->img);                                                                 
                     $file->move('img/gallery/vanphong', $hinh);
                     //neu random trung thi chay lai random lai
                     while (file_exists("img/gallery/vanphong".$hinh)) {
                         $hinh = str_random(4)."_".$tenhinh;
                     }
                     $bosuutap->img = strtolower('img/gallery/vanphong/'.$hinh);
                 }
         }
         else
         return redirect('admin/bosuutap/sua/'.$id)->with('loi','Lỗi, vui lòng kiểm tra lại');                
     }        
     else
     {             
        
     }
     $bosuutap->save();
     return redirect('admin/bosuutap/danhsach')->with('thongbao','sửa thành công');
}
}
