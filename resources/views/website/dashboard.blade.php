@extends('layouts.frontend.master')
@section('content')
<style>
    .track_img {
        z-index: -1;
    }
</style>

<!-- banner start -->
<section class="banner_part" id="banner_part">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-7 col-sm-9">
                <div class="banner_content">
                    <h1>দ্রুততার সাথে পৌঁছে দিচ্ছি
                        আপনার পণ্য আপনার হাতে</h1>
                    <h5>ঢাকাসহ সারাদেশে পণ্য ডেলিভারি করার নির্ভরযোগ্য প্রতিষ্ঠান</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner end -->

<!-- parcel_tag start -->
<section class="parcel_tag_part" id="parcel_tag_sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="parcel_tag_main">
                    <div class="row">
                        <div class="col-12 col-md-10 col-sm-10 col-lg-8 offset-lg-2 offset-md-1 offset-sm-1">
                            <div class="parcel_tag_srcbox">
                                <h5>আপনার পার্সেল ট্র্যাক করুন</h5>

                                @if(Session::has('parcelSuccess'))
                                    <script>
                                        swal({title: "Success!", text: "{{ Session::get('parcelSuccess') }}", icon: "success", button: "OK", timer:7000,});
                                    </script>
                                @endif
                                @if(Session::has('parcelError'))
                                    <script>
                                        swal({title: "Opps!",text: "{{ Session::get('parcelError') }}", icon: "error", button: "OK", timer:7000,});
                                    </script>
                                @endif

                                <form method="post" action="{{route('parcel.track')}}">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-8">
                                            <input type="search" name="track_id" class="form-control" placeholder="পার্সেল আইডি" required>
                                        </div>
                                        <div class="col-4">
                                            <button type="submit" class="btn btn_tag_src">ট্র্যাক করুন</button>
                                        </div>
                                    </div>
                                </form>
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>    
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- parcel_tag end -->


<!-- fast_service start -->
<section class="fast_service_part py_90" id="fast_service_sec">
    <div class="container">
        <!-- common heading start -->
        <div class="row">
            <div class="col-12">
                <div class="common_heading text-center">
                    <h3>কেন <span>FAST MOVERS</span> পরিষেবা</h3>
                    <h5>আপনার ব্যবসার গুরুত্ব বোঝে, প্রদান করে ব্যবসার জন্য সবচেয়ে সুবিধাজনক ডেলিভারি সার্ভিস</h5>
                </div>
            </div>
        </div>
        <!-- common heading end -->

        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-6">
                <div class="service_item">
                    <div class="service_item_img text-center">
                        <img src="{{asset('public/content/frontend')}}/images/service_icon1.png" alt="" class="img-fluid">
                    </div>
                    <h4>পরের দিনই পেমেন্ট</h4>
                    <p>অর্ডার ডেলিভারির পরের দিনই সরাসরি ব্যাংক/বিকাশ এর মাধ্যমে পেমেন্ট করা হয়</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6">
                <div class="service_item">
                    <div class="service_item_img text-center">
                        <img src="{{asset('public/content/frontend')}}/images/service_icon2.png" alt="" class="img-fluid">
                    </div>
                    <h4>0% COD চার্জ</h4>
                    <p>অর্ডার ডেলিভারির পরের দিনই সরাসরি ব্যাংক/বিকাশ এর মাধ্যমে পেমেন্ট করা হয়</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6">
                <div class="service_item">
                    <div class="service_item_img text-center">
                        <img src="{{asset('public/content/frontend')}}/images/service_icon3.png" alt="" class="img-fluid">
                    </div>
                    <h4>দেশব্যাপী ডেলিভারি সার্ভিসট</h4>
                    <p>অর্ডার ডেলিভারির পরের দিনই সরাসরি ব্যাংক/বিকাশ এর মাধ্যমে পেমেন্ট করা হয়</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6">
                <div class="service_item">
                    <div class="service_item_img text-center">
                        <img src="{{asset('public/content/frontend')}}/images/service_icon4.png" alt="" class="img-fluid">
                    </div>
                    <h4>রিয়েল টাইম অর্ডার ট্র্যাকিং</h4>
                    <p>অর্ডার ডেলিভারির পরের দিনই সরাসরি ব্যাংক/বিকাশ এর মাধ্যমে পেমেন্ট করা হয়</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6">
                <div class="service_item">
                    <div class="service_item_img text-center">
                        <img src="{{asset('public/content/frontend')}}/images/service_icon5.png" alt="" class="img-fluid">
                    </div>
                    <h4>দ্রুত ডেলিভারি</h4>
                    <p>অর্ডার ডেলিভারির পরের দিনই সরাসরি ব্যাংক/বিকাশ এর মাধ্যমে পেমেন্ট করা হয়</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6">
                <div class="service_item">
                    <div class="service_item_img text-center">
                        <img src="{{asset('public/content/frontend')}}/images/service_icon6.png" alt="" class="img-fluid">
                    </div>
                    <h4>বিকাশ পেমেন্ট সুবিধা</h4>
                    <p>অর্ডার ডেলিভারির পরের দিনই সরাসরি ব্যাংক/বিকাশ এর মাধ্যমে পেমেন্ট করা হয়</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- fast_service end -->

