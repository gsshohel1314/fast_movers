@extends('layouts.backend.master')
@section('title', 'View Parcel')
@section('content')
<div class="row">
    <div class="col-md-12">
        @if (isset($id))
            <form class="form-horizontal" method="post" action="{{ url('admin/parcel-request/store') }}" enctype="multipart/form-data">
        @endif
        @csrf
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-8">
                        @if (isset($id))
                            <h3 class="panel-title"><i class="fa fa-cubes"></i> View Parcel request Information</h3>
                        @endif
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{ url('admin/parcel-request') }}" class="btn btn-sm btn-primary btn-panel-head"><i class="fa fa-th"></i> All Parcel Request</a>
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
                          <td>Coustomer Name</td>
                          <td>:</td>
                          <td>{{$id->cous_name}}</td>
                        </tr>
  
                        <tr>
                          <td>Coustomer Phone</td>
                          <td>:</td>
                          <td>{{$id->cous_phone}}</td>
                        </tr>
  
                        <tr>
                          <td>Coustomer Address</td>
                          <td>:</td>
                          <td>{{$id->cous_address}}</td>
                        </tr>
  
                        <tr>
                          <td>Invoice ID</td>
                          <td>:</td>
                          <td>{{$id->invoice_id}}</td>
                        </tr>
  
                        <tr>
                          <td>Parcel Weight</td>
                          <td>:</td>
                          <td>{{$id->parcel_weight}}</td>
                        </tr>
  
                        <tr>
                          <td>Collection Amount</td>
                          <td>:</td>
                          <td>{{$id->collect_amount}}</td>
                        </tr>
  
                        <tr>
                          <td>Product Selling Price</td>
                          <td>:</td>
                          <td>{{$id->pro_sell_price}}</td>
                        </tr>
  
                        <tr>
                          <td>Instruction</td>
                          <td>:</td>
                          <td>{{$id->instruction}}</td>
                        </tr>
  
                        <tr>
                          <td>Tracking ID</td>
                          <td>:</td>
                          <td>{{$id->track_id}}</td>
                        </tr>
  
                        <tr>
                          <td>Parcel Location</td>
                          <td>:</td>
                          <td>
                            <div class="form-group {{$errors->has('location_id')? 'has-error':''}}">
                                <div class="col-sm-7">
                                    <input type="hidden" name="id" value="{{ $id->id ?? '' }}">
                                    <select class="form-control" name="location_id">
                                        <option value="">Select Parcel Location</option>
                                        @foreach ($locations as $value)
                                            <option value="{{$value->id}}" @if($value->id==$id->location_id) selected
                                                @endif >{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('location_id'))
                                    <span class="invalid-feedback mb-0" role="alert">
                                        <strong>{{ $errors->first('location_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                          </td>
                        </tr>
                      </table>
                    </div>
                    <div class="col-md-2"></div>
                  </div>
            </div>
            <div class="panel-footer text-center">
                <button type="submit" class="btn btn-sm btn-primary btn-panel-footer">SUBMIT</button>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection
