@extends('layouts.backend.master')
@section('title', 'Recycle Bin')
@section('content')

{{-- @component('admin.dashboard.bredcumb')
  @slot('title')
    ALL RECYCLE
  @endslot
@endcomponent --}}

<div class="row">
    <div class="col-md-6 col-sm-6 col-lg-3">
        <a href="{{url('admin/recycle/admin')}}">
          <div class="mini-stat clearfix bx-shadow bg-white">
              <span class="mini-stat-icon bg-success"><i class="md md-person"></i></span>
              <div class="mini-stat-info text-right text-dark mini_stat_info">
                  @php
                      $totalAdmin=App\Admin::where('status',0)->count();
                  @endphp
                  <span class="counter text-dark">{{$totalAdmin}}</span>
                  Admins
              </div>
          </div>
        </a>
    </div>

    <div class="col-md-6 col-sm-6 col-lg-3">
      <a href="{{url('admin/recycle/pickup/area')}}">
        <div class="mini-stat clearfix bx-shadow bg-white">
            <span class="mini-stat-icon bg-success"><i class="md md-directions-car"></i></span>
            <div class="mini-stat-info text-right text-dark mini_stat_info">
                @php
                    $totalPickupArea=App\PickupArea::where('status',0)->count();
                @endphp
                <span class="counter text-dark">{{$totalPickupArea}}</span>
                Pick-Up Areas
            </div>
        </div>
      </a>
  </div>

  <div class="col-md-6 col-sm-6 col-lg-3">
    <a href="{{url('admin/recycle/pickup/product')}}">
      <div class="mini-stat clearfix bx-shadow bg-white">
          <span class="mini-stat-icon bg-success"><i class="md md-shopping-cart"></i></span>
          <div class="mini-stat-info text-right text-dark mini_stat_info">
              @php
                  $totalPickupProduct=App\PickupProduct::where('status',0)->count();
              @endphp
              <span class="counter text-dark">{{$totalPickupProduct}}</span>
              Pick-Up Products
          </div>
      </div>
    </a>
  </div>

  <div class="col-md-6 col-sm-6 col-lg-3">
    <a href="{{url('admin/recycle/delivery-zone')}}">
      <div class="mini-stat clearfix bx-shadow bg-white">
          <span class="mini-stat-icon bg-success"><i class="md md-map"></i></span>
          <div class="mini-stat-info text-right text-dark mini_stat_info">
              @php
                  $totalDeliveryZone=App\DeliveryZone::where('status',0)->count();
              @endphp
              <span class="counter text-dark">{{$totalDeliveryZone}}</span>
              Delivery Zone
          </div>
      </div>
    </a>
  </div>

  <div class="col-md-6 col-sm-6 col-lg-3">
    <a href="{{url('admin/recycle/shop')}}">
      <div class="mini-stat clearfix bx-shadow bg-white">
          <span class="mini-stat-icon bg-success"><i class="md md-play-shopping-bag"></i></span>
          <div class="mini-stat-info text-right text-dark mini_stat_info">
              @php
                  $totalShop=App\Shop::where('status',0)->count();
              @endphp
              <span class="counter text-dark">{{$totalShop}}</span>
              Shops
          </div>
      </div>
    </a>
  </div>

  <div class="col-md-6 col-sm-6 col-lg-3">
    <a href="{{url('admin/recycle/parcel-request')}}">
      <div class="mini-stat clearfix bx-shadow bg-white">
          <span class="mini-stat-icon bg-success"><i class="md md-add-shopping-cart"></i></span>
          <div class="mini-stat-info text-right text-dark mini_stat_info">
              @php
                  $totalParcelRequest=App\ParcelRequest::where('status',0)->count();
              @endphp
              <span class="counter text-dark">{{$totalParcelRequest}}</span>
              Parcel Request
          </div>
      </div>
    </a>
  </div>

</div>
@endsection