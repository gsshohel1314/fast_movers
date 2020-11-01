<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Notification;
use App\Notifications\ApproveParcelRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\ParcelRequest;
use App\ParcelLocation;
use Carbon\Carbon;
use Session;

class ParcelRequestController extends Controller
{
    public function index()
    {
        $datas = ParcelRequest::where('status', 1)->orderBy('id','DESC')->get();
        return view('admin.parcel_request.all',compact('datas'));
    }

    public function create($id = NULL){
        $locations=ParcelLocation::where('status',1)->get();
        $id=ParcelRequest::find($id);
        return view('admin.parcel_request.add',compact('id','locations'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'location_id' => 'required',
        ]);
       
        $data['location_id'] = $request->location_id;

        if(isset($request->id)){
            ParcelRequest::where('id',$request->id)->update($data);

            //email notification
            $parcel=ParcelRequest::where('status',1)->where('id',$request->id)->first();
            $shop = $parcel->shop->shop_email;
            Notification::route('mail', $shop)->notify(new ApproveParcelRequest($parcel));
            //end email notification

            Session::flash('success', 'Information Update Successfull');
            return redirect()->back();
            Session::flash('error', 'Information Update Failed');
            return redirect()->back();
        }
    }

    public function softdelete(){
        $id=$_POST['modal_id'];
        $soft=ParcelRequest::where('status',1)->where('id',$id)->update([
            'status'=>0,
        ]);

        Session::flash('success', 'Data Softdelete Successfull');
        return redirect()->back();
        Session::flash('error', 'Data Softdelete Failed');
        return redirect()->back();
    }

    public function restore(){
        $id=$_POST['modal_id'];
        $restore=ParcelRequest::where('status',0)->where('id',$id)->update([
            'status'=>1,
        ]);

        Session::flash('success', 'Data Restore Successfull');
        return redirect()->back();
        Session::flash('error', 'Data Restore Failed');
        return redirect()->back();
    }

    public function delete(){
        $id=$_POST['modal_id'];
        $del=ParcelRequest::where('status',0)->where('id',$id)->first();
        $del->delete();

        Session::flash('success', 'Data Permanantly Delete Success');
        return redirect()->back();
        Session::flash('error', 'Data Permanantly Delete  Failed');
        return redirect()->back();
    }
}