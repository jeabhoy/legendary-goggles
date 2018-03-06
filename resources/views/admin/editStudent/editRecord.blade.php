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
    Edit Student Record
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li>Manage Student</li>
    <li class="active">Edit Student Record</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <form action="{{route('adminEditRecordPut', ['id' => $array['id']])}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{method_field('PUT')}}
    <input type="hidden" value="{{$array['id']}}" name="hiddenID">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">STUDENT CUMMULATIVE RECORD</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-md-4">
                <!-- Profile Image -->
                <div class="box box-default">
                  <div class="box-body box-profile">
                    <img id="profilePicture" class="profile-user-img img-responsive img-circle" src="
                    @if (Auth::user()->avatar != 'defaultAvatar.png')
                      {{asset(Storage::url(Auth::user()->avatar))}}
                    @else
                      {{asset('img/defaultAvatar.png')}}
                    @endif
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
              <div class="col-md-8">
                <h5>First Term Enrolled</h5>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group {{ $errors->has('level') ? ' has-error' : '' }}">
                      <label class="control-label" for="level">Level</label>
                      <select class="form-control" name="level" id="level">
                        <option @if ($array['level'] == 'College') selected @endif>College</option>
                        <option @if ($array['level'] == 'Grade 12') selected @endif>Grade 12</option>
                        <option @if ($array['level'] == 'Grade 11') selected @endif>Grade 11</option>
                        <option @if ($array['level'] == 'Grade 10') selected @endif>Grade 10</option>
                        <option @if ($array['level'] == 'Grade 9') selected @endif>Grade 9</option>
                        <option @if ($array['level'] == 'Grade 8') selected @endif>Grade 8</option>
                        <option @if ($array['level'] == 'Grade 7') selected @endif>Grade 7</option>
                        <option @if ($array['level'] == 'Grade 6') selected @endif>Grade 6</option>
                        <option @if ($array['level'] == 'Grade 5') selected @endif>Grade 5</option>
                        <option @if ($array['level'] == 'Grade 4') selected @endif>Grade 4</option>
                        <option @if ($array['level'] == 'Grade 3') selected @endif>Grade 3</option>
                        <option @if ($array['level'] == 'Grade 2') selected @endif>Grade 2</option>
                        <option @if ($array['level'] == 'Grade 1') selected @endif>Grade 1</option>
                      </select>
                      @if ($errors->has('level'))
                        <span class="help-block">{{$errors->first('level')}}</span>
                      @endif
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group {{ $errors->has('id') ? ' has-error' : '' }}">
                      <label class="control-label" for="id">Student Number</label>
                      <input type="text" class="form-control" name="id" id="id"  value="{{$array['id']}}">
                      @if ($errors->has('id'))
                        <span class="help-block">{{$errors->first('id')}}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group {{ $errors->has('schoolYear') ? ' has-error' : '' }}">
                      <label class="control-label" for="schoolYear">School Year</label>
                      <input type="text" class="form-control" name="schoolYear" id="schoolYear" value="{{$array['schoolYear']}}">
                      @if ($errors->has('schoolYear'))
                        <span class="help-block">{{$errors->first('schoolYear')}}</span>
                      @endif
                    </div>
                  </div>
                  <div class="col-md-4 collegeShow grade1112Show grade710Hide grade16Hide">
                    <div class="form-group {{ $errors->has('semester') ? ' has-error' : '' }}">
                      <label class="control-label" for="semester">Semester</label>
                      <select class="form-control" name="semester" id="semester">
                        <option @if ($array['semester'] == 1) selected @endif>1</option>
                        <option @if ($array['semester'] == 2) selected @endif>2</option>
                      </select>
                      @if ($errors->has('semester'))
                        <span class="help-block">{{$errors->first('semester')}}</span>
                      @endif
                    </div>
                  </div>
                  <div class="col-md-4 collegeShow grade1112Hide grade710Hide grade16Hide">
                    <div class="form-group {{ $errors->has('course') ? ' has-error' : '' }}">
                      <label class="control-label" for="course">Course</label>
                      <input type="text" class="form-control" name="course" id="course"  value="{{$array['course']}}">
                      @if ($errors->has('course'))
                        <span class="help-block">{{$errors->first('course')}}</span>
                      @endif
                    </div>
                  </div>
                  <div class="col-md-4 collegeHide grade1112Show grade710Hide grade16Hide">
                    <div class="form-group {{ $errors->has('strand') ? ' has-error' : '' }}">
                      <label class="control-label" for="strand">Strand</label>
                      <input type="text" class="form-control" name="strand" id="strand"  value="{{$array['strand']}}">
                      @if ($errors->has('strand'))
                        <span class="help-block">{{$errors->first('strand')}}</span>
                      @endif
                    </div>
                  </div>
                  <div class="col-md-4 collegeHide grade1112Hide grade710Show grade16Hide">
                    <div class="form-group {{ $errors->has('year') ? ' has-error' : '' }}">
                      <label class="control-label" for="year">Year</label>
                      <input type="text" class="form-control" name="year" id="year"  value="{{$array['year']}}">
                      @if ($errors->has('year'))
                        <span class="help-block">{{$errors->first('year')}}</span>
                      @endif
                    </div>
                  </div>
                  <div class="col-md-4 collegeHide grade1112Hide grade710Show grade16Hide">
                    <div class="form-group {{ $errors->has('section') ? ' has-error' : '' }}">
                      <label class="control-label" for="section">Section</label>
                      <input type="text" class="form-control" name="section" id="section"  value="{{$array['section']}}">
                      @if ($errors->has('section'))
                        <span class="help-block">{{$errors->first('section')}}</span>
                      @endif
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
                      <label class="control-label" for="username">Username</label>
                      <input type="text" class="form-control" name="username" id="username" value="{{$array['username']}}">
                      @if ($errors->has('username'))
                        <span class="help-block">{{$errors->first('username')}}</span>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <h4>PERSONAL DATA</h4>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group {{ $errors->has('firstName') ? ' has-error' : '' }}">
                  <label class="control-label" for="firstName">First Name</label>
                  <input type="text" class="form-control" name="firstName" id="firstName"  value="{{$array['personal_data']['firstName']}}">
                  @if ($errors->has('firstName'))
                    <span class="help-block">{{$errors->first('firstName')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group {{ $errors->has('middleName') ? ' has-error' : '' }}">
                  <label class="control-label" for="middleName">Middle Name</label>
                  <input type="text" class="form-control" name="middleName" id="middleName"  value="{{$array['personal_data']['middleName']}}">
                  @if ($errors->has('middleName'))
                    <span class="help-block">{{$errors->first('middleName')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group {{ $errors->has('lastName') ? ' has-error' : '' }}">
                  <label class="control-label" for="lastName">Last Name</label>
                  <input type="text" class="form-control" name="lastName" id="lastName"  value="{{$array['personal_data']['lastName']}}">
                  @if ($errors->has('lastName'))
                    <span class="help-block">{{$errors->first('lastName')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group {{ $errors->has('dateOfBirth') ? ' has-error' : '' }}">
                  <label class="control-label" for="dateOfBirth">Date of Birth</label>
                  <input type="text" class="form-control pull-right" name="dateOfBirth" id="datepicker" value="{{$array['personal_data']['dateOfBirth']}}">
                  @if ($errors->has('dateOfBirth'))
                    <span class="help-block">{{$errors->first('dateOfBirth')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group {{ $errors->has('placeOfBirth') ? ' has-error' : '' }}">
                  <label class="control-label" for="placeOfBirth">Place of Birth</label>
                  <input type="text" class="form-control" name="placeOfBirth" id="placeOfBirth"  value="{{$array['personal_data']['placeOfBirth']}}">
                  @if ($errors->has('placeOfBirth'))
                    <span class="help-block">{{$errors->first('placeOfBirth')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group {{ $errors->has('age') ? ' has-error' : '' }}">
                  <label class="control-label" for="age">Age</label>
                  <input type="number" class="form-control" name="age" id="age"  value="{{$array['personal_data']['age']}}">
                  @if ($errors->has('age'))
                    <span class="help-block">{{$errors->first('age')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
                  <label class="control-label" for="gender">Gender</label>
                  <select class="form-control" name="gender" id="gender">
                    <option @if ($array['personal_data']['gender'] == 'Male') selected @endif>Male</option>
                    <option @if ($array['personal_data']['gender'] == 'Female') selected @endif>Female</option>
                  </select>
                  @if ($errors->has('gender'))
                    <span class="help-block">{{$errors->first('gender')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-3 collegeShow grade1112Show grade710Show grade16Hide">
                <div class="form-group {{ $errors->has('civilStatus') ? ' has-error' : '' }}">
                  <label class="control-label" for="civilStatus">Civil Status</label>
                  <select class="form-control" name="civilStatus" id="civilStatus">
                    <option @if ($array['personal_data']['civilStatus'] == 'Single') selected @endif>Single</option>
                    <option @if ($array['personal_data']['civilStatus'] == 'Married') selected @endif>Married</option>
                    <option @if ($array['personal_data']['civilStatus'] == 'Separated') selected @endif>Separated</option>
                    <option @if ($array['personal_data']['civilStatus'] == 'Divorced') selected @endif>Divorced</option>
                  </select>
                  @if ($errors->has('civilStatus'))
                    <span class="help-block">{{$errors->first('civilStatus')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group {{ $errors->has('nationality') ? ' has-error' : '' }}">
                  <label class="control-label" for="nationality">Nationality</label>
                  <input type="text" class="form-control" name="nationality" id="nationality"  value="{{$array['personal_data']['nationality']}}">
                  @if ($errors->has('nationality'))
                    <span class="help-block">{{$errors->first('nationality')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group {{ $errors->has('religion') ? ' has-error' : '' }}">
                  <label class="control-label" for="religion">Religion</label>
                  <input type="text" class="form-control" name="religion" id="religion"  value="{{$array['personal_data']['religion']}}">
                  @if ($errors->has('religion'))
                    <span class="help-block">{{$errors->first('religion')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row" id="marriedDiv">
              <div class="col-md-4">
                <div class="form-group {{ $errors->has('nameOfSpouse') ? ' has-error' : '' }}">
                  <label class="control-label" for="nameOfSpouse">Name of Spouse</label>
                  <input type="text" class="form-control" name="nameOfSpouse" id="nameOfSpouse"  value="{{$array['personal_data']['nameOfSpouse']}}">
                  @if ($errors->has('nameOfSpouse'))
                    <span class="help-block">{{$errors->first('nameOfSpouse')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group {{ $errors->has('spouseOccupation') ? ' has-error' : '' }}">
                  <label class="control-label" for="spouseOccupation">Spouse Occupation</label>
                  <input type="text" class="form-control" name="spouseOccupation" id="spouseOccupation"  value="{{$array['personal_data']['spouseOccupation']}}">
                  @if ($errors->has('spouseOccupation'))
                    <span class="help-block">{{$errors->first('spouseOccupation')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group {{ $errors->has('numberOfChildren') ? ' has-error' : '' }}">
                  <label class="control-label" for="numberOfChildren">Number of Children</label>
                  <input type="number" class="form-control" name="numberOfChildren" id="numberOfChildren"  value="{{$array['personal_data']['numberOfChildren']}}">
                  @if ($errors->has('numberOfChildren'))
                    <span class="help-block">{{$errors->first('numberOfChildren')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="collegeShow grade1112Show grade710Show grade16Hide">
              <h5>Current Address</h5>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group {{ $errors->has('currentNumber') ? ' has-error' : '' }}">
                    <label class="control-label" for="currentNumber">Number</label>
                    <input type="text" class="form-control" name="currentNumber" id="currentNumber"  value="{{$array['personal_data']['currentAddressNo']}}">
                    @if ($errors->has('currentNumber'))
                      <span class="help-block">{{$errors->first('currentNumber')}}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group {{ $errors->has('currentStreetZone') ? ' has-error' : '' }}">
                    <label class="control-label" for="currentStreetZone">Street/Zone</label>
                    <input type="text" class="form-control" name="currentStreetZone" id="currentStreetZone"  value="{{$array['personal_data']['currentAddressStreet']}}">
                    @if ($errors->has('currentStreetZone'))
                      <span class="help-block">{{$errors->first('currentStreetZone')}}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group {{ $errors->has('currentMunicipality') ? ' has-error' : '' }}">
                    <label class="control-label" for="currentMunicipality">Municipality</label>
                    <input type="text" class="form-control" name="currentMunicipality" id="currentMunicipality"  value="{{$array['personal_data']['currentAddressMun']}}">
                    @if ($errors->has('currentMunicipality'))
                      <span class="help-block">{{$errors->first('currentMunicipality')}}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group {{ $errors->has('currentProvince') ? ' has-error' : '' }}">
                    <label class="control-label" for="currentProvince">Province</label>
                    <input type="text" class="form-control" name="currentProvince" id="currentProvince"  value="{{$array['personal_data']['currentAddressProv']}}">
                    @if ($errors->has('currentProvince'))
                      <span class="help-block">{{$errors->first('currentProvince')}}</span>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <h5>Permanent Address</h5>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group {{ $errors->has('permanentNumber') ? ' has-error' : '' }}">
                  <label class="control-label" for="permanentNumber">Number</label>
                  <input type="text" class="form-control" name="permanentNumber" id="permanentNumber"  value="{{$array['personal_data']['permanentAddressNo']}}">
                  @if ($errors->has('permanentNumber'))
                    <span class="help-block">{{$errors->first('permanentNumber')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group {{ $errors->has('permanentStreetZone') ? ' has-error' : '' }}">
                  <label class="control-label" for="permanentStreetZone">Street/Zone</label>
                  <input type="text" class="form-control" name="permanentStreetZone" id="permanentStreetZone"  value="{{$array['personal_data']['permanentAddressStreet']}}">
                  @if ($errors->has('permanentStreetZone'))
                    <span class="help-block">{{$errors->first('permanentStreetZone')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group {{ $errors->has('permanentMunicipality') ? ' has-error' : '' }}">
                  <label class="control-label" for="permanentMunicipality">Municipality</label>
                  <input type="text" class="form-control" name="permanentMunicipality" id="permanentMunicipality"  value="{{$array['personal_data']['permanentAddressMun']}}">
                  @if ($errors->has('permanentMunicipality'))
                    <span class="help-block">{{$errors->first('permanentMunicipality')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group {{ $errors->has('permanentProvince') ? ' has-error' : '' }}">
                  <label class="control-label" for="permanentProvince">Province</label>
                  <input type="text" class="form-control" name="permanentProvince" id="permanentProvince"  value="{{$array['personal_data']['permanentAddressMun']}}">
                  @if ($errors->has('permanentProvince'))
                    <span class="help-block">{{$errors->first('permanentProvince')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <br>
            <div class="collegeShow grade1112Show grade710Show grade16Hide">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group {{ $errors->has('landline') ? ' has-error' : '' }}">
                    <label class="control-label" for="landline">Landline</label>
                    <input type="text" class="form-control" name="landline" id="landline"  value="{{$array['personal_data']['landline']}}">
                    @if ($errors->has('landline'))
                      <span class="help-block">{{$errors->first('landline')}}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group {{ $errors->has('cellphoneNumber') ? ' has-error' : '' }}">
                    <label class="control-label" for="cellphoneNumber">Cell Phone Number</label>
                    <input type="text" class="form-control" name="cellphoneNumber" id="cellphoneNumber"  value="{{$array['personal_data']['cellPhoneNo']}}">
                    @if ($errors->has('cellphoneNumber'))
                      <span class="help-block">{{$errors->first('cellphoneNumber')}}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group {{ $errors->has('doYouWork') ? ' has-error' : '' }}">
                    <label class="control-label" for="doYouWork">Do You Work?</label>
                    <select class="form-control" name="doYouWork" id="doYouWork">
                      <option @if ($array['personal_data']['doYouWork'] == 'No') selected @endif>No</option>
                      <option @if ($array['personal_data']['doYouWork'] == 'Yes') selected @endif>Yes</option>
                    </select>
                    @if ($errors->has('doYouWork'))
                      <span class="help-block">{{$errors->first('doYouWork')}}</span>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <div class="row" id="firmDiv">
              <div class="col-md-6">
                <div class="form-group {{ $errors->has('nameOfFirm') ? ' has-error' : '' }}">
                  <label class="control-label" for="nameOfFirm">Name of Firm</label>
                  <input type="text" class="form-control" name="nameOfFirm" id="nameOfFirm"  value="{{$array['personal_data']['nameOfFirm']}}">
                  @if ($errors->has('nameOfFirm'))
                    <span class="help-block">{{$errors->first('nameOfFirm')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group {{ $errors->has('addressOfFirm') ? ' has-error' : '' }}">
                  <label class="control-label" for="addressOfFirm">Address of Firm</label>
                  <input type="text" class="form-control" name="addressOfFirm" id="addressOfFirm"  value="{{$array['personal_data']['addressOfFirm']}}">
                  @if ($errors->has('addressOfFirm'))
                    <span class="help-block">{{$errors->first('addressOfFirm')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                  <label class="control-label" for="email">Email</label>
                  <input type="text" class="form-control" name="email" id="email" value="{{$array['email']}}">
                  @if ($errors->has('email'))
                    <span class="help-block">{{$errors->first('email')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-6 collegeShow grade1112Show grade710Show grade16Hide">
                <div class="form-group {{ $errors->has('whoSendsToSchool') ? ' has-error' : '' }}">
                  <label class="control-label" for="whoSendsToSchool">Who Sends You to School?</label>
                  <select class="form-control" name="whoSendsToSchool" id="whoSendsToSchool">
                    <option @if ($array['personal_data']['sendsToSchool'] == 'Self') selected @endif>Self</option>
                    <option @if ($array['personal_data']['sendsToSchool'] == 'Parents') selected @endif>Parents</option>
                    <option @if ($array['personal_data']['sendsToSchool'] == 'Others') selected @endif>Others</option>
                  </select>
                  @if ($errors->has('whoSendsToSchool'))
                    <span class="help-block">{{$errors->first('whoSendsToSchool')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row" id="whoSendsToSchoolDiv">
              <div class="col-md-4">
                <div class="form-group {{ $errors->has('whoSendsToSchoolName') ? ' has-error' : '' }}">
                  <label class="control-label" for="whoSendsToSchoolName">Sender Name</label>
                  <input type="text" class="form-control" name="whoSendsToSchoolName" id="whoSendsToSchoolName"  value="{{$array['personal_data']['sendName']}}">
                  @if ($errors->has('whoSendsToSchoolName'))
                    <span class="help-block">{{$errors->first('whoSendsToSchoolName')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group {{ $errors->has('whoSendsToSchoolRel') ? ' has-error' : '' }}">
                  <label class="control-label" for="whoSendsToSchoolRel">Sender Relationship</label>
                  <input type="text" class="form-control" name="whoSendsToSchoolRel" id="whoSendsToSchoolRel"  value="{{$array['personal_data']['sendRelation']}}">
                  @if ($errors->has('whoSendsToSchoolRel'))
                    <span class="help-block">{{$errors->first('whoSendsToSchoolRel')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group {{ $errors->has('whoSendsToSchoolOccu') ? ' has-error' : '' }}">
                  <label class="control-label" for="whoSendsToSchoolOccu">Sender Occupation</label>
                  <input type="text" class="form-control" name="whoSendsToSchoolOccu" id="whoSendsToSchoolOccu"  value="{{$array['personal_data']['sendOccupation']}}">
                  @if ($errors->has('whoSendsToSchoolOccu'))
                    <span class="help-block">{{$errors->first('whoSendsToSchoolOccu')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <h5>Authorize person to contact in case of emergency/conference(if parents are unavailable).</h5>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group {{ $errors->has('authorizeName') ? ' has-error' : '' }}">
                  <label class="control-label" for="authorizeName">Name</label>
                  <input type="text" class="form-control" name="authorizeName" id="authorizeName"  value="{{$array['personal_data']['authName']}}">
                  @if ($errors->has('authorizeName'))
                    <span class="help-block">{{$errors->first('authorizeName')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group {{ $errors->has('authorizeRelationship') ? ' has-error' : '' }}">
                  <label class="control-label" for="authorizeRelationship">Relationship</label>
                  <input type="text" class="form-control" name="authorizeRelationship" id="authorizeRelationship"  value="{{$array['personal_data']['authRelationship']}}">
                  @if ($errors->has('authorizeRelationship'))
                    <span class="help-block">{{$errors->first('authorizeRelationship')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group {{ $errors->has('authorizeContactNumber') ? ' has-error' : '' }}">
                  <label class="control-label" for="authorizeContactNumber">Contact Number</label>
                  <input type="text" class="form-control" name="authorizeContactNumber" id="authorizeContactNumber"  value="{{$array['personal_data']['authContact']}}">
                  @if ($errors->has('authorizeContactNumber'))
                    <span class="help-block">{{$errors->first('authorizeContactNumber')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="collegeShow grade1112Show grade710Show grade16Hide">
              <h6>Authorize Person Permanent Address</h6>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group {{ $errors->has('authPermNumber') ? ' has-error' : '' }}">
                    <label class="control-label" for="authPermNumber">Number</label>
                    <input type="text" class="form-control" name="authPermNumber" id="authPermNumber"  value="{{$array['personal_data']['authPermanentNo']}}">
                    @if ($errors->has('authPermNumber'))
                      <span class="help-block">{{$errors->first('authPermNumber')}}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group {{ $errors->has('authPermStreetZone') ? ' has-error' : '' }}">
                    <label class="control-label" for="authPermStreetZone">Street/Zone</label>
                    <input type="text" class="form-control" name="authPermStreetZone" id="authPermStreetZone"  value="{{$array['personal_data']['authPermanentStreet']}}">
                    @if ($errors->has('authPermStreetZone'))
                      <span class="help-block">{{$errors->first('authPermStreetZone')}}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group {{ $errors->has('authPermMunicipality') ? ' has-error' : '' }}">
                    <label class="control-label" for="authPermMunicipality">Municipality</label>
                    <input type="text" class="form-control" name="authPermMunicipality" id="authPermMunicipality"  value="{{$array['personal_data']['authPermanentMun']}}">
                    @if ($errors->has('authPermMunicipality'))
                      <span class="help-block">{{$errors->first('authPermMunicipality')}}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group {{ $errors->has('authPermProvince') ? ' has-error' : '' }}">
                    <label class="control-label" for="authPermProvince">Province</label>
                    <input type="text" class="form-control" name="authPermProvince" id="authPermProvince"  value="{{$array['personal_data']['authPermanentProv']}}">
                    @if ($errors->has('authPermProvince'))
                      <span class="help-block">{{$errors->first('authPermProvince')}}</span>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group {{ $errors->has('talentsSkills') ? ' has-error' : '' }}">
                  <label class="control-label" for="talentsSkills">Talents/Skills</label>
                  <input type="text" class="form-control" name="talentsSkills" id="talentsSkills"  value="{{$array['personal_data']['talents']}}">
                  @if ($errors->has('talentsSkills'))
                    <span class="help-block">{{$errors->first('talentsSkills')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group {{ $errors->has('curricularActivity1') ? ' has-error' : '' }}">
                  <label class="control-label" for="curricularActivity1">Co-Curricular Activity 1</label>
                  <input type="text" class="form-control" name="curricularActivity1" id="curricularActivity1"  value="{{$array['personal_data']['curricular1']}}">
                  @if ($errors->has('curricularActivity1'))
                    <span class="help-block">{{$errors->first('curricularActivity1')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group {{ $errors->has('curricularActivity2') ? ' has-error' : '' }}">
                  <label class="control-label" for="curricularActivity2">Co-Curricular Activity 2</label>
                  <input type="text" class="form-control" name="curricularActivity2" id="curricularActivity2"  value="{{$array['personal_data']['curricular2']}}">
                  @if ($errors->has('curricularActivity2'))
                    <span class="help-block">{{$errors->first('curricularActivity2')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group {{ $errors->has('curricularActivity3') ? ' has-error' : '' }}">
                  <label class="control-label" for="curricularActivity3">Co-Curricular Activity 3</label>
                  <input type="text" class="form-control" name="curricularActivity3" id="curricularActivity3"  value="{{$array['personal_data']['curricular3']}}">
                  @if ($errors->has('curricularActivity3'))
                    <span class="help-block">{{$errors->first('curricularActivity3')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <h4>FAMILY BACKGROUND</h4>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group {{ $errors->has('fatherName') ? ' has-error' : '' }}">
                  <label class="control-label" for="fatherName">Father's Name</label>
                  <input type="text" class="form-control" name="fatherName" id="fatherName"  value="{{$array['family_background']['fatherName']}}">
                  @if ($errors->has('fatherName'))
                    <span class="help-block">{{$errors->first('fatherName')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label></label>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="fatherDeceased" id="fatherDeceased" @if($array['family_background']['fatherDeceased'] == 'True') checked @endif value="True">
                      Check if deceased
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" id="fatherDeceasedDiv">
              <div class="col-md-6">
                <div class="form-group {{ $errors->has('fatherOccupation') ? ' has-error' : '' }}">
                  <label class="control-label" for="fatherOccupation">Father Occupation</label>
                  <input type="text" class="form-control" name="fatherOccupation" id="fatherOccupation"  value="{{$array['family_background']['fatherOccupation']}}">
                  @if ($errors->has('fatherOccupation'))
                    <span class="help-block">{{$errors->first('fatherOccupation')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group {{ $errors->has('fatherContactNumber') ? ' has-error' : '' }}">
                  <label class="control-label" for="fatherContactNumber">Father Contact Number</label>
                  <input type="text" class="form-control" name="fatherContactNumber" id="fatherContactNumber"  value="{{$array['family_background']['fatherContactNo']}}">
                  @if ($errors->has('fatherContactNumber'))
                    <span class="help-block">{{$errors->first('fatherContactNumber')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group {{ $errors->has('motherName') ? ' has-error' : '' }}">
                  <label class="control-label" for="motherName">Mother's Name</label>
                  <input type="text" class="form-control" name="motherName" id="motherName"  value="{{$array['family_background']['motherName']}}">
                  @if ($errors->has('motherName'))
                    <span class="help-block">{{$errors->first('motherName')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label></label>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="motherDeceased" id="motherDeceased" @if($array['family_background']['motherDeceased'] == 'True')  checked @endif value="True">
                      Check if deceased
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" id="motherDeceasedDiv">
              <div class="col-md-6">
                <div class="form-group {{ $errors->has('motherOccupation') ? ' has-error' : '' }}">
                  <label class="control-label" for="motherOccupation">Mother Occupation</label>
                  <input type="text" class="form-control" name="motherOccupation" id="motherOccupation"  value="{{$array['family_background']['motherOccupation']}}">
                  @if ($errors->has('motherOccupation'))
                    <span class="help-block">{{$errors->first('motherOccupation')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group {{ $errors->has('motherContactNumber') ? ' has-error' : '' }}">
                  <label class="control-label" for="motherContactNumber">Mother Contact Number</label>
                  <input type="text" class="form-control" name="motherContactNumber" id="motherContactNumber"  value="{{$array['family_background']['motherContactNo']}}">
                  @if ($errors->has('motherContactNumber'))
                    <span class="help-block">{{$errors->first('motherContactNumber')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <h5>Siblings</h5>
            <div class="table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Name</th>
                  <th>Age</th>
                  <th>Educational Level</th>
                </tr>
                <tr>
                  <td>
                    <div class="form-group {{ $errors->has('sibling1Name') ? ' has-error' : '' }}">
                      <input type="text" class="form-control" name="sibling1Name" id="sibling1Name"  value="{{$array['family_background']['sibling1']}}">
                      @if ($errors->has('sibling1Name'))
                        <span class="help-block">{{$errors->first('sibling1Name')}}</span>
                      @endif
                    </div>
                  </td>
                  <td>
                    <div class="form-group {{ $errors->has('sibling1Age') ? ' has-error' : '' }}">
                      <input type="number" class="form-control" name="sibling1Age" id="sibling1Age"  value="{{$array['family_background']['sibling1Age']}}">
                      @if ($errors->has('sibling1Age'))
                        <span class="help-block">{{$errors->first('sibling1Age')}}</span>
                      @endif
                    </div>
                  </td>
                  <td>
                    <div class="form-group {{ $errors->has('sibling1EducationalLevel') ? ' has-error' : '' }}">
                      <input type="text" class="form-control" name="sibling1EducationalLevel" id="sibling1EducationalLevel"  value="{{$array['family_background']['sibling1EducationLevel']}}">
                      @if ($errors->has('sibling1EducationalLevel'))
                        <span class="help-block">{{$errors->first('sibling1EducationalLevel')}}</span>
                      @endif
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-group {{ $errors->has('sibling2Name') ? ' has-error' : '' }}">
                      <input type="text" class="form-control" name="sibling2Name" id="sibling2Name"  value="{{$array['family_background']['sibling2']}}">
                      @if ($errors->has('sibling2Name'))
                        <span class="help-block">{{$errors->first('sibling2Name')}}</span>
                      @endif
                    </div>
                  </td>
                  <td>
                    <div class="form-group {{ $errors->has('sibling2Age') ? ' has-error' : '' }}">
                      <input type="number" class="form-control" name="sibling2Age" id="sibling2Age"  value="{{$array['family_background']['sibling2Age']}}">
                      @if ($errors->has('sibling2Age'))
                        <span class="help-block">{{$errors->first('sibling2Age')}}</span>
                      @endif
                    </div>
                  </td>
                  <td>
                    <div class="form-group {{ $errors->has('sibling2EducationalLevel') ? ' has-error' : '' }}">
                      <input type="text" class="form-control" name="sibling2EducationalLevel" id="sibling2EducationalLevel"  value="{{$array['family_background']['sibling2EducationLevel']}}">
                      @if ($errors->has('sibling2EducationalLevel'))
                        <span class="help-block">{{$errors->first('sibling2EducationalLevel')}}</span>
                      @endif
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-group {{ $errors->has('sibling3Name') ? ' has-error' : '' }}">
                      <input type="text" class="form-control" name="sibling3Name" id="sibling3Name"  value="{{$array['family_background']['sibling3']}}">
                      @if ($errors->has('sibling3Name'))
                        <span class="help-block">{{$errors->first('sibling3Name')}}</span>
                      @endif
                    </div>
                  </td>
                  <td>
                    <div class="form-group {{ $errors->has('sibling3Age') ? ' has-error' : '' }}">
                      <input type="number" class="form-control" name="sibling3Age" id="sibling3Age"  value="{{$array['family_background']['sibling3Age']}}">
                      @if ($errors->has('sibling3Age'))
                        <span class="help-block">{{$errors->first('sibling3Age')}}</span>
                      @endif
                    </div>
                  </td>
                  <td>
                    <div class="form-group {{ $errors->has('sibling3EducationalLevel') ? ' has-error' : '' }}">
                      <input type="text" class="form-control" name="sibling3EducationalLevel" id="sibling3EducationalLevel"  value="{{$array['family_background']['sibling3EducationLevel']}}">
                      @if ($errors->has('sibling3EducationalLevel'))
                        <span class="help-block">{{$errors->first('sibling3EducationalLevel')}}</span>
                      @endif
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-group {{ $errors->has('sibling4Name') ? ' has-error' : '' }}">
                      <input type="text" class="form-control" name="sibling4Name" id="sibling4Name"  value="{{$array['family_background']['sibling4']}}">
                      @if ($errors->has('sibling4Name'))
                        <span class="help-block">{{$errors->first('sibling4Name')}}</span>
                      @endif
                    </div>
                  </td>
                  <td>
                    <div class="form-group {{ $errors->has('sibling4Age') ? ' has-error' : '' }}">
                      <input type="number" class="form-control" name="sibling4Age" id="sibling4Age"  value="{{$array['family_background']['sibling4Age']}}">
                      @if ($errors->has('sibling4Age'))
                        <span class="help-block">{{$errors->first('sibling4Age')}}</span>
                      @endif
                    </div>
                  </td>
                  <td>
                    <div class="form-group {{ $errors->has('sibling4EducationalLevel') ? ' has-error' : '' }}">
                      <input type="text" class="form-control" name="sibling4EducationalLevel" id="sibling4EducationalLevel"  value="{{$array['family_background']['sibling4EducationLevel']}}">
                      @if ($errors->has('sibling4EducationalLevel'))
                        <span class="help-block">{{$errors->first('sibling4EducationalLevel')}}</span>
                      @endif
                    </div>
                  </td>
                </tr>
              </table>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group {{ $errors->has('physicalProblems') ? ' has-error' : '' }}">
                  <label class="control-label" for="physicalProblems">Physical Problem</label>
                  <input type="text" class="form-control" name="physicalProblems" id="physicalProblems"  value="{{$array['family_background']['physicalProblems']}}">
                  @if ($errors->has('physicalProblems'))
                    <span class="help-block">{{$errors->first('physicalProblems')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group {{ $errors->has('allergies') ? ' has-error' : '' }}">
                  <label class="control-label" for="allergies">Allergies</label>
                  <input type="text" class="form-control" name="allergies" id="allergies"  value="{{$array['family_background']['allergies']}}">
                  @if ($errors->has('allergies'))
                    <span class="help-block">{{$errors->first('allergies')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group {{ $errors->has('treatmentSought') ? ' has-error' : '' }}">
                  <label class="control-label" for="treatmentSought">Treatment Sought</label>
                  <input type="text" class="form-control" name="treatmentSought" id="treatmentSought"  value="{{$array['family_background']['treatmentSought']}}">
                  @if ($errors->has('treatmentSought'))
                    <span class="help-block">{{$errors->first('treatmentSought')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group {{ $errors->has('medicineTaken') ? ' has-error' : '' }}">
                  <label class="control-label" for="medicineTaken">Medicine Taken, if any</label>
                  <input type="text" class="form-control" name="medicineTaken" id="medicineTaken"  value="{{$array['family_background']['medicineTaken']}}">
                  @if ($errors->has('medicineTaken'))
                    <span class="help-block">{{$errors->first('medicineTaken')}}</span>
                  @endif
                </div>
              </div>
            </div>
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
                      <input type="text" class="form-control" name="elementaryNameSchool" id="elementaryNameSchool"  value="{{$array['educational_background']['elemNameOfSchool']}}">
                      @if ($errors->has('elementaryNameSchool'))
                        <span class="help-block">{{$errors->first('elementaryNameSchool')}}</span>
                      @endif
                    </div>
                  </td>
                  <td>
                    <div class="form-group {{ $errors->has('elementaryAddressSchool') ? ' has-error' : '' }}">
                      <input type="text" class="form-control" name="elementaryAddressSchool" id="elementaryAddressSchool"  value="{{$array['educational_background']['elemAddressOfSchool']}}">
                      @if ($errors->has('elementaryAddressSchool'))
                        <span class="help-block">{{$errors->first('elementaryAddressSchool')}}</span>
                      @endif
                    </div>
                  </td>
                  <td>
                    <div class="form-group {{ $errors->has('elementaryYearsAttendance') ? ' has-error' : '' }}">
                      <input type="text" class="form-control" name="elementaryYearsAttendance" id="elementaryYearsAttendance"  value="{{$array['educational_background']['elemYearsOfAttendance']}}">
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
                      <input type="text" class="form-control" name="highSchoolNameSchool" id="highSchoolNameSchool"  value="{{$array['educational_background']['highNameOfSchool']}}">
                      @if ($errors->has('highSchoolNameSchool'))
                        <span class="help-block">{{$errors->first('highSchoolNameSchool')}}</span>
                      @endif
                    </div>
                  </td>
                  <td>
                    <div class="form-group {{ $errors->has('highSchoolAddressSchool') ? ' has-error' : '' }}">
                      <input type="text" class="form-control" name="highSchoolAddressSchool" id="highSchoolAddressSchool"  value="{{$array['educational_background']['highAddressOfSchool']}}">
                      @if ($errors->has('highSchoolAddressSchool'))
                        <span class="help-block">{{$errors->first('highSchoolAddressSchool')}}</span>
                      @endif
                    </div>
                  </td>
                  <td>
                    <div class="form-group {{ $errors->has('highSchoolYearsAttendance') ? ' has-error' : '' }}">
                      <input type="text" class="form-control" name="highSchoolYearsAttendance" id="highSchoolYearsAttendance"  value="{{$array['educational_background']['highYearsOfAttendance']}}">
                      @if ($errors->has('highSchoolYearsAttendance'))
                        <span class="help-block">{{$errors->first('highSchoolYearsAttendance')}}</span>
                      @endif
                    </div>
                  </td>
                </tr>
                <tr class="collegeShow grade1112Show grade710Show grade16Hide">
                  <td>
                    College
                  </td>
                  <td>
                    <div class="form-group {{ $errors->has('collegeNameSchool') ? ' has-error' : '' }}">
                      <input type="text" class="form-control" name="collegeNameSchool" id="collegeNameSchool"  value="{{$array['educational_background']['collegeNameOfSchool']}}">
                      @if ($errors->has('collegeNameSchool'))
                        <span class="help-block">{{$errors->first('collegeNameSchool')}}</span>
                      @endif
                    </div>
                  </td>
                  <td>
                    <div class="form-group {{ $errors->has('collegeAddressSchool') ? ' has-error' : '' }}">
                      <input type="text" class="form-control" name="collegeAddressSchool" id="collegeAddressSchool"  value="{{$array['educational_background']['collegeAddressOfSchool']}}">
                      @if ($errors->has('collegeAddressSchool'))
                        <span class="help-block">{{$errors->first('collegeAddressSchool')}}</span>
                      @endif
                    </div>
                  </td>
                  <td>
                    <div class="form-group {{ $errors->has('collegeYearsAttendance') ? ' has-error' : '' }}">
                      <input type="text" class="form-control" name="collegeYearsAttendance" id="collegeYearsAttendance"  value="{{$array['educational_background']['collegeYearsOfAttendance']}}">
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
                      <input type="text" class="form-control" name="graduateVocationalNameSchool" id="graduateVocationalNameSchool"  value="{{$array['educational_background']['gradNameOfSchool']}}">
                      @if ($errors->has('graduateVocationalNameSchool'))
                        <span class="help-block">{{$errors->first('graduateVocationalNameSchool')}}</span>
                      @endif
                    </div>
                  </td>
                  <td>
                    <div class="form-group {{ $errors->has('graduateVocationalAddressSchool') ? ' has-error' : '' }}">
                      <input type="text" class="form-control" name="graduateVocationalAddressSchool" id="graduateVocationalAddressSchool"  value="{{$array['educational_background']['gradAddressOfSchool']}}">
                      @if ($errors->has('graduateVocationalAddressSchool'))
                        <span class="help-block">{{$errors->first('graduateVocationalAddressSchool')}}</span>
                      @endif
                    </div>
                  </td>
                  <td>
                    <div class="form-group {{ $errors->has('graduateVocationalYearsAttendance') ? ' has-error' : '' }}">
                      <input type="text" class="form-control" name="graduateVocationalYearsAttendance" id="graduateVocationalYearsAttendance"  value="{{$array['educational_background']['gradYearsOfAttendance']}}">
                      @if ($errors->has('graduateVocationalYearsAttendance'))
                        <span class="help-block">{{$errors->first('graduateVocationalYearsAttendance')}}</span>
                      @endif
                    </div>
                  </td>
                </tr>
              </table>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group {{ $errors->has('subjectExcel') ? ' has-error' : '' }}">
                  <label class="control-label" for="subjectExcel">Subject you excel the most</label>
                  <input type="text" class="form-control" name="subjectExcel" id="subjectExcel"  value="{{$array['educational_background']['subjectExcel']}}">
                  @if ($errors->has('subjectExcel'))
                    <span class="help-block">{{$errors->first('subjectExcel')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group {{ $errors->has('subjectLeastExcel') ? ' has-error' : '' }}">
                  <label class="control-label" for="subjectLeastExcel">Subject least excel with</label>
                  <input type="text" class="form-control" name="subjectLeastExcel" id="subjectLeastExcel"  value="{{$array['educational_background']['subjectLeast']}}">
                  @if ($errors->has('subjectLeastExcel'))
                    <span class="help-block">{{$errors->first('subjectLeastExcel')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group {{ $errors->has('awardsHonorsRecieved') ? ' has-error' : '' }}">
                  <label class="control-label" for="awardsHonorsRecieved">Awards/Honors Received</label>
                  <input type="text" class="form-control" name="awardsHonorsRecieved" id="awardsHonorsRecieved"  value="{{$array['educational_background']['awardsReceived']}}">
                  @if ($errors->has('awardsHonorsRecieved'))
                    <span class="help-block">{{$errors->first('awardsHonorsRecieved')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="collegeShow grade1112Show grade710Show grade16Hide">
              <h5>Please indicate your course options according to your priority</h5>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group {{ $errors->has('firstPriority') ? ' has-error' : '' }}">
                    <label class="control-label" for="firstPriority">First Priority</label>
                    <input type="text" class="form-control" name="firstPriority" id="firstPriority"  value="{{$array['educational_background']['firstPriority']}}">
                    @if ($errors->has('firstPriority'))
                      <span class="help-block">{{$errors->first('firstPriority')}}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group {{ $errors->has('secondPriority') ? ' has-error' : '' }}">
                    <label class="control-label" for="secondPriority">Second Priority</label>
                    <input type="text" class="form-control" name="secondPriority" id="secondPriority"  value="{{$array['educational_background']['secondPriority']}}">
                    @if ($errors->has('secondPriority'))
                      <span class="help-block">{{$errors->first('secondPriority')}}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group {{ $errors->has('thirdPriority') ? ' has-error' : '' }}">
                    <label class="control-label" for="thirdPriority">Third Priority</label>
                    <input type="text" class="form-control" name="thirdPriority" id="thirdPriority"  value="{{$array['educational_background']['thirdPriority']}}">
                    @if ($errors->has('thirdPriority'))
                      <span class="help-block">{{$errors->first('thirdPriority')}}</span>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">STRUCTURED INTERVIEW</h3>
          </div>
          <div class="box-body">
            <div class="collegeShow grade1112Show grade710Show grade16Hide">
              <h4>Personal</h4>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group {{ $errors->has('characteristics') ? ' has-error' : '' }}">
                    <label class="control-label" for="characteristics">Give one positive and negative characteristics that describe you best.</label>
                    <input type="text" class="form-control" name="characteristics" id="characteristics"  value="{{$array['interview']['characteristics']}}">
                    @if ($errors->has('characteristics'))
                      <span class="help-block">{{$errors->first('characteristics')}}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group {{ $errors->has('concern') ? ' has-error' : '' }}">
                    <label class="control-label" for="concern">What concerns you the most?</label>
                    <input type="text" class="form-control" name="concern" id="concern"  value="{{$array['interview']['concern']}}">
                    @if ($errors->has('concern'))
                      <span class="help-block">{{$errors->first('concern')}}</span>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <h4>Interpersonal</h4>
            <div class="collegeShow grade1112Show grade710Show grade16Hide">
              <h5>How well do you get along with the following?</h5>
              <div class="row">
                <div class="col-md-2 col-md-offset-1">
                  <div class="form-group {{ $errors->has('fatherInterpersonal') ? ' has-error' : '' }}">
                    <label class="control-label" for="fatherInterpersonal">Father</label>
                    <select class="form-control" name="fatherInterpersonal" id="fatherInterpersonal">
                      <option @if ($array['interview']['fatherInter'] == 'Very Well') selected @endif>Very Well</option>
                      <option @if ($array['interview']['fatherInter'] == 'Frequently Well') selected @endif>Frequently Well</option>
                      <option @if ($array['interview']['fatherInter'] == 'Seldom to be Well') selected @endif>Seldom to be Well</option>
                      <option @if ($array['interview']['fatherInter'] == 'Poor') selected @endif>Poor</option>
                    </select>
                    @if ($errors->has('fatherInterpersonal'))
                      <span class="help-block">{{$errors->first('fatherInterpersonal')}}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group {{ $errors->has('motherInterpersonal') ? ' has-error' : '' }}">
                    <label class="control-label" for="motherInterpersonal">Mother</label>
                    <select class="form-control" name="motherInterpersonal" id="motherInterpersonal">
                      <option @if ($array['interview']['motherInter'] == 'Very Well') selected @endif>Very Well</option>
                      <option @if ($array['interview']['motherInter'] == 'Frequently Well') selected @endif>Frequently Well</option>
                      <option @if ($array['interview']['motherInter'] == 'Seldom to be Well') selected @endif>Seldom to be Well</option>
                      <option @if ($array['interview']['motherInter'] == 'Poor') selected @endif>Poor</option>
                    </select>
                    @if ($errors->has('motherInterpersonal'))
                      <span class="help-block">{{$errors->first('motherInterpersonal')}}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group {{ $errors->has('siblingsInterpersonal') ? ' has-error' : '' }}">
                    <label class="control-label" for="siblingsInterpersonal">Siblings</label>
                    <select class="form-control" name="siblingsInterpersonal" id="siblingsInterpersonal">
                      <option @if ($array['interview']['siblingsInter'] == 'Very Well') selected @endif>Very Well</option>
                      <option @if ($array['interview']['siblingsInter'] == 'Frequently Well') selected @endif>Frequently Well</option>
                      <option @if ($array['interview']['siblingsInter'] == 'Seldom to be Well') selected @endif>Seldom to be Well</option>
                      <option @if ($array['interview']['siblingsInter'] == 'Poor') selected @endif>Poor</option>
                    </select>
                    @if ($errors->has('siblingsInterpersonal'))
                      <span class="help-block">{{$errors->first('siblingsInterpersonal')}}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group {{ $errors->has('relativesInterpersonal') ? ' has-error' : '' }}">
                    <label class="control-label" for="relativesInterpersonal">Relatives</label>
                    <select class="form-control" name="relativesInterpersonal" id="relativesInterpersonal">
                      <option @if ($array['interview']['relativesInter'] == 'Very Well') selected @endif>Very Well</option>
                      <option @if ($array['interview']['relativesInter'] == 'Frequently Well') selected @endif>Frequently Well</option>
                      <option @if ($array['interview']['relativesInter'] == 'Seldom to be Well') selected @endif>Seldom to be Well</option>
                      <option @if ($array['interview']['relativesInter'] == 'Poor') selected @endif>Poor</option>
                    </select>
                    @if ($errors->has('relativesInterpersonal'))
                      <span class="help-block">{{$errors->first('relativesInterpersonal')}}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group {{ $errors->has('friendsInterpersonal') ? ' has-error' : '' }}">
                    <label class="control-label" for="friendsInterpersonal">Friends</label>
                    <select class="form-control" name="friendsInterpersonal" id="friendsInterpersonal">
                      <option @if ($array['interview']['friendsInter'] == 'Very Well') selected @endif>Very Well</option>
                      <option @if ($array['interview']['friendsInter'] == 'Frequently Well') selected @endif>Frequently Well</option>
                      <option @if ($array['interview']['friendsInter'] == 'Seldom to be Well') selected @endif>Seldom to be Well</option>
                      <option @if ($array['interview']['friendsInter'] == 'Poor') selected @endif>Poor</option>
                    </select>
                    @if ($errors->has('friendsInterpersonal'))
                      <span class="help-block">{{$errors->first('friendsInterpersonal')}}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-1">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <div class="form-group {{ $errors->has('describeFather') ? ' has-error' : '' }}">
                  <label class="control-label" for="describeFather">Describe your Father</label>
                  <textarea class="form-control" rows="5" name="describeFather" id="describeFather">{{$array['interview']['describeFather']}}</textarea>
                  @if ($errors->has('describeFather'))
                    <span class="help-block">{{$errors->first('describeFather')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <div class="form-group {{ $errors->has('describeMother') ? ' has-error' : '' }}">
                  <label class="control-label" for="describeMother">Describe your Mother</label>
                  <textarea class="form-control" rows="5" name="describeMother" id="describeMother">{{$array['interview']['describeMother']}}</textarea>
                  @if ($errors->has('describeMother'))
                    <span class="help-block">{{$errors->first('describeMother')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <div class="form-group {{ $errors->has('describeFamily') ? ' has-error' : '' }}">
                  <label class="control-label" for="describeFamily">Describe your Family</label>
                  <textarea class="form-control" rows="5" name="describeFamily" id="describeFamily">{{$array['interview']['describeFamily']}}</textarea>
                  @if ($errors->has('describeFamily'))
                    <span class="help-block">{{$errors->first('describeFamily')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <h4>ACADEMIC</h4>
            <h5>
              Please select one item below which you find to be your strength and select one item which you consider to be your weakness in terms of academic.
            </h5>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group {{ $errors->has('strength') ? ' has-error' : ''}}">
                  <label class="control-label" for="strength">Strength</label>
                  <select class="form-control" name="strength" id="strength">
                    <option @if ($array['interview']['radioStrength'] == 'Understand lesson well') selected @endif id="strength1">Understand lesson well</option>
                    <option @if ($array['interview']['radioStrength'] == 'Find time to finish assignment') selected @endif id="strength2">Find time to finish assignment</option>
                    <option @if ($array['interview']['radioStrength'] == 'Work with classmates') selected @endif id="strength3">Work with classmates</option>
                    <option @if ($array['interview']['radioStrength'] == 'Develop confidence in discussion') selected @endif id="strength4">Develop confidence in discussion</option>
                    <option @if ($array['interview']['radioStrength'] == 'Balance between leisure and studies') selected @endif id="strength5">Balance between leisure and studies</option>
                  </select>
                  @if ($errors->has('strength'))
                    <span class="help-block">{{$errors->first('strength')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group {{ $errors->has('weakness') ? ' has-error' : '' }}">
                  <label class="control-label" for="weakness">Weakness</label>
                  <select class="form-control" name="weakness" id="weakness">
                    <option @if ($array['interview']['radioWeakness'] == 'Understand lesson well') selected @endif id="weakness1">Understand lesson well</option>
                    <option @if ($array['interview']['radioWeakness'] == 'Find time to finish assignment') selected @endif id="weakness2">Find time to finish assignment</option>
                    <option @if ($array['interview']['radioWeakness'] == 'Work with classmates') selected @endif id="weakness3">Work with classmates</option>
                    <option @if ($array['interview']['radioWeakness'] == 'Develop confidence in discussion') selected @endif id="weakness4">Develop confidence in discussion</option>
                    <option @if ($array['interview']['radioWeakness'] == 'Balance between leisure and studies') selected @endif id="weakness5">Balance between leisure and studies</option>
                  </select>
                  @if ($errors->has('weakness'))
                    <span class="help-block">{{$errors->first('weakness')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="collegeShow grade1112Show grade710Show grade16Hide">
              <h5>
                What made you decide to enroll in Panpacific University North Philippines?
              </h5>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group {{ $errors->has('decideToEnroll') ? ' has-error' : '' }}">
                    <label class="control-label" for="decideToEnroll"></label>
                    <select class="form-control" name="decideToEnroll" id="decideToEnroll">
                      <option @if ($array['interview']['decideEnroll'] == 'Distance of School') selected @endif>Distance of School</option>
                      <option @if ($array['interview']['decideEnroll'] == 'Parents') selected @endif>Parents</option>
                      <option @if ($array['interview']['decideEnroll'] == 'Friends') selected @endif>Friends</option>
                      <option @if ($array['interview']['decideEnroll'] == 'Competent Instructor') selected @endif>Competent Instructor</option>
                      <option @if ($array['interview']['decideEnroll'] == 'Facilities') selected @endif>Facilities</option>
                      <option @if ($array['interview']['decideEnroll'] == 'Marketing') selected @endif>Marketing</option>
                      <option @if ($array['interview']['decideEnroll'] == 'Scholarship Grant') selected @endif>Scholarship Grant</option>
                      <option @if ($array['interview']['decideEnroll'] == 'Others') selected @endif>Others</option>
                    </select>
                    @if ($errors->has('decideToEnroll'))
                      <span class="help-block">{{$errors->first('decideToEnroll')}}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group {{ $errors->has('decideToEnrollOthers') ? ' has-error' : '' }}">
                    <label class="control-label" for="decideToEnrollOthers"></label>
                    <input type="text" class="form-control" name="decideToEnrollOthers" id="decideToEnrollOthers"  value="{{$array['interview']['otherDecide']}}" disabled>
                    @if ($errors->has('decideToEnrollOthers'))
                      <span class="help-block">{{$errors->first('decideToEnrollOthers')}}</span>
                    @endif
                  </div>
                </div>
              </div>
              <h5>
                What factor influenced you to take the course you enrolled?
              </h5>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group {{ $errors->has('factorInfluenced') ? ' has-error' : '' }}">
                    <label class="control-label" for="factorInfluenced"></label>
                    <select class="form-control" name="factorInfluenced" id="factorInfluenced">
                      <option @if ($array['interview']['factorInfluenced'] == 'Friends') selected @endif>Friends</option>
                      <option @if ($array['interview']['factorInfluenced'] == 'Parents') selected @endif>Parents</option>
                      <option @if ($array['interview']['factorInfluenced'] == 'Relative') selected @endif>Relative</option>
                      <option @if ($array['interview']['factorInfluenced'] == 'Financial Status') selected @endif>Financial Status</option>
                      <option @if ($array['interview']['factorInfluenced'] == 'Employability') selected @endif>Employability</option>
                      <option @if ($array['interview']['factorInfluenced'] == 'In line with the ability/interest') selected @endif>In line with the ability/interest</option>
                      <option @if ($array['interview']['factorInfluenced'] == 'Others') selected @endif>Others</option>
                    </select>
                    @if ($errors->has('factorInfluenced'))
                      <span class="help-block">{{$errors->first('factorInfluenced')}}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group {{ $errors->has('factorInfluencedOthers') ? ' has-error' : '' }}">
                    <label class="control-label" for="factorInfluencedOthers"></label>
                    <input type="text" class="form-control" name="factorInfluencedOthers" id="factorInfluencedOthers"  value="{{$array['interview']['otherFactor']}}" disabled>
                    @if ($errors->has('factorInfluencedOthers'))
                      <span class="help-block">{{$errors->first('factorInfluencedOthers')}}</span>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">TEST</h3>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            Test Here
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <div class="text-center">
          <button class="btn btn-lg btn-flat btn-primary center-block">Save</button>
        </div>
      </div>
    </div>
  </form>
</section>
@endsection
@section('scripts')
  <!-- bootstrap datepicker -->
  <script src="{{asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('js/admin/createRecord.js')}}"></script>
@endsection
