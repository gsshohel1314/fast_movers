@extends('layouts.backend.master')
@section('title', 'Add Admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        @if (!isset($id))
            <form method="post" action="{{ url('admin/user/store') }}" enctype="multipart/form-data">
        @else
            <form method="post" action="{{ url('admin/user/store') }}" enctype="multipart/form-data">
        @endif
        @csrf
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-8">
                        @if (!isset($id))
                            <h3 class="panel-title"><i class="fa fa-cubes"></i> Add Admin Information</h3>
                        @else
                            <h3 class="panel-title"><i class="fa fa-cubes"></i> Update Admin Information</h3>
                        @endif
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{ url('admin/user') }}" class="btn btn-sm btn-primary btn-panel-head"><i class="fa fa-th"></i> All Admin</a>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="hidden" name="id" value="{{ $id->id ?? '' }}">
                            <input type="text" name="first_name" value="{{ $id->first_name ?? '' }}" class="form-control @error('first_name') is-invalid @enderror">
                            @error('first_name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="{{ $id->email ?? '' }}" class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        @if (!isset($id))
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" value="" class="form-control @error('password') is-invalid @enderror">
                                @error('password')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Re Password</label>
                                <input type="password" name="password_confirmation" value="" class="form-control">
                            </div>
                        @endif
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" value="{{ $id->last_name ?? '' }}" class="form-control @error('last_name') is-invalid @enderror">
                            @error('last_name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" value="{{ $id->phone ?? '' }}" class="form-control @error('phone') is-invalid @enderror">
                            @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Admin Image</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file btnu_browse">
                                        Select Image <input type="file" name="image" id="imgInp">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <div class="col-sm-2" style="height: 100px; width: 100px; margin-top: 10px;">

                                @if (!isset($id))
                                    <img id="img-upload" src="{{ asset('public/content/backend') }}/images/image_placeholder.jpg" alt="...">
                                @else
                                    @if ($id->image ?? '')
                                        <img id="img-upload" src="{{ asset('public/upload/admin') }}/{{ $id->image ?? '' }}" alt="..." style="height: 100px;">
                                    @else
                                        <img id="img-upload" src="{{ asset('public/content/backend') }}/images/default-avatar.png" height="100px;" />
                                    @endif
                                @endif
                            </div>
                        </div>
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
