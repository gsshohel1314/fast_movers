@extends('layouts.frontend.master')
@section('content')
    <!--sign_up start  -->
    <section class="sign_loging_start">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-10">
                    <div class="sing_loging_content">
                        <h1>FAST MOVERS-এর সাথে,<br>
                            আপনার ব্যবসার ডেলিভারি নেটওয়ার্ক হবে আরও বড়</h1>
                        <h5>আমাদের প্রোফেশনাল লজিস্টিক্ সাপোর্ট পেতে সাইন আপ করুন</h5>
                    </div>
                </div>
                <div class="col-md-6 col-sm-8">
                    <div class="sing_loging_form">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required autocomplete="first_name">
                
                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required autocomplete="last_name">
                
                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Phone Number" value="{{ old('phone') }}" required autocomplete="phone">
            
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email">
            
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Type Password" value="{{ old('password') }}" required autocomplete="password">
            
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control input-lg" name="password_confirmation" placeholder="Re-type Password" required autocomplete="new-password">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-8">
                                    <label class="container2">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="lab_cont">ফর্ম পূরণের মাধ্যমে, আমি শর্তাবলী-র সাথে একমত</span>
                                    </label>
                                </div>
                                <div class="form-group col-4">
                                    <button type="submit" class="btn btn_sing_up">সাইন আপ</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="cont11 text-center">
                                <p>রেজিস্ট্রেশন করেন নি? <a href="#">সাইনআপ</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="van_img" style="right: 2%;">
            <img src="{{asset('public/content/frontend')}}/images/Van.png" alt="" class="img-fluid">
        </div>
    </section>
    <!--sign_up end  -->
@endsection