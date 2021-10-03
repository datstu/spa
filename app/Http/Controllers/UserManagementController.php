<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;

use App\Product;
use App\CategoryProduct;
use App\BrandProduct;
use App\MultiImage;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\NewUser;
class UserManagementController extends Controller
{
    public function registerUser(Request $req){
        $validatedData = $req->validate([
            'phone_number' => 'digits:10',
            'password' => 'min:6',
            're_password' => 'same:password',
        ],[
            'phone_number.digits' => 'Số điện thoại chưa đúng định dạng 10 số.',
            'password.min' => 'Độ dài mật khẩu ít nhất 6 ký tự',
            're_password.same' => 'Mật khẩu phải trùng nhau.',
        ]);
        $user = new NewUser();
        $data = $req->all();
        $user ->name_user =$data['name_user'];
        $user ->phone_number =$data['phone_number'];
        $user ->password =md5($data['password']);
        
        $user->save();
        Session::put('id_user',$user->id_user);
        Session::put('name_user',$user->name_user);

        return Redirect('/checkout-'.$user->id_user);
    }
    public function checkAuthLogin(){
        $name = Session::get('id_user');
        
        if($name) return true;
             return false;
    }
    public function loginUser(Request $req){
        $phone = $req->phone_number;
        $password = md5($req->password);
        $result = NewUser::where('phone_number', $phone)->where('password',$password)->first();
       
        if($result){
            Session::put('id_user',$result->id_user);
            Session::put('name_user',$result->name_user);
            return Redirect('/checkout-'.$result->id_user);
         } else {
            Session::put('message', 'fail');
            return redirect('/login-checkout');
        }
       

    }

    public function logoutUser(){
       
        Session::flush();
        return Redirect::to('/login-checkout');
    }
}
