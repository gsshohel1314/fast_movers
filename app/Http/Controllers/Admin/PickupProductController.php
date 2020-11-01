<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\PickupProduct;
use Carbon\Carbon;
use Session;

class PickupProductController extends Controller
{
    public function index()
    {
        $datas = PickupProduct::where('status', 1)->orderBy('id','DESC')->get();
        return view('admin.pickup_product.all',compact('datas'));
    }

    public function create($id = NULL){
        $id=PickupProduct::find($id);
        return view('admin.pickup_product.add',compact('id'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
        ]);

        $data['name'] = $request->name;

        if(isset($request->id)){
            PickupProduct::where('id',$request->id)->update($data);

            Session::flash('success', 'Information Update Successfull');
            return redirect()->back();
            Session::flash('error', 'Information Update Failed');
            return redirect()->back();
        }else{
            PickupProduct::create($data);

            Session::flash('success', 'Information Insert Successfull');
            return redirect()->back();
            Session::flash('error', 'Information Insert Failed');
            return redirect()->back();
        }
    }

    public function softdelete(){
        $id=$_POST['modal_id'];
        $soft=PickupProduct::where('status',1)->where('id',$id)->update([
            'status'=>0,
        ]);

        Session::flash('success', 'Data Softdelete Successfull');
        return redirect()->back();
        Session::flash('error', 'Data Softdelete Failed');
        return redirect()->back();
    }

    public function restore(){
        $id=$_POST['modal_id'];
        $restore=PickupProduct::where('status',0)->where('id',$id)->update([
            'status'=>1,
        ]);

        Session::flash('success', 'Data Restore Successfull');
        return redirect()->back();
        Session::flash('error', 'Data Restore Failed');
        return redirect()->back();
    }

    public function delete(){
        $id=$_POST['modal_id'];
        $del=PickupProduct::where('status',0)->where('id',$id)->first();
        $del->delete();

        Session::flash('success', 'Data Permanantly Delete Success');
        return redirect()->back();
        Session::flash('error', 'Data Permanantly Delete  Failed');
        return redirect()->back();
    }
}