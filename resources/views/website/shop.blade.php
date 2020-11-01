@extends('layouts.frontend.master')
@section('content')
<style>
    .sing_loging_form .form-group .form-control {
        font-weight: 400;
    }
    .select2-container .select2-choice {
        background-color: #f3f3f3;
        font-weight: 400;
        height: 50px;
        border: 0px solid #ccc;
        font-size: 16px;
    }
    /* .req_star{
        position: relative;
        top: 15px;
        margin-left: -4px;
    }
    .req_star:after{
        content: '*';
        color: red
    } */
</style>

<!--parcel_contnt_part start  -->
<section class="parcel_contnt_part">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="row">
                    <div class="col-12">
                        <div class="sing_loging_content">
                            <h1>অভিনন্দন</h1>
                            <h5>যোগাযোগের ফর্মটি পূরণ করুন এবং অপেক্ষা করুন।
                                আমাদের 'ক্লায়েন্ট অন-বোর্ডিং টিম' অবিলম্বে আপনার কাছে পৌঁছে যাবে</h5>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="sing_loging_form">
                            <form method="post" action="{{url('shop/create')}}">
                                @csrf
                                <div class="form-group">
                                    {{-- <span class="req_star"></span> --}}
                                    <input type="text" name="shop_name" class="form-control @error('shop_name') is-invalid @enderror" id="text1" placeholder="Shop Name" value="{{old('shop_name')}}">
                                    @error('shop_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    {{-- <span class="req_star"></span> --}}
                                    <textarea class="form-control @error('shop_address') is-invalid @enderror" rows="5" name="shop_address" placeholder="Shop Address">{{old('shop_address')}}</textarea>
                                    @error('shop_address')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    {{-- <span class="req_star"></span> --}}
                                    <input type="email" name="shop_email" class="form-control @error('shop_email') is-invalid @enderror" id="text1" placeholder="Shop Email Address" value="{{old('shop_email')}}">
                                    @error('shop_email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    {{-- <span class="req_star"></span> --}}
                                    <textarea class="form-control @error('pick_address') is-invalid @enderror" rows="5" name="pick_address" placeholder="Pickup Address">{{old('pick_address')}}</textarea>
                                    @error('pick_address')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    {{-- <span class="req_star"></span> --}}
                                    <select class="select2 @error('pick_area_id') is-invalid @enderror" name="pick_area_id">
                                        <option value="#">Choose Pick-Up Area</option>
                                        @foreach ($pickArea as $area)
                                            <option value="{{$area->id}}">{{$area->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('pick_area_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    {{-- <span class="req_star"></span> --}}
                                    <input type="text" name="pick_phone" class="form-control @error('pick_phone') is-invalid @enderror" id="text1" placeholder="Pick-Up Phone Number" value="{{old('pick_phone')}}">
                                    @error('pick_phone')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    {{-- <span class="req_star"></span> --}}
                                    <select class="form-control @error('pick_type_id') is-invalid @enderror" name="pick_type_id">
                                        <option value="#">Choose Pick-Up Type</option>
                                        @foreach ($pickProduct as $product)
                                            <option value="{{$product->id}}">{{$product->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('pick_type_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    {{-- <span class="req_star"></span> --}}
                                    <select class="form-control @error('deli_zone_id') is-invalid @enderror" name="deli_zone_id">
                                        <option value="#">Choose Delivery Zone</option>
                                        @foreach ($deliveryZone as $zone)
                                            <option value="{{$zone->id}}">{{$zone->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('deli_zone_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" name="ref_id" class="form-control @error('ref_id') is-invalid @enderror" placeholder="Referrer Id (Optional)" value="{{old('ref_id')}}">
                                    @error('ref_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" name="coup_code" class="form-control @error('coup_code') is-invalid @enderror" placeholder="Coupon Code" value="{{old('coup_code')}}">
                                    @error('coup_code')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-8">
                                        <label class="container2">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="lab_cont">আমাকে সংযুক্ত রাখুন</span>
                                        </label>
                                    </div>
                                    <div class="form-group col-4">
                                        <button type="submit" class="btn btn_sing_up">সাইন আপ</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="cont11 text-center">
                            <p>রেজিস্ট্রেশন করেন নি? <a href="#">সাইনআপ</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="sing_loging_content_img">
                    <img src="{{asset('public/content/frontend')}}/images/Van.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!--parcel_contnt_part end  -->
@endsection