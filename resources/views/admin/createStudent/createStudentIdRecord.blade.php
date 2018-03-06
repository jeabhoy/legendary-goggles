@extends('layouts.admin')
@section('stylesheets')
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
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
    <a href="{{route('adminManageStudentIndex')}}">
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
    Create Student Record
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li>Manage Student</li>
    <li class="active">Create Student Record</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <form action="{{route('adminCreateRecordStore')}}" method="POST">
            <div class="row">
              <div class="col-md-6">
                  {{ csrf_field() }}
                  <div class="form-group {{ $errors->has('id') ? ' has-error' : '' }}">
                    <label class="control-label" for="id">Student ID Number</label>
                    <input type="text" class="form-control" name="id" id="id"  value="{{old('id')}}" {{ $errors->has('id') ? 'autofocus' : '' }}>
                    @if ($errors->has('id'))
                      <span class="help-block">{{$errors->first('id')}}</span>
                    @endif
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group {{ $errors->has('level') ? ' has-error' : '' }}">
                  <label class="control-label" for="level">Level</label>
                  <select class="form-control" name="level" id="level">
                    <option @if (old('level') == 'College') selected @endif>College</option>
                    <option @if (old('level') == 'Grade 12') selected @endif>Grade 12</option>
                    <option @if (old('level') == 'Grade 11') selected @endif>Grade 11</option>
                    <option @if (old('level') == 'Grade 10') selected @endif>Grade 10</option>
                    <option @if (old('level') == 'Grade 9') selected @endif>Grade 9</option>
                    <option @if (old('level') == 'Grade 8') selected @endif>Grade 8</option>
                    <option @if (old('level') == 'Grade 7') selected @endif>Grade 7</option>
                    <option @if (old('level') == 'Grade 6') selected @endif>Grade 6</option>
                    <option @if (old('level') == 'Grade 5') selected @endif>Grade 5</option>
                    <option @if (old('level') == 'Grade 4') selected @endif>Grade 4</option>
                    <option @if (old('level') == 'Grade 3') selected @endif>Grade 3</option>
                    <option @if (old('level') == 'Grade 2') selected @endif>Grade 2</option>
                    <option @if (old('level') == 'Grade 1') selected @endif>Grade 1</option>
                  </select>
                  @if ($errors->has('level'))
                    <span class="help-block">{{$errors->first('level')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row text-center">
              <div class="col-md-12">
                <button class="btn btn-flat btn-primary center-block">Save</button>
              </div>
            </div>
          </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
@endsection
@section('scripts')
  <!-- bootstrap datepicker -->
  <script src="{{asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('js/admin/createRecord.js')}}"></script>
@endsection
