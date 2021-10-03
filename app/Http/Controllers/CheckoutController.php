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
use App\NewUser;
use App\Shipping;
use App\Payment;
use App\Order;
use App\OrderDetail;
use Mail;
use URL;
use App\City;
use App\Province;
use App\Wards;
use App\Feeship;
use Carbon\Carbon;
class CheckoutController extends Controller
{
    
    public function checkoutNoLogin(Request $req){
        if( count(Cart::getContent())>0)
        $city = City::orderby('matp','ASC')->get();
        $meta_desc = "Chuyển các dòng sản phẩm trị mụn, dịch vụ làm đẹp cao cấp hàng đầu Việt Nam";
        $meta_keywords = "trị mụn, spa, sản phẩm y tế";
        $meta_title = "Khỏe cùng Lea chăm sóc sắc đẹp";
        $url_canonical = $req->url();
            return view('pages.cart.checkout')->with(compact('city','meta_desc','meta_keywords','meta_title','url_canonical'));
    }
    public function loginCheckout(){
       $id_user = Session::get('id_user');
       if($id_user){
           return Redirect('/checkout-'.$id_user);
       }
     return view('pages.login.login');
    }
    public function incrementOrder($id){
        $result ='';
        
        if($id<=9){ //#000012
            $result = '#00000' .$id; 
        } else if($id<=99){ //#000012
            $result = '#0000' .$id; 
        } else if($id<=999){ //#0001234
            $result = '#000' .$id; 
        }  else if($id<=9999){ //#001234
            $result = '#00' .$id; 
        } else if($id<=99999){ //#012345
            $result = '#0' .$id; 
        } else {  // $id = 100000
            $result = '#' .$id; 
        }
       
        return $result;
    }
    public function feeshipCalculate(Request $req){
      
        $data = $req->all();
        if( $data['matp']){
         
            $feeship = Feeship::where('fee_matp',$data['matp'])->where('fee_maqh',$data['maqh'])
            ->where('fee_xaid',$data['xaid'])->first();
            // Session::put('fee',$fee->fee_Ship);
           
            if( count(Cart::getContent())>0){
                
                $totalOrder = Cart::getTotal();
                $totalOrderStr = '';
                if(empty($feeship)){
                    $result[]='30,000 vnđ';
                    $totalOrderStr.= number_format($totalOrder+30000).' vnđ';
                    $result[]=$totalOrderStr;
                    $result[]=30000;
                    echo(json_encode($result));
                } else{
                    $fee = number_format($feeship->fee_feeship).' vnđ';
                    
                    $result[]=$fee;
                    $totalOrder =  $totalOrder + $feeship->fee_feeship;
                    $totalOrderStr.= number_format($totalOrder).' vnđ';
                    $result[]=$totalOrderStr;
                    $result[]=$feeship->fee_feeship;
                        
                    echo(json_encode($result));
                }
            
            }
           
        }
    }
    public function checkout($id_user){
        $user = NewUser::find($id_user);
        $city = City::orderby('matp','ASC')->get();
        if($user && count(Cart::getContent())>0)
            return view('pages.cart.checkout')->with(compact('user','city'));
         
        else  return Redirect('/gio-hang');
    }

    public function placeOrder(Request $req){
        $data = $req->all();
    
        $user = new NewUser();
        $user ->name_user =$data['name_shipping'];
        $user ->phone_number =$data['phone_shipping'];
        $user->save();

        $shipping = new Shipping();
        $shipping->id_user = $user->id_user;
        $shipping->name_shipping = $data['name_shipping'];
        $shipping->phone_shipping = $data['phone_shipping'];
        $shipping->fee_ship = $data['feeship'];
        
        $city = City::find($data['city'])->name;
        $province = Province::find($data['province'])->name;
        $wards = Wards::find($data['wards'])->name;
       
        $shipping->address_shipping = $data['address_shipping']." $wards $province $city";
        
        $shipping->note = isset($data['note'])?$data['note']:'';
        $shipping->save();

        $payment = new Payment();
        $payment->method_payment =  $data['payment'];
        $payment->status_payment =  'Đang chờ xử lý.';
        $payment->save();

        $order = new Order();
        $order->id_user =  $user->id_user;
        $order->id_shipping =  $shipping->id_shipping;
        $order->id_payment =  $payment->id_payment;
        $date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $order->created_at =  $date;
        $feeship =$data['feeship'];
      
        $order->total_order =  Cart::getTotal()+$feeship;
        $order->status_order =  'Đang chờ xử lý';
        $order->save();

        foreach(Cart::getContent() as $k=>$item){
            $orderDetail = new OrderDetail();
            $orderDetail->id_order =   $order->id_order;
            $orderDetail->id_product =  $k;
            $orderDetail->name_product = $item->name;
            $orderDetail->price_product =  $item->price;
            $orderDetail->sales_qty = $item->quantity;
            $orderDetail->sub_total	 =  $item->getPriceSum();
            $orderDetail->save();
            Cart::remove($k);
        }
       $id_order = $order->id_order;
       $incrementId = $this->incrementOrder($id_order);
       $order->increment_id = $incrementId;
       $order->save();

        $this->sendMailOrder($id_order);
       return Redirect('/ket-qua-dat-hang-'.$id_order);
    }

    public function resultPlaceOrder(Request $req,$id_order){
        $orderIncre = Order::find($id_order)->increment_id;
        $meta_desc = "Chuyển các dòng sản phẩm trị mụn, dịch vụ làm đẹp cao cấp hàng đầu Việt Nam";
        $meta_keywords = "trị mụn, spa, sản phẩm y tế";
        $meta_title = "Khỏe cùng Lea chăm sóc sắc đẹp";
        $url_canonical = $req->url();
        return view('pages.cart.thankyou')->with(compact('id_order','orderIncre','meta_desc','meta_keywords','meta_title','url_canonical'));
    }
    public function sendMailOrder($id){
        $toName = 'Khỏe cùng Lea';
        $toMail = 'user98.2018@gmail.com';
        $link = URL::to('/cap-nhat-don-hang-'.$id);
        $orderIncre = Order::find($id)->increment_id;
        $data = array("link"=>$link ,"id" =>$orderIncre );
        Mail::send('pages.mail',$data,function($message) use ($toName,$toMail){
            $message->to($toMail)->subject('Có đơn hàng mới từ web Khỏe cùng Lea. ');//send this mail with subject
            $message->from($toMail,$toName);//send from this mail
        });
    }
}