<!-- all_bd_part start -->
<section class="all_bd_part py_90" id="all_bd_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-lg-5">
                <div class="all_bd_mps">
                    <img src="{{asset('public/content/frontend')}}/images/all_bd_maps.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-md-7 col-sm-12 col-lg-7">
                <div class="all_bd_content">
                    <h3>FAST MOVERS দিচ্ছে বাংলাদেশের ৬৪ জেলার
                        ৪৮৭ থানায় হোম ডেলিভারি সার্ভিস</h3>
                    <p>এখন আপনার কাস্টোমার দেশের যে প্রান্তেই থাকুক, FAST MOVERS পণ্য পৌঁছে দিবে ঘরের দরজায়</p>
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-3 col-sm-6">
                            <ul>
                                <li><a href="#">ঢাকা</a></li>
                                <li><a href="#">নরসিংদী</a></li>
                                <li><a href="#">রাজবাড়ী</a></li>
                                <li><a href="#">শরিয়তপুর</a></li>
                                <li><a href="#">টাঙ্গাইল</a></li>
                                <li><a href="#">বাগেরহাট</a></li>
                                <li><a href="#">চুয়াডাঙ্গা</a></li>
                                <li><a href="#">যশোর</a></li>
                                <li><a href="#">ঝিনাইদহ</a></li>
                                <li><a href="#">কুষ্টিয়া</a></li>
                                <li><a href="#">ফরিদপুর</a></li>
                                <li><a href="#">মাগুরা</a></li>
                                <li><a href="#">মেহেরপুর</a></li>
                                <li><a href="#">নড়াইল</a></li>
                                <li><a href="#">সাতক্ষীরা</a></li>
                                <li><a href="#">কিশোরগঞ্জ</a></li>

                            </ul>
                        </div>
                        <div class="col-6 col-lg-3 col-md-3 col-sm-6">
                            <ul>
                                <li><a href="#">বান্দরবান</a></li>
                                <li><a href="#">ব্রাহ্মণবাড়ীয়াী</a></li>
                                <li><a href="#">চাঁদপুর</a></li>
                                <li><a href="#">চট্টগ্রাম</a></li>
                                <li><a href="#">কুমিল্লা</a></li>
                                <li><a href="#">কক্সবাজার</a></li>
                                <li><a href="#">গাজীপুর</a></li>
                                <li><a href="#">ফেনী</a></li>
                                <li><a href="#">খাগড়াছড়ি</a></li>
                                <li><a href="#">লক্ষ্মীপুর</a></li>
                                <li><a href="#">নোয়াখালী</a></li>
                                <li><a href="#">রাঙ্গামাটি</a></li>
                                <li><a href="#">বরগুনা</a></li>
                                <li><a href="#">বরিশাল</a></li>
                                <li><a href="#">ভোলা</a></li>
                                <li><a href="#">ঝালকাঠি</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-lg-3 col-md-3 col-sm-6">
                            <ul>
                                <li><a href="#">পটুয়াখালী</a></li>
                                <li><a href="#">গোপালগঞ্জ</a></li>
                                <li><a href="#">পিরোজপুর</a></li>
                                <li><a href="#">জামালপুর</a></li>
                                <li><a href="#">ময়মনসিংহ</a></li>
                                <li><a href="#">নেত্রকোনা</a></li>
                                <li><a href="#">শেরপুর</a></li>
                                <li><a href="#">বগুড়া</a></li>
                                <li><a href="#">চাঁপাইনবাবগঞ্জ</a></li>
                                <li><a href="#">জয়পুরহাট</a></li>
                                <li><a href="#">নওগাঁ</a></li>
                                <li><a href="#">নাটোর</a></li>
                                <li><a href="#">পাবনা</a></li>
                                <li><a href="#">রাজশাহী</a></li>
                                <li><a href="#">সিরাজগঞ্জ</a></li>
                                <li><a href="#">ঝালকাঠি</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-lg-3 col-md-3 col-sm-6">
                            <ul>
                                <li><a href="#">দিনাজপুর</a></li>
                                <li><a href="#">গাইবান্ধা</a></li>
                                <li><a href="#">কুড়িগ্রাম</a></li>
                                <li><a href="#">লালমনিরহাট</a></li>
                                <li><a href="#">নীলফামারী</a></li>
                                <li><a href="#">পঞ্চগড়</a></li>
                                <li><a href="#">রংপুর</a></li>
                                <li><a href="#">মাদারীপুর</a></li>
                                <li><a href="#">ঠাকুরগাঁ</a></li>
                                <li><a href="#">হবিগঞ্জ</a></li>
                                <li><a href="#">মৌলভীবাজার</a></li>
                                <li><a href="#">সুনামগগঞ্</a></li>
                                <li><a href="#">সিলেট</a></li>
                                <li><a href="#">মানিকগঞ্জ</a></li>
                                <li><a href="#">মুন্সিগঞ্জ</a></li>
                                <li><a href="#">নারায়ণগঞ্জ</a></li>
                            </ul>
                        </div>
                        <div class="col-12">
                            <a href="#" class="btn btn_src_bd">search your district</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- all_bd_part end -->

