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
use App\City;
use App\Province;
use App\Wards;
use App\Feeship;
class DeliveryController extends Controller
{
    
    public function deliveryManagement(){
        $checkAuth = (new AdminController)->checkAuthAdmin();
        if(!$checkAuth) return redirect('/admin-login');
        
        $city = City::orderby('matp','ASC')->get();
       
        return view('admin.delivery.add')->with(compact('city'));
    }
    public function deliverySelect(Request $req){
        $data = $req->all();
        if($data['action']){
            $output = '';
            if($data['action'] == 'city'){
                $select_province = Province::where('matp',$data['ma_id'])->orderby('name','ASC')->get();
                $output.='<option value="">--Chọn quận/huyện--</option>';
               
                foreach($select_province as $province){
                    $output.='<option value="'.$province->maqh.'">'.$province->name.'</option>';
                }
            } else {
                $select_wards = Wards::where('maqh',$data['ma_id'])->orderby('name','ASC')->get();
                $output.='<option value="">--Chọn xã/phường/thị trấn--</option>';
                foreach($select_wards as $ward){
                    $output.='<option value="'.$ward->xaid.'">'.$ward->name.'</option>';
                }
            }
            echo $output;
        }
    }
   
    
    public function deliveryInsert(Request $req){
       
        $data = $req->all();
        
        $feeShip = new Feeship();
        $feeShip->fee_matp= $data['city'];
        $feeShip->fee_maqh= $data['province'];
        $feeShip->fee_xaid= $data['wards'];
        $feeShip->fee_feeship= str_replace(',', '',  $data['fee_ship']);
        
        $feeShip->save();
    }
    public function feeshipSelect(){
        $feeShip = Feeship::orderby('fee_id','DESC')->get();
        $output = '';
        $output .= '<div class="table-reposive">
        <table class="table table-bordered">
            <thread>
                <tr>
                <th>Tên thành phố</th>
                <th>Tên quận huyện</th>
                <th>Tên xã phường</th>
                <th>Phí vận chuyển</th>
                </tr>
            </thread>
            <tbody>
        ';
        foreach($feeShip as $key => $fee){
            $output .='
                <tr>
                    <td class="how">'.$fee->city->name.'</td>
                    <td>'.$fee->province->name.'</td>
                    <td>'.$fee->wards->name.'</td>
                    <td contenteditable data-feeship_id="'.$fee->fee_id.'" class="fee_feeship_edit">'.number_format($fee->fee_feeship,0,',',',').'</td>
                </tr>
            ';
        }
        $output.= ' </tbody> </table>';
        echo $output;
    }
    public function deliveryUpdate(Request $req){
        $data = $req->all();
       
        $feeShip =  Feeship::find($data['feeship_id']);
       
        $feeShip->fee_feeship=$data['fee_value'];

        $feeShip->save();
    }

    public function pusher(){
        return view('pages.pusher');
    }
}
