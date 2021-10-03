<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

use App\CategoryProduct;
use Mail;
use URL;
class HomeController extends Controller
{
    //
    public function index(Request $req){
        $meta_desc = "Lea Beauty - Spa Điều Trị Da Uy Tín Phú Nhuận";
        $meta_keywords = "Trị mụn tắm trắng triệt lông";
        $meta_title = "Chăm sóc sắc đẹp";
        $url_cannonical = $req->url();
        $listProduct = Product::where('status',1)->where('type',1)->get();
        //return view("layout")->with('listProduct',$listProduct);
 
        return view("layout")->with(compact('meta_desc','meta_keywords','meta_title','url_cannonical','listProduct'));
    }
     public function listServiceMassage(){
        return view("pages.listServiceMassage");
    }
    
    public function detailServiceMassage(){
        return view("pages.detailServiceMassage");
    }
    public function sendMail(){
        $toName = 'Khỏe cùng Lea';
        $toMail = 'user98.2018@gmail.com';
        $link = URL::to('/cap-nhat-don-hang-16');
        $data = array("link"=>$link );
        Mail::send('pages.mail',$data,function($message) use ($toName,$toMail){
            $message->to($toMail)->subject('Có đơn hàng mới từ web Khỏe cùng Lea');//send this mail with subject
            $message->from($toMail,$toName);//send from this mail
        });
        return redirect('/')->with('message','');
    }
    public function returnPolicy(Request $req){
        $meta_desc = "Lea Beauty - Spa Điều Trị Da Uy Tín Phú Nhuận";
        $meta_keywords = "Trị mụn tắm trắng triệt lông";
        $meta_title = "Chăm sóc sắc đẹp";
        $url_canonical = $req->url();
 
        return view('template/ecommerce/returnPolicy')->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'));
    }

    
    public function paymentPolicy(Request $req){
        $meta_desc = "Lea Beauty - Spa Điều Trị Da Uy Tín Phú Nhuận";
        $meta_keywords = "Trị mụn tắm trắng triệt lông";
        $meta_title = "Chăm sóc sắc đẹp";
        $url_canonical = $req->url();
 
        return view('template/ecommerce/paymentPolicy')->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'));
    }
    public function receivePolicy(Request $req){
        $meta_desc = "Lea Beauty - Spa Điều Trị Da Uy Tín Phú Nhuận";
        $meta_keywords = "Trị mụn tắm trắng triệt lông";
        $meta_title = "Chăm sóc sắc đẹp";
        $url_canonical = $req->url();
 
        return view('template/ecommerce/receivePolicy')->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'));
    }
    public function aboutUs(Request $req){
        $meta_desc = "Lea Beauty - Spa Điều Trị Da Uy Tín Phú Nhuận";
        $meta_keywords = "Trị mụn tắm trắng triệt lông";
        $meta_title = "Chăm sóc sắc đẹp";
        $url_canonical = $req->url();
 
        return view('template/ecommerce/aboutUs')->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'));
    }
    public function productCategory( $id){
        if($id=999){
            $productCategory = Product::where('status',1)->where('type',1)->paginate(12);
            $category = 999;
            return view('pages/product/productCategory')->with(compact('productCategory','category'));
        } else{
            $productCategory = Product::join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.catID')
            ->where('tbl_product.catID',$id)
            ->paginate(12);
            $category = CategoryProduct::find($id);
            if( empty($category) || empty($productCategory)) return redirect('/trang-chu');
            return view('pages/product/productCategory')->with(compact('productCategory','category'));
        }
        
      
    }
    
    
}
