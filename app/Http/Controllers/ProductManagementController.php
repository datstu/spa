<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;

class ProductManagementController extends Controller
{
    //adin
    public function indexAdmin(){
         $checkAuth = (new AdminController)->checkAuthAdmin();
         if(!$checkAuth) return redirect('/admin-login');
         
        return "";
    }
}
