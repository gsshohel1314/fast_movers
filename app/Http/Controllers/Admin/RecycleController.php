<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use App\PickupArea;
use App\PickupProduct;
use App\DeliveryZone;
use App\Shop;
use App\ParcelRequest;

class RecycleController extends Controller
{
    public function __construct(){

    }

    public function index(){
        return view('admin.recycle.index');
    }

    public function admin(){
        $datas = Admin::where('status', 0)->get();
        return view('admin.recycle.admin',compact('datas'));
    }

    public function pickupArea(){
        $datas = PickupArea::where('status', 0)->orderBy('id','DESC')->get();
        return view('admin.recycle.pickup-area',compact('datas'));
    }

    public function pickupProduct(){
        $datas = PickupProduct::where('status', 0)->orderBy('id','DESC')->get();
        return view('admin.recycle.pickup-product',compact('datas'));
    }
    
    public function deliveryZone(){
        $datas = DeliveryZone::where('status', 0)->orderBy('id','DESC')->get();
        return view('admin.recycle.delivery-zone',compact('datas'));
    }
    
    public function shop(){
        $datas = Shop::where('status', 0)->orderBy('id','DESC')->get();
        return view('admin.recycle.shop',compact('datas'));
    }
    
    public function parcelRequest(){
        $datas = ParcelRequest::where('status', 0)->orderBy('id','DESC')->get();
        return view('admin.recycle.parcel-request',compact('datas'));
    }
}
