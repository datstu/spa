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


class ProductManagementController extends Controller
{
    //adin
    public function indexAdmin(Request $req){

        $checkAuth = (new AdminController)->checkAuthAdmin();
        if(!$checkAuth) return redirect('/admin-login');
        
        $listProduct = Product::orderby('productID','DESC')->paginate(5);
        $category = CategoryProduct::all();
        $brand = BrandProduct::all();

        /*seo*/
        $meta_desc = "Miêu tả desc";
        $meta_keywords = "trị mụn, spa, sản phẩm y tế";
        $meta_title = "Khỏe cùng Lea chăm sóc sắc đẹp";
        $url_canonical = $req->url();
        /*end seo*/
        return view('admin.product.list')->with(compact('listProduct','category','brand','meta_desc','meta_keywords','meta_title','url_canonical'));
    }
    public function   viewAddProduct(){
        $checkAuth = (new AdminController)->checkAuthAdmin();
        $categoryList = CategoryProduct::all();
        $brandList = BrandProduct::all();
        if(!$checkAuth) return redirect('/admin-login');   
     return view("admin.product.add")->with('categoryList',$categoryList)->with('brandList',$brandList);
   }
   public function saveProduct(Request $req){
       $data = $req->all();
       $path = 'public/uploads/product';
       if(empty($req->id)){
           $product = new Product();
           $product->productName = $data['nameProduct'];
           $product->catID = empty($data['category'])?0:$data['category'];
           $product->brandID =empty($data['brand'])?0:$data['brand']; 
           $product->product_desc = empty($data['descProduct'])?'':$data['descProduct'];
           $product->price = $data['price'];
           $product->price_old = empty($data['priceOld'])?'':$data['priceOld'];
           $product->meta_keyswords = $data['meta_keywords'];
           
           $product->moTaNgan = $data['sortDescProduct'];
           $product->status = $data['statusProduct'];
           $product->type = $data['typeProduct'];
           $tags = explode(" ", $req->tags);
           if($tags) $product->tags = json_encode($tags);
           $product->ghiChu = empty($data['note'])?'':$data['note'];

           $getImage = $req->file('imgProduct');
           if($getImage){
                $newImage = strtotime("now") .'-'.$getImage->getClientOriginalName();
                $getImage->move($path,$newImage);
                $product->image = $newImage; 
           }
          
         
            $result = $product->save();
            
           if($result){
               Session::put('message','success_add');
            } else {
               Session::put('message','fail_add');
            }
       } else{
            $product = Product::find($req->id);
            if($req->imgProductupdate){
                //delete file if image old isset
                $images = scandir($path, SCANDIR_SORT_DESCENDING);
                foreach( $images as $image){
                    if($image == $product->image){
                        unlink($path.DIRECTORY_SEPARATOR.$image );
                    }
                }
                //insert new file
                $getImage = $req->file('imgProductupdate');
                $newImage = strtotime("now") .'-'.$getImage->getClientOriginalName();
                $getImage->move($path,$newImage);
                $product->image = $newImage; 
                }   
           $product->productName = $data['nameProduct'];
           $product->catID = empty($data['category'])?0:$data['category'];
           $product->brandID = empty($data['brand'])?0:$data['brand']; 
           $product->product_desc = empty($data['descProduct'])?'':$data['descProduct'];
           $product->price = $data['price'];
           $product->price_old = empty($data['priceOld'])?'':$data['priceOld'];
           $product->moTaNgan = $data['sortDescProduct'];
           $product->status = $data['statusProduct'];
           $product->type = $data['typeProduct'];
           $product->meta_keyswords = $data['meta_keywords'];
           $product->ghiChu = empty($data['note'])?'':$data['note'];
           $tags = explode(" ", $req->tags);
           $tags = array_diff($tags, array(""));
           if($tags) $product->tags = json_encode($tags);
           $product->ghiChu = empty($data['note'])?'':$data['note'];
           $result = $product->save();
           if($result){
               Session::put('message','success_edit');
            } else {
               Session::put('message','fail_edit');
            }
       }
       return Redirect::to('/quan-ly-san-pham');
   }

   public function viewUpdateProduct($id){
       $checkAuth = (new AdminController)->checkAuthAdmin();
       if(!$checkAuth) return redirect('/admin-login');
       
       $ProductById = Product::find($id);
       $categoryList = CategoryProduct::all();
       $brandList = BrandProduct::all();
       if( empty($ProductById)){
        Session::put('message','fail_edit');
        return Redirect::to('/quan-ly-san-pham');
        }
       return view('admin.product.add')->with('ProductById',$ProductById)->with('categoryList',$categoryList)->with('brandList',$brandList);    
   }
   
   public function deleteProduct($id){
        $result = Product::find($id);
        if($result){
            $path = 'public/uploads/product';
            //delete file if image old isset
           $images = scandir($path, SCANDIR_SORT_DESCENDING);
           foreach( $images as $image){
               if($image == $result->image){
                   unlink($path.DIRECTORY_SEPARATOR.$image );
               }
           }
            $result->delete();
            Session::put('message','success_delete');
        } else {
            Session::put('message','fail_delete');
        }
       
        return Redirect::to('/quan-ly-san-pham');
   }

   public function addImageProduct($id){
    $productDetail = Product::find($id);
    $listImgaOfProduct = MultiImage::where('productID',$id)->paginate(3);
       return view('admin.multiImage.show')->with('productDetail',$productDetail)->with('listImgaOfProduct',$listImgaOfProduct);
   }

   public function saveMultiImage(Request  $req){
    $path = 'public/uploads/product';
    $getImage = $req->file('imgMulti');
    $prodId = $req->productId;
    $count = 0;

    foreach ( $getImage  as $photo){
        $name =  strtotime("now") .'-'.$photo->getClientOriginalName();
        $photo->move($path,$name);

        $multil = new MultiImage();
        $multil->imgName = $name; 
        $multil->productID = $prodId; 
        $result= $multil->save();
        $count++;
        if($result){
            Session::put('message','success_add');
         } else {
            Session::put('message','fail_add');
         }
    }
    
    return Redirect::to('/them-anh-'.$prodId);
   }

   
   public function deleteMultiImage($id){
    $result = MultiImage::find($id);
    $prodId =  $result->productID;
        if($result){
            $path = 'public/uploads/product';
            //delete file if image old isset
           $images = scandir($path, SCANDIR_SORT_DESCENDING);
           foreach( $images as $image){
               if($image == $result->imgName){
                   unlink($path.DIRECTORY_SEPARATOR.$image );
               }
           }
            $result->delete();
            Session::put('message','success_delete');
        } else {
            Session::put('message','fail_delete');
        }
       
        return Redirect::to('/them-anh-'.$prodId);
   }
}
