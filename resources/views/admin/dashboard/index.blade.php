@extends('layouts.backend.master')
@section('title', 'Dashboard')
@section('content')

{{-- @component('admin.dashboard.bredcumb')
  @slot('title')
    Welcome!
  @endslot
@endcomponent --}}

<div class="row">
    <div class="col-md-6 col-sm-6 col-lg-3">
        <div class="mini-stat clearfix bx-shadow" style="min-height: 166px;">
            <span class="mini-stat-icon bg-success"><i class="ion-ios7-cart"></i></span>
            <div class="mini-stat-info text-right text-muted">
                @php
                    $totalParcel = App\ParcelRequest::where('status',1)->count();
                @endphp
                <span class="counter"> {{ $totalParcel }} </span>
                Total Parcel
            </div>
            <div class="tiles-progress">
                <div class="m-t-20">
                    <h5 class="text-uppercase">Parcels<span id="progress_1" class="pull-right">0</span></h5>
                    <div class="progress progress-sm m-0">
                        <div id="dynamic_1" class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                          <span id="current-progress"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-sm-6 col-lg-3">
        <div class="mini-stat clearfix bx-shadow" style="min-height: 166px;">
            <span class="mini-stat-icon bg-purple"><i class="ion-model-s"></i></span>
            <div class="mini-stat-info text-right text-muted">
                @php
                    $totalPickupArea = App\PickupArea::where('status',1)->count();
                @endphp
                <span class="counter"> {{ $totalPickupArea }} </span>
                Total Pickup Area
            </div>
            <div class="tiles-progress">
                <div class="m-t-20">
                    <h5 class="text-uppercase">Pickup Areas<span id="progress_2" class="pull-right">0</span></h5>
                    <div class="progress progress-sm m-0">
                        <div id="dynamic_2" class="progress-bar progress-bar-purple progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                          <span id="current-progress"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-sm-6 col-lg-3">
        <div class="mini-stat clearfix bx-shadow" style="min-height: 166px;">
            <span class="mini-stat-icon bg-info"><i class="ion-android-system-home"></i></span>
            <div class="mini-stat-info text-right text-muted">
                @php
                    $totalShop = App\Shop::where('status',1)->count();
                @endphp
                <span class="counter"> {{ $totalShop }} </span>
                Total Shops
            </div>
            <div class="tiles-progress">
                <div class="m-t-20">
                    <h5 class="text-uppercase">Shops<span id="progress_3" class="pull-right">0</span></h5>
                    <div class="progress progress-sm m-0">
                        <div id="dynamic_3" class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                          <span id="current-progress"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-sm-6 col-lg-3">
        <div class="mini-stat clearfix bx-shadow" style="min-height: 166px;">
            <span class="mini-stat-icon bg-primary"><i class="ion-android-inbox"></i></span>
            <div class="mini-stat-info text-right text-muted">
                @php
                    $totalPickupProduct = App\PickupProduct::where('status',1)->count();
                @endphp
                <span class="counter"> {{ $totalPickupProduct }} </span>
                Total Pickup Product
            </div>
            <div class="tiles-progress">
                <div class="m-t-20">
                    <h5 class="text-uppercase">Pickup Products<span id="progress_4" class="pull-right">0</span></h5>
                    <div class="progress progress-sm m-0">
                        <div id="dynamic_4" class="progress-bar progress-bar-primary progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                          <span id="current-progress"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

<script>
    $(function() {
        var total_1 = {{ $totalParcel }};
        progress('dynamic_1', 'progress_1', total_1);

        var total_2 = {{ $totalPickupArea }};
        progress('dynamic_2', 'progress_2', total_2);

        var total_3 = {{ $totalShop }};
        progress('dynamic_3', 'progress_3', total_3);
        
        var total_4 = {{ $totalPickupProduct }};
        progress('dynamic_4', 'progress_4', total_4);
    });
    
    function progress(id_1, id_2, total){
        var current_progress = 0;
        var interval = setInterval(function() {
            current_progress += 1;
            $("#"+id_1)
            .css("width", current_progress + "%")
            .attr("aria-valuenow", current_progress)
            .text();
            $('#'+ id_2).html(current_progress +'%');
            if (current_progress >= total)
                clearInterval(interval);
        }, 100);
    }
</script>

@endsection