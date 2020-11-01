<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use Carbon\Carbon;
use Session;
use Image;
use File;

class AdminRegisterController extends Controller
{
    public function index()
    {
        $datas = Admin::where('status', 1)->orderBy('id','DESC')->get();
        return view('admin.admin.all',compact('datas'));
    }

    public function create($id = NULL){
        $id=Admin::find($id);
        return view('admin.admin.add',compact('id'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'image' => 'required',
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $slug=Str::slug($request->first_name);
            $imageName=$slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(isset($request->id)){
                $img = Admin::find($request->id);
                File::delete('public/upload/admin/'.$img->image);
            }

            Image::make($image)->resize(128, 128)->save(base_path('public/upload/admin/'.$imageName));

            $data['image'] = $imageName;
        }

        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        if(isset($request->id)){
            Admin::where('id',$request->id)->update($data);

            Session::flash('success', 'Information Update Successfull');
            return redirect()->back();
            Session::flash('error', 'Information Update Failed');
            return redirect()->back();
        }else{
            Admin::create($data);

            Session::flash('success', 'Information Insert Successfull');
            return redirect()->back();
            Session::flash('error', 'Information Insert Failed');
            return redirect()->back();
        }
    }

    public function show($id)
    {
        $id=Admin::find($id);
        return view('admin.admin.view',compact('id'));
    }

    public function softdelete(){
        $id=$_POST['modal_id'];
        $soft=Admin::where('status',1)->where('id',$id)->update([
            'status'=>0,
        ]);

        Session::flash('success', 'Data Softdelete Successfull');
        return redirect()->back();
        Session::flash('error', 'Data Softdelete Failed');
        return redirect()->back();
    }

    public function restore(){
        $id=$_POST['modal_id'];
        $restore=Admin::where('status',0)->where('id',$id)->update([
            'status'=>1,
        ]);

        Session::flash('success', 'Data Restore Successfull');
        return redirect()->back();
        Session::flash('error', 'Data Restore Failed');
        return redirect()->back();
    }

    public function delete(){
        $id=$_POST['modal_id'];
        $del=Admin::where('status',0)->where('id',$id)->first();
        File::delete('public/upload/admin/'.$del->image);
        $del->delete();

        Session::flash('success', 'Data Permanantly Delete Success');
        return redirect()->back();
        Session::flash('error', 'Data Permanantly Delete  Failed');
        return redirect()->back();
    }
}