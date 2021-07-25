<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;

use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;


class CategoryManagementController extends AdminController
{
    //admin
    public function indexAdmin(){
        $checkAuth = (new AdminController)->checkAuthAdmin();
         if(!$checkAuth) return redirect('/admin-login');
         
      return view("admin.category");
    }

    public function saveCategory(Request $req){
        $data = array();
        $data['category_name'] = $req->nameCategory;
        $data['category_desc'] = $req->descCategory;
        $data['category_status'] = $req->statusCategory;

        $result = DB::table('tbl_category_product')->insert($data);
        if($result){
            Session::put('message','success');
         } else {
            Session::put('message','fail');
         }
       
        return Redirect::to('/quan-ly-danh-muc');
    }
}

