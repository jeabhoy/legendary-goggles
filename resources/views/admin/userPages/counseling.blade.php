@extends('layouts.user')
@section('sidebar')
  <ul class="sidebar-menu" data-widget="tree" data-follow-link='true'>
    <li class="header">MAIN NAVIGATION</li>
    <li class="treeview">
      <a href="{{route('userProfileShow', ['id' => $array['id']])}}">
        <i class="fa fa-user"></i> <span>Profile</span>
      </a>
    </li>
    <li class="treeview">
      <a href="{{route('userInterviewShow', ['id' => $array['id']])}}">
        <i class="fa fa-commenting-o"></i>
        <span>Structured Interview</span>
      </a>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-pencil"></i> <span>Test</span>
      </a>
    </li>
    @if(Auth::user()->level == 'Admin')
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-user-secret"></i> <span>Counseling</span>
        </a>
      </li>
      <li class="treeview">
        <a href="{{route('violationIndex', ['id' => $array['id']])}}">
          <i class="fa fa-fire"></i> <span>Violations</span>
        </a>
      </li>
    @endif
  </ul>
@endsection
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Counseling
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Counseling</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      @if (session('status'))
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-check"></i>{{ session('status') }}</h4>
        </div>
      @endif
      @if($errors->any())
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-ban"></i> Alert!</h4>
          <ul>
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
      @endif
        <div class="box box-success">
          <div class="box-header">
            <h3 class="box-title">Counseling Records</h3>
            <div class="box-tools">
                <button type="button" class="btn btn-flat btn-primary" data-toggle="modal" data-target="#modal" data-backdrop="static" data-keyboard="false" id="addModal">Add Record</button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            @if(empty($array['counseling']))
              <h4 class="text-center">No Records Found</h4>
            @else
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Data Session</th>
                    <th>Concern</th>
                    <th>Created At</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($array['counseling'] as $record)
                    <tr class="placeholder">
                      <td id="dataSessionCon">{{$record['dataSession']}}</td>
                      <td id="concernCon">{{$record['concern']}}</td>
                      <td>{{$record['created_at']}}</td>
                      <td>
                        <input type="hidden" id="recordID" value="{{$record['id']}}">
                        <div class="btn-group">
                          <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#editModalCon" data-backdrop="static" data-keyboard="false" id="editModal"><i class="fa fa-edit"></i> Edit</button>
                        </div>
                        <div class="btn-group">
                          <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delModal" data-backdrop="static" data-keyboard="false" id="deleteModal"><i class="fa fa-trash"></i> Delete</button>
                         </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            @endif
          </div>
          <!-- /.box-body -->
        </div>
      <div class="modal fade" id="modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="modalTitle">Create Record</h4>
            </div>
            <form method="POST" action="{{route('counselingCreate', ['id' => $array['id']])}}" id="formSubmit">
              {{ csrf_field() }}
            <div class="modal-body">
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-12">
                      Data Session
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <input type="text" name="dataSession" class="form-control" id="dataSession" value="{{old('dataSession')}}">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-12">
                      Concern
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <textarea class="form-control" rows="5" name="concern" id="concern">{{old('concern')}}</textarea>
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal" id="cancel">Cancel</button>
              <button type="button" class="btn btn-primary" id="confirmation">Save</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <div class="modal fade" id="editModalCon">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="modalTitle">Edit Record</h4>
            </div>
            <form method="POST" action="{{route('counselingUpdate', ['id' => $array['id']])}}" id="editFormSubmit">
              {{ csrf_field() }}
              {{method_field('PUT')}}
            <div class="modal-body">
                <div class="form-group">
                  <input type="hidden" id="id" name="hiddenId">
                  <div class="row">
                    <div class="col-md-12">
                      Data Session
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <input type="text" name="dataSessionEdit" class="form-control" id="dataSessionEdit">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-12">
                      Concern
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <textarea class="form-control" rows="5" name="concernEdit" id="concernEdit"></textarea>
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal" id="cancel">Cancel</button>
              <button type="button" class="btn btn-primary" id="editButton">Save</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <div class="modal modal-danger fade" id="delModal">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete Record</h4>
              </div>
              <div class="modal-body">
                <p>Are you sure?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <form action="{{route('counselingDestroy', ['id' => $array['id']])}}" method="POST" id="deleteForm">
                  {{ csrf_field() }}
                  {{method_field('DELETE')}}
                  <input type="hidden" id="deleteId" name="deleteId">
                  <button type="button" class="btn btn-outline" id="deleteButton">Ok</button>
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
  </div>
</section>
<!-- /.content -->
@endsection
@section('scripts')
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
  <script>
    $(document).ready(function () {
      $(document).on('click', '.placeholder', function (event) {
        var id = $(this).find('#recordID').val();
        var dataSession = $(this).find('#dataSessionCon').text();
        var concern = $(this).find('#concernCon').text();
        $('#deleteId').val(id);
        $('#id').val(id);
        $('#dataSessionEdit').val(dataSession);
        $('#concernEdit').val(concern);
      });
      $('#confirmation').click(function (event) {
        $('#formSubmit').submit();
      })
      $('#editButton').click(function (event) {
        $('#editFormSubmit').submit();
      })
      $('#deleteButton').click(function (event) {
        $('#deleteForm').submit();
      })
    });
  </script>
@endsection