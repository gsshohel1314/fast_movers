@extends('layouts.backend.master')
@section('title', 'Add Delivery Zone')
@section('content')
<div class="row">
    <div class="col-md-12">
        @if (!isset($id))
            <form class="form-horizontal" method="post" action="{{ url('admin/delivery-zone/store') }}" enctype="multipart/form-data">
        @else
            <form class="form-horizontal" method="post" action="{{ url('admin/delivery-zone/store') }}" enctype="multipart/form-data">
        @endif
        @csrf
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-8">
                        @if (!isset($id))
                            <h3 class="panel-title"><i class="fa fa-cubes"></i> Add Delivery Zone Information</h3>
                        @else
                            <h3 class="panel-title"><i class="fa fa-cubes"></i> Update Delivery Zone Information</h3>
                        @endif
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{ url('admin/delivery-zone') }}" class="btn btn-sm btn-primary btn-panel-head"><i class="fa fa-th"></i> All Delivery Zone</a>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Delivery Zone Name:</label>
                    <div class="col-sm-7">
                        <input type="hidden" name="id" value="{{ $id->id ?? '' }}">
                        <input type="text" name="name" value="{{ $id->name ?? '' }}" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Delivery Zone Price Per KG:</label>
                    <div class="col-sm-7">
                        <input type="text" name="price" value="{{ $id->price ?? '' }}" class="form-control @error('price') is-invalid @enderror">
                        @error('price')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
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
