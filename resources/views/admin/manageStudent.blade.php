@extends('layouts.admin')
@section('stylesheets')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endsection
@section('sidebar')
<ul class="sidebar-menu" data-widget="tree"  data-follow-link='true'>
  <li class="header">MAIN NAVIGATION</li>
  <li class="treeview">
    <a href="{{route('adminDashboardIndex')}}">
      <i class="fa fa-dashboard"></i> <span>Dashboard</span>
    </a>
  </li>
  <li class="active treeview">
    <a href="#">
      <i class="fa fa-users"></i> <span>Manage Student</span>
    </a>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-file"></i> <span>Forms</span>
    </a>
  </li>
</ul>
@endsection
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Manage Student
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Manage Student</li>
  </ol>
</section>

<!-- Main content -->
<section class="content" id="content">
  <div class="row">
    <div class="col-xs-12">
      @if (session('status'))
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-check"></i>{{ session('status') }}</h4>
        </div>
      @endif
      <div class="box box-success">
        <div class="box-header">
          <h3 class="box-title">Users Record</h3>
          <div class="box-tools">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Add
                <span class="fa fa-caret-down"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="{{route('adminCreateRecordIndex')}}">Student Id Number</a></li>
                <li><a href="{{route('adminCreateStudentProfile')}}">Student Record</a></li>
              </ul>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table class="table table-hover" id="datatable">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Level</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      <div class="modal modal-danger fade" id="deleteModal">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="modalTitle">Delete Record</h4>
            </div>
            <div class="modal-body">
              <input type="hidden" id="id">
              <p id="modalText">Are you sure?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline pull-left" data-dismiss="modal" id="cancel">No</button>
              <button type="button" class="btn btn-outline" id="deleteUser">Yes</button>
              <button type="button" class="btn btn-outline" id="confirmation">OK</button>
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
@endsection
@section('scripts')
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#datatable').DataTable({
        'processing':true,
        'serverSide':true,
        'ajax': '{{route('getDataTable')}}',
        'columns':[
          {'data':'id'},
          {'data':'fullName'},
          {'data':'level'},
          {'data': 'action', 'name': 'action', 'orderable': false, 'searchable': false}
          // {'data':'action', 'orderable': false, 'searchable': false}
        ]
      });
      $.fn.dataTable.ext.errMode = 'throw';
      $(document).on('click', '.placeholder', function (event) {
        var id = $(this).find('#userId').val();
        $('#id').val(id);
      });
      $('#confirmation').hide();
      $('#confirmation').click(function (event) {
        window.location.href = '{{route('adminManageStudentIndex')}}';
      })
      $('#deleteUser').click(function (event) {
        var id = $('#id').val();
        $.post("/final/public/admin/manageStudent/" + id, {"id":id, "_token":$("input[name=_token]").val()}, function(data){
          $('#confirmation').show();
          $('#deleteUser').hide();
          $('#close').hide();
          $('#modalTitle').text('Success');
          $('#modalText').text('Record successfully deleted!');
          $('#deleteModal').removeClass('modal-danger').addClass('modal-success');
          $('#cancel').hide();
        });
      });
    });
  </script>
@endsection
