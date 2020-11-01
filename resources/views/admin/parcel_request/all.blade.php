@extends('layouts.backend.master')
@section('title','All Parcel Pequest')
@section('content')

<div class="row">
  <div class="col-md-12">
      <div class="panel panel-default">
          <div class="panel-heading">

            <div class="row">
              <div class="col-md-8">
                <h3 class="panel-title"><i class="fa fa-cubes"></i> All Parcel Pequest Information</h3>
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
                                  <th>Coustomer Name</th>
                                  <th>Coustomer Phone</th>
                                  <th>Parcel Weight</th>
                                  <th>Collect Amount</th>
                                  <th>Parcel Location</th>
                                  <th>Manage</th>
                              </tr>
                          </thead>

                          <tbody>

                            @foreach ($datas as $key => $data)
                              <tr>
                                  <td>{{$data->cous_name}}</td>
                                  <td>{{$data->cous_phone}}</td>
                                  <td>{{$data->parcel_weight}}</td>
                                  <td>{{$data->collect_amount}}</td>
                                  <td>{{$data->location->name}}</td>
                                  <td>
                                    <a class="btn btn-warning btn-sm" title="edit"  href="{{url('admin/parcel-request/create/'.$data->id)}}"><i class="fa fa-plus-square fa-lg"></i></a>

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


<!-- Modal for Delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="post" action="{{url('admin/parcel-request/softdelete')}}">
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
