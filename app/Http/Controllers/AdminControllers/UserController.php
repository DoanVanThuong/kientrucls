<?php

namespace App\Http\Controllers\AdminControllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;
use Cache;


use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{

   function getDangNhap() {
    
        return view('pages.login');
       
   }

   function getDangXuat() {
        Auth::logout();
        Session::flush();
        Cache::flush();
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
        $role = (int)$req->loai;
        if($password != $req->repassword) {
            return redirect()->back()->with('thongbao','mật khẩu nhập lại chưa trùng khớp!');
        }     
        $data = array_add([
            'name' =>$name,
            'email' =>$email,
            'role' =>$role
        ], 'password', $password);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' =>$data['role'],
            'password' => bcrypt($data['password']),
        ]);
        return redirect('admin/dangky')->with('thongbao','Đăng kí thành công'); 
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
			return redirect('/admin')->with('thongbao','Sai tài khoản hoặc mật khẩu');
		}
	}
}