<!-- Delivary_charge_part start -->
<section class="delivary_charge_part py_90" id="delivary_charge_sec">
    <div class="track_img">
        <img src="{{asset('public/content/frontend')}}/images/track_img1.png" alt="" class="img-fluid" style="width: 55%; margin-left: 377px;">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-5 col-sm-6">
                <div class="delivary_charge_form">
                    <h3>ডেলিভারি চার্জ ক্যালকুলেটর</h3>
                    {{-- <form> --}}
                        {{-- <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">HEIGHT(INCH)</label>
                                <input type="text" class="form-control" id="inputEmail4">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">WIDHT(INCH)</label>
                                <input type="text" class="form-control" id="inputPassword4">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">DEPTH(INCH)</label>
                            <input type="text" class="form-control" id="inputAddress">
                        </div> --}}


                        <div class="form-group">
                            <label for="inputAddress2">WEIGHT(KG)</label>
                            <input type="text" class="form-control" name="weight[]" id="weight">
                        </div>

                        <div class="form-row">
                            @php
                                $delivery = App\DeliveryZone::where('status', 1)->get();
                            @endphp
                            <div class="form-group col-md-12">
                                <label for="inputState">LoCATION</label>
                                <select class="form-control" name="location[]" id="location">
                                    <option selected>Select Your Location</option>
                                    @foreach ($delivery as $value)
                                    <option value="{{$value->price}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{-- <button type="submit" class="btn btn-sub">ক্যালকুলেট করুন</button> --}}
                        <button class="btn btn-sub">ক্যালকুলেট করুন</button>
                    {{-- </form> --}}
                        <h4 class="text-center">আপনার ডেলিভারি চার্জ ৳<span id="Amount"></span> + 0% COD চার্জ</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Delivary_charge_part end -->

<script>
    // $('#location').blur(function(){
    $('#location').on('blur', function() {
        $('.delivary_charge_form').each(function() {
            $(this).find('#Amount').html($('#weight').val()*$('#location').val());
        });
    });
</script>
@endsection