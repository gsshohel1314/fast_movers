@extends('layouts.frontend.master')
@section('content')
<style>
    .parcel_shop_contnt_part .sing_loging_form textarea.customer-ddress {
        height: 100px;
        resize: none;
    }
</style>
<!--parcel_shop_contnt_part start  -->
<section class="parcel_shop_contnt_part">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="row">
                    <div class="col-12">
                        <div class="sing_loging_content">
                            <h1>Ship From</h1>
                            @foreach ($shops as $shop)
                                @if ((Auth::user()->id ?? '') == $shop->cous_id)
                                    <h5>SHOP NAME : <a href="#">{{ $shop->shop_name }}</a></h5>
                                    <h5>SHOP ADDress : <a href="#">{{ $shop->shop_address }} </a></h5>
                                @endif
                            @endforeach
                            
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="sing_loging_form">
                            <h4>নতুন পার্সেল রিক্যুয়েস্ট তৈরি করুন</h4>
                            <form method="post" action="{{url('parcel/create')}}">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        @foreach ($shops as $shop)
                                            @if ((Auth::user()->id ?? '') == $shop->cous_id)
                                                <input type="hidden" name="shop_id" value="{{$shop->id}}">
                                            @endif
                                        @endforeach
                                        <input type="text" class="form-control @error('cous_name') is-invalid @enderror" id="inputname" placeholder="কাস্টমার নাম" name="cous_name" value="{{old('cous_name')}}">
                                        @error('cous_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control @error('cous_phone') is-invalid @enderror" id="inputname" placeholder="কাস্টমারের ফোন নম্বর" name="cous_phone" value="{{old('cous_phone')}}">
                                        @error('cous_phone')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control customer-ddress @error('cous_address') is-invalid @enderror" rows="5" name="cous_address" placeholder="কাস্টমারের ঠিকানা">{{old('cous_address')}}</textarea>
                                    @error('cous_address')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control @error('invoice_id') is-invalid @enderror" id="inputname" placeholder="মার্চেন্ট ইনভয়েস আইডি" name="invoice_id" value="{{old('invoice_id')}}">
                                        @error('invoice_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control @error('parcel_weight') is-invalid @enderror" id="inputname" placeholder="পার্সেলের ওজন" name="parcel_weight" value="{{old('parcel_weight')}}">
                                        @error('parcel_weight')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control @error('collect_amount') is-invalid @enderror" id="inputname" placeholder="ক্যাশ কালেকশন এমাউন্ট" name="collect_amount" value="{{old('collect_amount')}}">
                                        @error('collect_amount')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control @error('pro_sell_price') is-invalid @enderror" id="inputname" placeholder="পণ্যের বিক্রয় মূল্য" name="pro_sell_price" value="{{old('pro_sell_price')}}">
                                        @error('pro_sell_price')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control @error('instruction') is-invalid @enderror" rows="3" name="instruction" placeholder="কোনো বিশেষ নির্দেশনা">{{old('instruction')}}</textarea>
                                    @error('instruction')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12 text-center">
                                        <button type="submit" class="btn btn_sing_up">পার্সেল তৈরী করুন</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-5 col-sm-12 offset-md-1 offset-lg-1">
                <div class="sing_loging_content_cost">
                    <div class="dlevali_cost">
                        <h4>ডেলিভারি চার্জের বিস্তারিত</h4>
                        <ul>
                            <li>Cash Collection<span>Tk. 0</span></li>
                            <li>Delivery Charge<span>Tk. 0</span></li>
                            <li>COD Charge<span>Tk. 0</span></li>
                        </ul>
                        <h5>Total Payable Amount <span>Tk. 0</span></h5>
                        
                        <h6>৩ টার পরের পিকাপ রিকুয়েস্ট আগামী কালকে পিকাপ হবে।</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--parcel_shop_contnt_part end  -->
@endsection