<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\BrandProduct;
use App\Product;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
class BrandManagementController extends Controller
{
    public function   viewAddBrand(){
        $checkAuth = (new AdminController)->checkAuthAdmin();
        if(!$checkAuth) return redirect('/admin-login');   
     return view("admin.brand.add");
   }
   public function saveBrand(Request $req){
    $path = 'public/uploads/brand';
       $data = $req->all();
       if(empty($req->id)){
           $Brand = new BrandProduct();
           $Brand->Brand_name = $data['nameBrand'];
           $Brand->Brand_desc = empty($data['descBrand'])?'':$data['descBrand'];
           $Brand->Brand_image = empty($data['imgBrand'])?'':$data['imgBrand'];
           $Brand->Brand_status = $data['statusBrand'];
           
           $getImage = $req->file('imgBrand');
           if($getImage){
               $newImage = strtotime("now") .'-'.$getImage->getClientOriginalName();
               $getImage->move($path,$newImage);
               $Brand->Brand_image = $newImage; 
           
           }
           $result = $Brand->save();
           if($result){
               Session::put('message','success_add');
            } else {
               Session::put('message','fail_add');
            }
       } else{
           $Brand = BrandProduct::find($req->id);
           
           $Brand->brand_name = $data['nameBrand'];
           $Brand->brand_desc = empty($data['descBrand'])?'':$data['descBrand'];
           
           $Brand->brand_status = $data['statusBrand'];
           $getImage = $req->file('imgBrand');
           if($getImage){
            //delete file if image old isset
            $images = scandir($path, SCANDIR_SORT_DESCENDING);
            foreach( $images as $image){
                if($image == $Brand->brand_image){
                    unlink($path.DIRECTORY_SEPARATOR.$image );
                }
            }
           $newImage = strtotime("now") .'-'.$getImage->getClientOriginalName();
           $getImage->move($path,$newImage);
           $Brand->brand_image = $newImage; 
       } 
           $result = $Brand->save();
           if($result){
               Session::put('message','success_edit');
            } else {
               Session::put('message','fail_edit');
            }
       }
       return Redirect::to('/quan-ly-thuong-hieu');
   }

   public function showAllBrandProduct(){
       $checkAuth = (new AdminController)->checkAuthAdmin();
       if(!$checkAuth) return redirect('/admin-login');
       
       $listBrand = BrandProduct::paginate(5);
       $managerBrand= view('admin.brand.list')->with('listBrandProduct',$listBrand);
       return view('admin')->with('admin.brand.list',$managerBrand);
   }

   public function viewUpdateBrand($id){
       $checkAuth = (new AdminController)->checkAuthAdmin();
       if(!$checkAuth) return redirect('/admin-login');
      
       $BrandById = BrandProduct::find($id);
       if( empty($BrandById)){
        Session::put('message','fail_edit');
        return Redirect::to('/quan-ly-thuong-hieu');
}
       $showBrand= view('admin.brand.add')->with('brandById',$BrandById);
     
       return view('admin')->with('admin.brand.add',$showBrand);
        
   }
   
   public function deleteBrand($id){
        $check = Product::where('brandID',$id)->first();
        if($check){
            Session::put('message','fail_delete');
            return Redirect::to('/quan-ly-thuong-hieu');
        }

        $result = BrandProduct::find($id);
        if($result){
             $path = 'public/uploads/brand';
          //delete file if image old isset
         $images = scandir($path, SCANDIR_SORT_DESCENDING);
         foreach( $images as $image){
             if($image == $result->brand_image){
                 unlink($path.DIRECTORY_SEPARATOR.$image );
             }
         }
            $result->delete();
            Session::put('message','success_delete');
        } else {
            Session::put('message','fail_delete');
        }
       
        return Redirect::to('/quan-ly-thuong-hieu');
   }
}
