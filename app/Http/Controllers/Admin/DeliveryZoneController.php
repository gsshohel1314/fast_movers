<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\DeliveryZone;
use Carbon\Carbon;
use Session;

class DeliveryZoneController extends Controller
{
    public function index()
    {
        $datas = DeliveryZone::where('status', 1)->orderBy('id','DESC')->get();
        return view('admin.delivery_zone.all',compact('datas'));
    }

    public function create($id = NULL){
        $id=DeliveryZone::find($id);
        return view('admin.delivery_zone.add',compact('id'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
        ]);

        $data['name'] = $request->name;
        $data['price'] = $request->price;

        if(isset($request->id)){
            DeliveryZone::where('id',$request->id)->update($data);

            Session::flash('success', 'Information Update Successfull');
            return redirect()->back();
            Session::flash('error', 'Information Update Failed');
            return redirect()->back();
        }else{
            DeliveryZone::create($data);

            Session::flash('success', 'Information Insert Successfull');
            return redirect()->back();
            Session::flash('error', 'Information Insert Failed');
            return redirect()->back();
        }
    }

    public function softdelete(){
        $id=$_POST['modal_id'];
        $soft=DeliveryZone::where('status',1)->where('id',$id)->update([
            'status'=>0,
        ]);

        Session::flash('success', 'Data Softdelete Successfull');
        return redirect()->back();
        Session::flash('error', 'Data Softdelete Failed');
        return redirect()->back();
    }

    public function restore(){
        $id=$_POST['modal_id'];
        $restore=DeliveryZone::where('status',0)->where('id',$id)->update([
            'status'=>1,
        ]);

        Session::flash('success', 'Data Restore Successfull');
        return redirect()->back();
        Session::flash('error', 'Data Restore Failed');
        return redirect()->back();
    }

    public function delete(){
        $id=$_POST['modal_id'];
        $del=DeliveryZone::where('status',0)->where('id',$id)->first();
        $del->delete();

        Session::flash('success', 'Data Permanantly Delete Success');
        return redirect()->back();
        Session::flash('error', 'Data Permanantly Delete  Failed');
        return redirect()->back();
    }
}