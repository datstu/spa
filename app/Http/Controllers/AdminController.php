<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
    public function checkAuthAdmin(){
        $name = Session::get('admin_name');
        
        if($name) return true;
             return false;
    }
    public function index(){
        if( !$this->checkAuthAdmin())  return redirect('/admin-login');
        return view("admin.dashboard");
    }
    public function login(){
        return view("admin.login");
    }
    public function dashboard(Request $request){
         $admin_email = $request->admin_email;
         $admin_password = md5($request->admin_password);
         $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
         if($result){
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->admin_id);
            return redirect('/admin');
         } else {
            Session::put('message', 'fail');
            return redirect('/admin-login');
        }
    }
    public function logout(){
        Session::put('admin_name',null);
        Session::put('amin_id', null);
        return Redirect::to('/admin-login');

    }
    function luu_hinh_flash($filechon,$dthem,$uploaddir, &$error ){
        if($dthem!=' '){ 
            $uploaddir=$dthem.$uploaddir; }else{$uploaddir=$uploaddir;
           }
            $error="";
             $choupload = array("image/gif","image/jpeg","image/pjpeg","application/x-shockwave-flash","image/png",'image/x-png'); 
             $maxsize = 1024*5000; $f = $_FILES[$filechon]; $tmp_name = $f["tmp_name"]; 
             if ($tmp_name == "") return ""; 
             $tenfile = $f["name"]; $kieufile = $f["type"]; $cocuafile = $f["size"];  
             if (in_array($kieufile,$choupload)==false) $error = "<br>Kiểu file không chấp nhận";
              if ($cocuafile>$maxsize) $error = "<br>Kích thước file quá lớn"; 
              if ($error!="") return "";  
              $date = date("Y-m-d H:i:s"); 
              $datedaloc = cat_kytu_dacbiet($date,1,1,1,0,1);
               $tenfiledaloc = cat_kytu_dacbiet($tenfile,1,1,1,0,1); 
               $chuoingau=chuoingaunhien(10);  
               if ($kieufile=="image/png" || $kieufile=="image/x-png") $ext=".png";
                elseif ($kieufile=="image/gif") $ext=".gif";
                 elseif($kieufile== "image/jpeg" || $kieufile=="image/pjpeg") $ext = ".jpg";
                  else $ext = ".swf"  ;  
                  $pathfile = $uploaddir . $datedaloc.$chuoingau.$ext; 
                  if (file_exists($uploaddir)==false) mkdir($uploaddir, NULL ,true);
                   move_uploaded_file($tmp_name, $pathfile); 
                    if($dthem!=' '){ 
                        if((strpos($pathfile,$dthem))!==false) {
                         $hinh_full = explode($dthem,$pathfile); $hinh_xong0=$hinh_full[0]; $hinh_xong1=$hinh_full[1]; $kq=$hinh_xong1; 
                       }else{
                           $kq=$pathfile;} 
                       }else{$kq=$pathfile;
                       }  return $kq; 
                   }
}
