<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Product;
use App\CategoryProduct;
use App\BrandProduct;
use DB;
use App\Http\Requests;
use Session;
use Cart;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class CartController extends Controller
{
    public function saveCart(Request $req){

        $productId = $req->productId;
        $qty = $req->qty;

        
        $productInfo =  Product::find($productId);
        $data['id'] = $productInfo->productID;
        $data['name'] = $productInfo->productName;
        $data['price'] = (double)$this->replaceString($productInfo->price);
        $data['quantity'] =  $qty;
        $data['attributes']['image'] =  $productInfo->image;

        Cart::add( $data);
         
       // dd(Cart::getContent());
       
       //Cart::clear();
        return Redirect::to('/gio-hang');
    }

    public function replaceString($str){
        $newStr='';
        for( $i=0; $i< strlen($str);$i++){
            if($str[$i] ==','){
               continue;
            }else{
                
                $newStr .=$str[$i];
            }
        }
        return $newStr;
    }

    public function showCart(Request $req){
        $meta_desc = "Chuyển các dòng sản phẩm trị mụn, dịch vụ làm đẹp cao cấp hàng đầu Việt Nam";
        $meta_keywords = "trị mụn, spa, sản phẩm y tế";
        $meta_title = "Khỏe cùng Lea chăm sóc sắc đẹp";
        $url_canonical = $req->url();
        return view('pages.cart.show_cart')->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'));
    }

    public function deleteCart($id){
        Cart::remove($id);
        return Redirect::to('/gio-hang');
    }

    public function updateCart(Request $req){
       $listCart = $req->arr;

        foreach($listCart as $key => $cart){
            if($cart[0] == 0){
               Cart::remove($key);
            } else {
                  Cart::update($key, array(
                'quantity' => array(
                      'relative' => false,
                      'value' => $cart[0]
                  ),
                ));
            }
        }
    $success = '   <script>
     $(document).ready(function(){
        swal("Successfully!", "Cập nhật giỏ hàng thành công!", "success");
     });
        </script>
        ';
         Session::put('message-cart-mobile',$success);
      return Redirect::to('/gio-hang');
     
    }
    public function addCartAjax(Request $req){
        $data = $req->all();
            $cart = array(
                'id'=>$data['cart_product_id'],
                'name'=>$data['cart_product_name'],
                'price'=>(double)$this->replaceString($data['cart_product_price']),
                'quantity'=>$data['cart_product_qty'],
                'attributes'=>array('image'=>$data['cart_product_image'])
            );
            
        Cart::add($cart);
        $content = Cart::getContent();
        echo (count($content));
    }
}
