@extends('layouts.backend.master')
@section('title', $id->first_name)
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                  <div class="col-md-8">
                    <h3 class="panel-title"><i class="fa fa-cubes"></i> View Admin Information</h3>
                  </div>
                  <div class="col-md-4 text-right">
                    <a href="{{url('admin/user')}}" class="btn btn-sm btn-primary btn-panel-head"><i class="fa fa-th"></i> All Admin</a>
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
                        <td>First Name</td>
                        <td>:</td>
                        <td>{{$id->first_name}}</td>
                      </tr>

                      <tr>
                        <td>Last Name</td>
                        <td>:</td>
                        <td>{{$id->last_name}}</td>
                      </tr>

                      <tr>
                        <td>Phone Number</td>
                        <td>:</td>
                        <td>{{$id->phone}}</td>
                      </tr>

                      <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>{{$id->email}}</td>
                      </tr>

                      <tr>
                        <td>Image</td>
                        <td>:</td>
                        <td>
                            @if($id->image==true)
                                <img src="{{ asset('public/upload/admin') }}/{{ $id->image }}" height="100px" width="100px" />
                            @else
                                <img src="{{ asset('public/content/backend')}}/images/default-avatar.png" height="100px" width="100px" />
                            @endif
                        </td>
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
