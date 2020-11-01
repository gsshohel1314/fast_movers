@extends('layouts.backend.master')
@section('title', $id->shop_name)
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                  <div class="col-md-8">
                    <h3 class="panel-title"><i class="fa fa-cubes"></i> View Shop Information</h3>
                  </div>
                  <div class="col-md-4 text-right">
                    <a href="{{url('admin/shop')}}" class="btn btn-sm btn-primary btn-panel-head"><i class="fa fa-th"></i> All Shop Information</a>
                  </div>
                  <div class="clearfix">
                </div>
                </div>
            </div>

            <div class="panel-body">
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                    <table class="table table-striped table-bordered view-table-custom">
                      <tr>
                        <td>Shop Name</td>
                        <td>:</td>
                        <td>{{$id->shop_name}}</td>
                      </tr>

                      <tr>
                        <td>Shop Address</td>
                        <td>:</td>
                        <td>{{$id->shop_address}}</td>
                      </tr>

                      <tr>
                        <td>Shop Email</td>
                        <td>:</td>
                        <td>{{$id->shop_email}}</td>
                      </tr>

                      <tr>
                        <td>Pickup Address</td>
                        <td>:</td>
                        <td>{{$id->pick_address}}</td>
                      </tr>

                      <tr>
                        <td>Pickup Area</td>
                        <td>:</td>
                        <td>{{$id->pickArea->name}}</td>
                      </tr>

                      <tr>
                        <td>Pickup Phone</td>
                        <td>:</td>
                        <td>{{$id->pick_phone}}</td>
                      </tr>

                      <tr>
                        <td>Pickup Type</td>
                        <td>:</td>
                        <td>{{$id->pickProduct->name}}</td>
                      </tr>

                      <tr>
                        <td>Delivery Zone</td>
                        <td>:</td>
                        <td>{{$id->deliZone->name}}</td>
                      </tr>

                      <tr>
                        <td>Referrer Id</td>
                        <td>:</td>
                        <td>{{$id->ref_id}}</td>
                      </tr>

                      <tr>
                        <td>Coupon Code</td>
                        <td>:</td>
                        <td>{{$id->coup_code}}</td>
                      </tr>

                    </table>
                  </div>
                  <div class="col-md-2"></div>
                </div>
            </div>

            <div class="panel-footer">
              <a href="#" class="btn btn-sm btn-primary">PRINT</a>
              <a href="#" class="btn btn-sm btn-warning">PDF</a>
              <a href="#" class="btn btn-sm btn-info">CSV</a>
            </div>

        </div>
    </div>
</div>
@endsection
