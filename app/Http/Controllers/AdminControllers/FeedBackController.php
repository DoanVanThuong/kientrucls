<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\adminModels\FeedBack;

class FeedBackController extends Controller
{
  

    function getDanhSach() {
        $feedback = FeedBack::all();
        return view('adminls.feedback.danhsach', [
            'feedback' => $feedback
        ]);
    }
    function getSua($id) {
        $feedback = FeedBack::find($id);
        if(!$feedback) {
            return;
        }
        $feedback->top = true;
        $feedback->save();      
        return redirect('admin/feedback/danhsach')->with('thongbao', 'Đưa lên trang chủ thành công');
    }

    function getXoa($id) {
        $feedback = FeedBack::find($id);
        if(!$feedback) {
            return;
        }
        $feedback->delete();
        return redirect('admin/feedback/danhsach')->with('thongbao', 'Xóa thành công phản hồi của ');        
        
    }

    function postThem(Request $request) {
        $this->validate($request,
			[
                'noidung' =>'required',
		], 
		[
            'noidung.required' => 'Bạn chưa nhập nội dung',
		]);
        $feedback = new Feedback();
        $feedback->content = $request->noidung;
        $feedback->customer = $request->customer;     
        $feedback->top = false;
        $feedback->save();      
        return redirect('/lien-he')->with('thongbao', 'Gửi phản hồi thành công');        
            
    }
}
