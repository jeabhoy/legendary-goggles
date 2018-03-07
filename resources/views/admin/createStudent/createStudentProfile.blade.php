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
    STUDENT CUMMULATIVE RECORD
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li>Manage Student</li>
    <li class="active">Create Student Record</li>
    <li class="active">Profile</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <form action="{{route('adminStoreStudentProfile')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-lg-12">
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_1" data-toggle="tab">Profile</a></li>
            <li class="disabled"><a href="#" data-toggle="tab">Personal Data</a></li>
            <li class="disabled"><a href="#" data-toggle="tab">Family Background</a></li>
            <li class="disabled"><a href="#" data-toggle="tab">Siblings</a></li>
            <li class="disabled"><a href="#" data-toggle="tab">Educational Background</a></li>
            <li class="disabled"><a href="#" data-toggle="tab">Structured Interview</a></li>
            <li class="disabled"><a href="#" data-toggle="tab">Personality Test</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
                <div class="row">
                    <div class="col-lg-4">
                        <!-- Profile Image -->
                        <div class="box box-default">
                            <div class="box-body box-profile">
                                <img id="profilePicture" class="profile-user-img img-responsive img-circle" src="{{asset('img/defaultAvatar.png')}}
                                        " alt="User profile picture">
                                <div class="form-group {{ $errors->has('profilePicture') ? ' has-error' : '' }}">
                                    <label class="control-label" for="profilePicture">Upload Image</label>
                                    <input type="file" id="profilePictureInput" name="profilePicture">
                                    @if ($errors->has('profilePicture'))
                                        <span class="help-block">{{$errors->first('profilePicture')}}</span>
                                    @endif
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <div class="col-lg-8">
                        <h5>First Term Enrolled</h5>
                        <div class="row">
                            <div class="col-lg-6">
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
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('id') ? ' has-error' : '' }}">
                                    <label class="control-label" for="id">Student Number</label>
                                    <input type="text" class="form-control" name="id" id="id"  value="{{old('id')}}">
                                    @if ($errors->has('id'))
                                        <span class="help-block">{{$errors->first('id')}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group {{ $errors->has('schoolYear') ? ' has-error' : '' }}">
                                    <label class="control-label" for="schoolYear">School Year</label>
                                    <input type="text" class="form-control" name="schoolYear" id="schoolYear" value="{{old('schoolYear')}}">
                                    @if ($errors->has('schoolYear'))
                                        <span class="help-block">{{$errors->first('schoolYear')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4 collegeShow grade1112Show grade710Hide grade16Hide">
                                <div class="form-group {{ $errors->has('semester') ? ' has-error' : '' }}">
                                    <label class="control-label" for="semester">Semester</label>
                                    <select class="form-control" name="semester" id="semester">
                                        <option @if (old('semester') == 1) selected @endif>1</option>
                                        <option @if (old('semester') == 2) selected @endif>2</option>
                                    </select>
                                    @if ($errors->has('semester'))
                                        <span class="help-block">{{$errors->first('semester')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4 collegeShow grade1112Hide grade710Hide grade16Hide">
                                <div class="form-group {{ $errors->has('course') ? ' has-error' : '' }}">
                                    <label class="control-label" for="course">Course</label>
                                    <input type="text" class="form-control" name="course" id="course"  value="{{old('course')}}">
                                    @if ($errors->has('course'))
                                        <span class="help-block">{{$errors->first('course')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4 collegeHide grade1112Show grade710Hide grade16Hide">
                                <div class="form-group {{ $errors->has('strand') ? ' has-error' : '' }}">
                                    <label class="control-label" for="strand">Strand</label>
                                    <input type="text" class="form-control" name="strand" id="strand"  value="{{old('strand')}}">
                                    @if ($errors->has('strand'))
                                        <span class="help-block">{{$errors->first('strand')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4 collegeHide grade1112Hide grade710Show grade16Hide">
                                <div class="form-group {{ $errors->has('year') ? ' has-error' : '' }}">
                                    <label class="control-label" for="year">Year</label>
                                    <input type="text" class="form-control" name="year" id="year"  value="{{old('year')}}">
                                    @if ($errors->has('year'))
                                        <span class="help-block">{{$errors->first('year')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4 collegeHide grade1112Hide grade710Show grade16Hide">
                                <div class="form-group {{ $errors->has('section') ? ' has-error' : '' }}">
                                    <label class="control-label" for="section">Section</label>
                                    <input type="text" class="form-control" name="section" id="section"  value="{{old('section')}}">
                                    @if ($errors->has('section'))
                                        <span class="help-block">{{$errors->first('section')}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <!-- /.tab-content -->
        </div>
      </div>
      <div class="text-center">
        <button class="btn btn-lg btn-flat btn-primary center-block">Next</button>
      </div>
  </form>
</section>
@endsection
@section('scripts')
  <script src="{{asset('js/admin/createRecord.js')}}"></script>
@endsection
