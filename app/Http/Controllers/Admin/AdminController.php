<?php

namespace App\Http\Controllers\Admin;



use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{

    public function index()
    {
        return view('admin/index');

    }

    public function login()
    {
        return view('admin/login');

    }
    public function post_login(Request $request)
    {
            $this->validate($request,[
                'email' => 'required|email',
                'password' => 'required'
            ],[
                'email.email' => 'Email không đúng định dạng',
                'email.required' => 'Email không được để trống',
                'password.required' => 'Mật khẩu không được để trống'
            ]);
                // thuc hien login

                if(Auth::attempt($request->only('email','password'),$request->has('rmb'))){
                    return redirect()->route('home');
                }
                // else if(

                // )
                else{
                    return redirect()->back();
                }


    }

    public function logout()
    {
       Auth::logout();
       return redirect()->route('login');

    }




}
?>
