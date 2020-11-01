<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Shop;
use Carbon\Carbon;
use Session;

class ShopController extends Controller
{
    public function index()
    {
        $datas = Shop::where('status', 1)->orderBy('id','DESC')->get();
        return view('admin.shop.all',compact('datas'));
    }

    public function show($id)
    {
        $id=Shop::find($id);
        return view('admin.shop.view',compact('id'));
    }

    public function softdelete(){
        $id=$_POST['modal_id'];
        $soft=Shop::where('status',1)->where('id',$id)->update([
            'status'=>0,
        ]);

        Session::flash('success', 'Data Softdelete Successfull');
        return redirect()->back();
        Session::flash('error', 'Data Softdelete Failed');
        return redirect()->back();
    }

    public function restore(){
        $id=$_POST['modal_id'];
        $restore=Shop::where('status',0)->where('id',$id)->update([
            'status'=>1,
        ]);

        Session::flash('success', 'Data Restore Successfull');
        return redirect()->back();
        Session::flash('error', 'Data Restore Failed');
        return redirect()->back();
    }

    public function delete(){
        $id=$_POST['modal_id'];
        $del=Shop::where('status',0)->where('id',$id)->first();
        $del->delete();

        Session::flash('success', 'Data Permanantly Delete Success');
        return redirect()->back();
        Session::flash('error', 'Data Permanantly Delete  Failed');
        return redirect()->back();
    }
}