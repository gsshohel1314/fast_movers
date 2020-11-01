@extends('layouts.frontend.master')
@section('content')
<!--sign_up start  -->
<section class="sign_loging_start loging_start">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="row">
                    <div class="col-12">
                        <div class="sing_loging_content">
                            <h1>প্রবেশ করুন</h1>
                            <h5>আপনার অ্যাকাউন্টে প্রবেশ করতে লগইন করুন</h5>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="sing_loging_form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group ">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Eamil Address" value="{{ old('email') }}" required autocomplete="email">
                
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Type Password" required autocomplete="current-password">
                
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
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
                                        <button type="submit" class="btn btn_sing_up">সাইন ইন</button>
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
                    <img src="{{asset('public/content/frontend')}}/images/van_2.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!--sign_up end  -->
@endsection
