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
}
