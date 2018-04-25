<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
   function getDangNhap() {
       return view('pages.login');
   }

   function getDangXuat() {
        Auth::logout();
        return redirect('/');
   }
   function getDangKy() {
       return view('pages.register');
   }

   function postDangKy(Request $req) {
        //validate
        $this->validate($req , 
        [
            'email' =>'required|unique:users,email|min:3|max:100',
            'password' =>'required|min:6',
            'name' =>'required',
            'repassword' => 'required|same:password'          
        ], 
        [
            'email.required' =>'Vui lòng nhập email',
            'password.required'=>'Vui lòng nhập password',
            'repassword.required' => 'Nhập lại password để xác nhận',
            'name.required' => 'Vui lòng nhập tên!',       
            'email.unique' =>'Email đã được đăng ký!',
            'password.min'=>'Password phải lớn hơn 6 ký tự', 
            'repassword.same' => 'mật khẩu nhập lại chưa trùng khớp'         
        ]);
        $name = $req->name;
        $email = $req->email;
        $password = $req->password;
        if($password != $req->repassword) {
            return redirect()->back()->with('thongbao','mật khẩu nhập lại chưa trùng khớp!');
        }     
        $data = array_add([
            'name' =>$name,
            'email' =>$email,
        ], 'password', $password);
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        return redirect('/dangky')->with('thongbao','Đăng kí thành công'); 
   }
   
   public function postDangNhap(Request $req)
	{
		//validate
        $this->validate($req , 
        [
            'email' =>'required',
            'password' =>'required',
        ], 
        [
            'email.required' =>'Vui lòng nhập email',
            'password.required'=>'Vui lòng nhập password',                
        ]);
		//nếu đăng nhập thành công return true
		if(Auth::attempt( ['email'=>$req->email ,'password'=>$req->password]))
		{			
			return redirect('/admin/ls');
		}
		else
		{
			//nếu không thành công thì về lại đăng nhập
			return redirect('admin/dangnhap')->with('thongbao','Sai tài khoản hoặc mật khẩu');
		}
	}
}
