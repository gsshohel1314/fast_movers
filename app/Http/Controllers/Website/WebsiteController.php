<?php

namespace App\Http\Controllers\Website;

use Illuminate\Support\Facades\Notification;
use App\Notifications\CreateParcelRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Shop;
use App\ParcelRequest;
use App\PickupArea;
use App\PickupProduct;
use App\DeliveryZone;   
use App\Admin;   
use Session;
use Auth;

class WebsiteController extends Controller
{
    public function index(){
        return view('website.dashboard');
    }
    
    public function parcel(){
        // if(Auth::guard('web')->check()){
            $shops= Shop::where('status', 1)->get();
            return view('website.parcel', compact('shops'));
        // }else{
        //     return redirect()->Route('home');
        // }
    }
    
    public function parcelCreate(Request $request){
        $this->validate($request,[
            'shop_id' => 'required',
            'cous_name' => 'required',
            'cous_phone' => 'required',
            'cous_address' => 'required',
            'invoice_id' => 'required',
            'parcel_weight' => 'required',
            'collect_amount' => 'required',
            'pro_sell_price' => 'required',
            'instruction' => 'required',
        ]);
        $random=mt_rand(100000,999999);
        $data['track_id'] = $random;
        $data['shop_id'] = $request->shop_id;
        $data['cous_name'] = $request->cous_name;
        $data['cous_phone'] = $request->cous_phone;
        $data['cous_address'] = $request->cous_address;
        $data['invoice_id'] = $request->invoice_id;
        $data['parcel_weight'] = $request->parcel_weight;
        $data['collect_amount'] = $request->collect_amount;
        $data['pro_sell_price'] = $request->pro_sell_price;
        $data['instruction'] = $request->instruction;

        $parcelCreate = ParcelRequest::create($data);

        $admin=Admin::where('status',1)->get();
        // Notification::send($admin, new CreateParcelRequest ($parcelCreate));
        Notification::route('mail', $admin)->notify(new CreateParcelRequest($parcelCreate));

        if($parcelCreate){
            Session::flash('success', 'Information Insert Successfull');
            return redirect('parcel');
        }else{
            Session::flash('error', 'Information Insert Failed');
            return redirect()->back();
        }
        
    }

    public function shop(){
        // if(Auth::guard('web')->check()){
            $pickArea = PickupArea::where('status', 1)->get();
            $pickProduct = PickupProduct::where('status', 1)->get();
            $deliveryZone = DeliveryZone::where('status', 1)->get();
            return view('website.shop',compact('pickArea','pickProduct','deliveryZone'));
        // }else{
            // return redirect()->Route('home');
        // }
    }

    public function shopCreate(Request $request){
        $this->validate($request,[
            'shop_name' => 'required',
            'shop_address' => 'required',
            'shop_email' => 'required|string|email|max:255|unique:shops',
            'pick_address' => 'required',
            'pick_area_id' => 'required',
            'pick_phone' => 'required',
            'pick_type_id' => 'required',
            'deli_zone_id' => 'required',
        ]);
        $data['cous_id'] = Auth::id();
        $data['shop_name'] = $request->shop_name;
        $data['shop_address'] = $request->shop_address;
        $data['shop_email'] = $request->shop_email;
        $data['pick_address'] = $request->pick_address;
        $data['pick_area_id'] = $request->pick_area_id;
        $data['pick_phone'] = $request->pick_phone;
        $data['pick_type_id'] = $request->pick_type_id;
        $data['deli_zone_id'] = $request->deli_zone_id;
        $data['ref_id'] = $request->ref_id;
        $data['coup_code'] = $request->coup_code;

        Shop::create($data);

        Session::flash('success', 'Information Insert Successfull');
        return redirect('parcel');
        Session::flash('error', 'Information Insert Failed');
        return redirect()->back();
    }

    
    public function parcelTrack(Request $request)
    {
        $check = ParcelRequest::where('track_id',$request->track_id)->first();
        if(!empty($check)){
            return back()->with('parcelSuccess','Your parcel is now in '.$check->location->name.' state.');
        }else{
            return back()->with('parcelError','Tracking id is incorrect!');
        }
    }
}
