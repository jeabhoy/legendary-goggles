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
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            EDUCATIONAL BACKGROUND
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Manage Student</li>
            <li class="active">Create Student Record</li>
            <li class="active">Educational Background</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
       <form method="POST" action="{{route('adminStoreStudentEducationalBackground', ['id' => $user->id])}}">
           {{csrf_field()}}
           <div class="row">
               <div class="col-lg-12">
                   <!-- Custom Tabs -->
                   <div class="nav-tabs-custom">
                       <ul class="nav nav-tabs">
                           <li class="disabled"><a href="#" data-toggle="tab">Profile</a></li>
                           <li class="disabled"><a href="#" data-toggle="tab">Personal Data</a></li>
                           <li class="disabled"><a href="#" data-toggle="tab">Family Background</a></li>
                           <li class="disabled"><a href="#" data-toggle="tab">Siblings</a></li>
                           <li class="active"><a href="#tab_1" data-toggle="tab">Educational Background</a></li>
                           <li class="disabled"><a href="#" data-toggle="tab">Structured Interview</a></li>
                           <li class="disabled"><a href="#" data-toggle="tab">Personality Test</a></li>
                           @if($user->level == 'College' && $user->exitInterviewTaken == 'false')
                               <li class="disabled"><a href="#" data-toggle="tab">Exit Interview</a></li>
                           @endif
                       </ul>
                       <div class="tab-content">
                           <div class="tab-pane active" id="tab_1">
                               <h4>EDUCATIONAL BACKGROUND</h4>
                               <div class="table-responsive no-padding">
                                   <table class="table table-hover">
                                       <tr>
                                           <th>Level</th>
                                           <th>Name of the School</th>
                                           <th>Address of the School</th>
                                           <th>Years of Attendance</th>
                                       </tr>
                                       <tr>
                                           <td>
                                               Elementary
                                           </td>
                                           <td>
                                               <div class="form-group {{ $errors->has('elementaryNameSchool') ? ' has-error' : '' }}">
                                                   <input type="text" class="form-control" name="elementaryNameSchool" id="elementaryNameSchool"  value="{{old('elementaryNameSchool')}}">
                                                   @if ($errors->has('elementaryNameSchool'))
                                                       <span class="help-block">{{$errors->first('elementaryNameSchool')}}</span>
                                                   @endif
                                               </div>
                                           </td>
                                           <td>
                                               <div class="form-group {{ $errors->has('elementaryAddressSchool') ? ' has-error' : '' }}">
                                                   <input type="text" class="form-control" name="elementaryAddressSchool" id="elementaryAddressSchool"  value="{{old('elementaryAddressSchool')}}">
                                                   @if ($errors->has('elementaryAddressSchool'))
                                                       <span class="help-block">{{$errors->first('elementaryAddressSchool')}}</span>
                                                   @endif
                                               </div>
                                           </td>
                                           <td>
                                               <div class="form-group {{ $errors->has('elementaryYearsAttendance') ? ' has-error' : '' }}">
                                                   <input type="text" class="form-control" name="elementaryYearsAttendance" id="elementaryYearsAttendance"  value="{{old('elementaryYearsAttendance')}}">
                                                   @if ($errors->has('elementaryYearsAttendance'))
                                                       <span class="help-block">{{$errors->first('elementaryYearsAttendance')}}</span>
                                                   @endif
                                               </div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               High School
                                           </td>
                                           <td>
                                               <div class="form-group {{ $errors->has('highSchoolNameSchool') ? ' has-error' : '' }}">
                                                   <input type="text" class="form-control" name="highSchoolNameSchool" id="highSchoolNameSchool"  value="{{old('highSchoolNameSchool')}}">
                                                   @if ($errors->has('highSchoolNameSchool'))
                                                       <span class="help-block">{{$errors->first('highSchoolNameSchool')}}</span>
                                                   @endif
                                               </div>
                                           </td>
                                           <td>
                                               <div class="form-group {{ $errors->has('highSchoolAddressSchool') ? ' has-error' : '' }}">
                                                   <input type="text" class="form-control" name="highSchoolAddressSchool" id="highSchoolAddressSchool"  value="{{old('highSchoolAddressSchool')}}">
                                                   @if ($errors->has('highSchoolAddressSchool'))
                                                       <span class="help-block">{{$errors->first('highSchoolAddressSchool')}}</span>
                                                   @endif
                                               </div>
                                           </td>
                                           <td>
                                               <div class="form-group {{ $errors->has('highSchoolYearsAttendance') ? ' has-error' : '' }}">
                                                   <input type="text" class="form-control" name="highSchoolYearsAttendance" id="highSchoolYearsAttendance"  value="{{old('highSchoolYearsAttendance')}}">
                                                   @if ($errors->has('highSchoolYearsAttendance'))
                                                       <span class="help-block">{{$errors->first('highSchoolYearsAttendance')}}</span>
                                                   @endif
                                               </div>
                                           </td>
                                       </tr>
                                       @if($user->level == 'Grade 7' || $user->level == 'Grade 8' || $user->level == 'Grade 9' || $user->level == 'Grade 9' || $user->level == 'Grade 10' || $user->level == 'Grade 11' || $user->level == 'Grade 12' || $user->level == 'College')
                                           <tr class="collegeShow grade1112Show grade710Show grade16Hide">
                                               <td>
                                                   College
                                               </td>
                                               <td>
                                                   <div class="form-group {{ $errors->has('collegeNameSchool') ? ' has-error' : '' }}">
                                                       <input type="text" class="form-control" name="collegeNameSchool" id="collegeNameSchool"  value="{{old('collegeNameSchool')}}">
                                                       @if ($errors->has('collegeNameSchool'))
                                                           <span class="help-block">{{$errors->first('collegeNameSchool')}}</span>
                                                       @endif
                                                   </div>
                                               </td>
                                               <td>
                                                   <div class="form-group {{ $errors->has('collegeAddressSchool') ? ' has-error' : '' }}">
                                                       <input type="text" class="form-control" name="collegeAddressSchool" id="collegeAddressSchool"  value="{{old('collegeAddressSchool')}}">
                                                       @if ($errors->has('collegeAddressSchool'))
                                                           <span class="help-block">{{$errors->first('collegeAddressSchool')}}</span>
                                                       @endif
                                                   </div>
                                               </td>
                                               <td>
                                                   <div class="form-group {{ $errors->has('collegeYearsAttendance') ? ' has-error' : '' }}">
                                                       <input type="text" class="form-control" name="collegeYearsAttendance" id="collegeYearsAttendance"  value="{{old('collegeYearsAttendance')}}">
                                                       @if ($errors->has('collegeYearsAttendance'))
                                                           <span class="help-block">{{$errors->first('collegeYearsAttendance')}}</span>
                                                       @endif
                                                   </div>
                                               </td>
                                           </tr>
                                           <tr class="collegeShow grade1112Show grade710Show grade16Hide">
                                               <td>
                                                   Graduate Studies/<br>
                                                   Vocational Course
                                               </td>
                                               <td>
                                                   <div class="form-group {{ $errors->has('graduateVocationalNameSchool') ? ' has-error' : '' }}">
                                                       <input type="text" class="form-control" name="graduateVocationalNameSchool" id="graduateVocationalNameSchool"  value="{{old('graduateVocationalNameSchool')}}">
                                                       @if ($errors->has('graduateVocationalNameSchool'))
                                                           <span class="help-block">{{$errors->first('graduateVocationalNameSchool')}}</span>
                                                       @endif
                                                   </div>
                                               </td>
                                               <td>
                                                   <div class="form-group {{ $errors->has('graduateVocationalAddressSchool') ? ' has-error' : '' }}">
                                                       <input type="text" class="form-control" name="graduateVocationalAddressSchool" id="graduateVocationalAddressSchool"  value="{{old('graduateVocationalAddressSchool')}}">
                                                       @if ($errors->has('graduateVocationalAddressSchool'))
                                                           <span class="help-block">{{$errors->first('graduateVocationalAddressSchool')}}</span>
                                                       @endif
                                                   </div>
                                               </td>
                                               <td>
                                                   <div class="form-group {{ $errors->has('graduateVocationalYearsAttendance') ? ' has-error' : '' }}">
                                                       <input type="text" class="form-control" name="graduateVocationalYearsAttendance" id="graduateVocationalYearsAttendance"  value="{{old('graduateVocationalYearsAttendance')}}">
                                                       @if ($errors->has('graduateVocationalYearsAttendance'))
                                                           <span class="help-block">{{$errors->first('graduateVocationalYearsAttendance')}}</span>
                                                       @endif
                                                   </div>
                                               </td>
                                           </tr>
                                           @endif
                                   </table>
                               </div>
                               <div class="row">
                                   <div class="col-md-4">
                                       <div class="form-group {{ $errors->has('subjectExcel') ? ' has-error' : '' }}">
                                           <label class="control-label" for="subjectExcel">Subject you excel the most</label>
                                           <input type="text" class="form-control" name="subjectExcel" id="subjectExcel"  value="{{old('subjectExcel')}}">
                                           @if ($errors->has('subjectExcel'))
                                               <span class="help-block">{{$errors->first('subjectExcel')}}</span>
                                           @endif
                                       </div>
                                   </div>
                                   <div class="col-md-4">
                                       <div class="form-group {{ $errors->has('subjectLeastExcel') ? ' has-error' : '' }}">
                                           <label class="control-label" for="subjectLeastExcel">Subject least excel with</label>
                                           <input type="text" class="form-control" name="subjectLeastExcel" id="subjectLeastExcel"  value="{{old('subjectLeastExcel')}}">
                                           @if ($errors->has('subjectLeastExcel'))
                                               <span class="help-block">{{$errors->first('subjectLeastExcel')}}</span>
                                           @endif
                                       </div>
                                   </div>
                                   <div class="col-md-4">
                                       <div class="form-group {{ $errors->has('awardsHonorsReceived') ? ' has-error' : '' }}">
                                           <label class="control-label" for="awardsHonorsReceived">Awards/Honors Received</label>
                                           <input type="text" class="form-control" name="awardsHonorsReceived" id="awardsHonorsReceived"  value="{{old('awardsHonorsReceived')}}">
                                           @if ($errors->has('awardsHonorsReceived'))
                                               <span class="help-block">{{$errors->first('awardsHonorsReceived')}}</span>
                                           @endif
                                       </div>
                                   </div>
                               </div>
                               @if($user->level == 'Grade 7' || $user->level == 'Grade 8' || $user->level == 'Grade 9' || $user->level == 'Grade 9' || $user->level == 'Grade 10' || $user->level == 'Grade 11' || $user->level == 'Grade 12' || $user->level == 'College')
                                   <div class="collegeShow grade1112Show grade710Show grade16Hide">
                                       <h5>Please indicate your course options according to your priority</h5>
                                       <div class="row">
                                           <div class="col-md-4">
                                               <div class="form-group {{ $errors->has('firstPriority') ? ' has-error' : '' }}">
                                                   <label class="control-label" for="firstPriority">First Priority</label>
                                                   <input type="text" class="form-control" name="firstPriority" id="firstPriority"  value="{{old('firstPriority')}}">
                                                   @if ($errors->has('firstPriority'))
                                                       <span class="help-block">{{$errors->first('firstPriority')}}</span>
                                                   @endif
                                               </div>
                                           </div>
                                           <div class="col-md-4">
                                               <div class="form-group {{ $errors->has('secondPriority') ? ' has-error' : '' }}">
                                                   <label class="control-label" for="secondPriority">Second Priority</label>
                                                   <input type="text" class="form-control" name="secondPriority" id="secondPriority"  value="{{old('secondPriority')}}">
                                                   @if ($errors->has('secondPriority'))
                                                       <span class="help-block">{{$errors->first('secondPriority')}}</span>
                                                   @endif
                                               </div>
                                           </div>
                                           <div class="col-md-4">
                                               <div class="form-group {{ $errors->has('thirdPriority') ? ' has-error' : '' }}">
                                                   <label class="control-label" for="thirdPriority">Third Priority</label>
                                                   <input type="text" class="form-control" name="thirdPriority" id="thirdPriority"  value="{{old('thirdPriority')}}">
                                                   @if ($errors->has('thirdPriority'))
                                                       <span class="help-block">{{$errors->first('thirdPriority')}}</span>
                                                   @endif
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   @endif
                           </div>
                       </div>
                       <!-- /.tab-content -->
                   </div>
               </div>
           </div>
           <div class="text-center">
               <button class="btn btn-lg btn-flat btn-primary center-block">Next</button>
           </div>
       </form>
    </section>
@endsection
