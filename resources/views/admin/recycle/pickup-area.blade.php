@extends('layouts.backend.master')
@section('title','All Pick-Up Area')
@section('content')

<div class="row">
  <div class="col-md-12">
      <div class="panel panel-default">
          <div class="panel-heading">

            <div class="row">
              <div class="col-md-8">
                <h3 class="panel-title"><i class="fa fa-cubes"></i> All Recycle Pick-Up Area Information</h3>
              </div>
              <div class="col-md-4 text-right">
                <a href="{{url('admin/recycle')}}" class="btn btn-sm btn-primary btn-panel-head"><i class="fa fa-th"></i> All Recycle</a>
              </div>
              <div class="clearfix">
            </div>
            </div>
          </div>

          <div class="panel-body">
              <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <table id="datatable" class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                  <th>No.</th>
                                  <th>Pick-Up Area Name</th>
                                  <th>Pick-Up Price</th>
                                  <th>Manage</th>
                              </tr>
                          </thead>

                          <tbody>

                            @foreach ($datas as $key => $data)
                              <tr>
                                  <td>{{$key + 1}}</td>
                                  <td>{{$data->name}}</td>
                                  <td>{{$data->price}}</td>
                                  <td>
                                    <a class="btn btn-info btn-sm" title="delete" id="restore" data-toggle="modal" data-target="#restoreModal" data-id="{{$data->id}}"><i class="fa fa-refresh fa-lg delete_icon"></i></a>

                                    <a class="btn btn-danger btn-sm" title="delete" id="delete" data-toggle="modal" data-target="#deleteModal" data-id="{{$data->id}}"><i class="fa fa-trash fa-lg delete_icon"></i></a>
                                  </td>
                              </tr>
                            @endforeach

                          </tbody>
                      </table>

                  </div>
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

<!-- Modal for Restore -->
<div class="modal fade" id="restoreModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="post" action="{{url('admin/pickup/area/restore')}}">
        @csrf
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel"> <p>Confirm Message!</p></h3>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to restore?</p>
          <input type="hidden" id="modal_id" name="modal_id">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-info" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-danger">Yes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal for Delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="post" action="{{url('admin/pickup/area/delete')}}">
        @csrf
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel"> <p>Confirm Message!</p></h3>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete?</p>
          <input type="hidden" id="modal_id" name="modal_id">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-info" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-danger">Yes</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
