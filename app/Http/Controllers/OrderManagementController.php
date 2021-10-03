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
use App\Order;
use App\OrderDetail;
use App\Shipping;


class OrderManagementController extends Controller
{
    public function userCheckOrderById(Request $req,$id){
        $orderbyid = Order::find($id );
        $productOfOrder = Product::join('tbl_order_detail','tbl_order_detail.id_product','=','tbl_product.productID')->where('id_order',$id)->get();
        $orderDetail = OrderDetail::join('tbl_order','tbl_order.id_order','=','tbl_order_detail.id_order')->where('tbl_order_detail.id_order',$id)->get();
        if(empty($orderbyid)){
            Session::put('message','Không tìm thấy đơn hàng nào từ mã đơn hoặc số điện thoại '.$id);
            return redirect('/tra-cuu-don-hang');
        }
        $meta_desc = "Chuyển các dòng sản phẩm trị mụn, dịch vụ làm đẹp cao cấp hàng đầu Việt Nam";
        $meta_keywords = "trị mụn, spa, sản phẩm y tế";
        $meta_title = "Khỏe cùng Lea chăm sóc sắc đẹp";
        $url_canonical = $req->url();
        return view('pages.order.detailOrder')->with(compact('orderbyid','productOfOrder','orderDetail','meta_desc','meta_keywords','meta_title','url_canonical'));
   
    }
    public function checkOrderByPhone(Request $req,$phone){
        $orderByPhone = Order::join('tbl_shipping','tbl_shipping.id_shipping','=','tbl_order.id_shipping')->where('phone_shipping',$phone)->orderby('id_order','DESC')->paginate(5);
        if(count($orderByPhone) == 0){
            Session::put('message','Không tìm thấy đơn hàng nào từ mã đơn hoặc số điện thoại '.$phone);
            return redirect('/tra-cuu-don-hang');
        }
        $meta_desc = "Chuyển các dòng sản phẩm trị mụn, dịch vụ làm đẹp cao cấp hàng đầu Việt Nam";
        $meta_keywords = "trị mụn, spa, sản phẩm y tế";
        $meta_title = "Khỏe cùng Lea chăm sóc sắc đẹp";
        $url_canonical = $req->url();
        return view('pages.order.orderByPhone')->with(compact('orderByPhone','phone','meta_desc','meta_keywords','meta_title','url_canonical'));
    }
    public function searchOrder(Request $req){
        $data = $req->all();
        $string = preg_replace('/\s+/', '', $data['search_order']);
        $firstChar = substr($string, 0, 1);

        $meta_desc = "Chuyển các dòng sản phẩm trị mụn, dịch vụ làm đẹp cao cấp hàng đầu Việt Nam";
        $meta_keywords = "trị mụn, spa, sản phẩm y tế";
        $meta_title = "Khỏe cùng Lea chăm sóc sắc đẹp";
        $url_canonical = $req->url();
        if($firstChar == '#'){
            $orderbyid = Order::where('increment_id',$req->search_order)->first();
            if(empty($orderbyid)){
                Session::put('message','Không tìm thấy đơn hàng nào từ mã đơn hoặc số điện thoại '.$string);
                return redirect('/tra-cuu-don-hang');
            }
            $productOfOrder = Product::join('tbl_order_detail','tbl_order_detail.id_product','=','tbl_product.productID')->where('id_order',$orderbyid->id_order)->get();
            $orderDetail = OrderDetail::join('tbl_order','tbl_order.id_order','=','tbl_order_detail.id_order')->where('tbl_order_detail.id_order',$orderbyid->id_order)->get();
            return view('pages.order.detailOrder')->with(compact('orderbyid','productOfOrder','orderDetail','meta_desc','meta_keywords','meta_title','url_canonical'));
        } else {
            return redirect('/theo-doi-don-hang-bang-so-dien-thoai-'.$string );

        }
      
    }
    public function userCheckOder(Request $req){
        $meta_desc = "Chuyển các dòng sản phẩm trị mụn, dịch vụ làm đẹp cao cấp hàng đầu Việt Nam";
        $meta_keywords = "trị mụn, spa, sản phẩm y tế";
        $meta_title = "Khỏe cùng Lea chăm sóc sắc đẹp";
        $url_canonical = $req->url();
        return view('pages.order.checkOrder')->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'));
    }
    public function showOrder(){
        $checkAuth = (new AdminController)->checkAuthAdmin();
        if(!$checkAuth) return redirect('/admin-login');
        $orders = Order::join('tbl_user', 'tbl_user.id_user', '=', 'tbl_order.id_user')
             ->orderByDesc('tbl_order.id_order') ->paginate(5);
             
        return view('admin.Order.Order')->with('orders', $orders);
    }

    public function updateOrder($id){
        $checkAuth = (new AdminController)->checkAuthAdmin();
        if(!$checkAuth) return redirect('/admin-login');
        
        $orderbyid = Order::join('tbl_user', 'tbl_user.id_user', '=', 'tbl_order.id_user')
        ->join('tbl_shipping', 'tbl_shipping.id_shipping', '=', 'tbl_order.id_shipping')
        ->join('tbl_order_detail', 'tbl_order_detail.id_order', '=', 'tbl_order.id_order')->where('tbl_order.id_order',$id)->first();
             
        $detail =  OrderDetail::where('id_order',$id)->get();
  
        if( empty($detail) || empty($orderbyid) ){
            Session::put('message','fail_edit');
            return redirect('/quan-ly-don-hang');
        } 
        return view('admin.Order.DetailOrder')->with('orderbyid', $orderbyid)->with('detail', $detail);
    }

    public function saveEditOrder(Request $req){
        $data = $req->all();
    
        $orderbyid = Order::find($req->orderId);
        $orderbyid->status_order =  $data['status'];
        $orderbyid->save();
        return Redirect ('/quan-ly-don-hang');
    }

    public function deleteOrder($id){
        $result = Order::find($id);
        if($result){
            // $resultDetail = OrderDetail::where('id_order',$id);
            // $resultShip = Shipping::join('tbl_order', 'tbl_order.id_shipping ', '=', 'tbl_shipping.id_shipping');
            // $resultShip->delete();
            // $resultDetail->delete();
           
            $result->delete();
            Session::put('message','success_delete');
        } else {
            Session::put('message','fail_delete');
        }
       
        return Redirect::to('/quan-ly-don-hang');
    }
}
