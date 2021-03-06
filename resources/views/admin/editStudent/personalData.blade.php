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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('status'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                {{session('status')}}
            </div>
        @endif
        <form action="{{route('adminUpdatePersonalData', ['id' => $user->id, 'personalDataId' => $userPersonalData->id])}}" method="POST">
            {{method_field('PUT')}}
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-12">
                    <!-- Custom Tabs -->
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li id="profileLink"><a href="#" data-toggle="tab">Profile</a></li>
                            <li class="active"><a href="#tab_1" data-toggle="tab">Personal Data</a></li>
                            <li id="familyBackgroundLink"><a href="#" data-toggle="tab">Family Background</a></li>
                            <li><a href="#" data-toggle="tab">Siblings</a></li>
                            <li><a href="#" data-toggle="tab">Educational Background</a></li>
                            <li><a href="#" data-toggle="tab">Structured Interview</a></li>
                            <li><a href="#" data-toggle="tab">Personality Test</a></li>
                            @if($user->exitInterviewTaken == 'true')
                                <li><a href="#" data-toggle="tab">Exit Interview</a></li>
                            @endif
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                                <h4>PERSONAL DATA</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('firstName') ? ' has-error' : '' }}">
                                            <label class="control-label" for="firstName">First Name</label>
                                            <input type="text" class="form-control" name="firstName" id="firstName"  value="{{$userPersonalData->firstName}}">
                                            @if ($errors->has('firstName'))
                                                <span class="help-block">{{$errors->first('firstName')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('middleName') ? ' has-error' : '' }}">
                                            <label class="control-label" for="middleName">Middle Name</label>
                                            <input type="text" class="form-control" name="middleName" id="middleName"  value="{{$userPersonalData->middleName}}">
                                            @if ($errors->has('middleName'))
                                                <span class="help-block">{{$errors->first('middleName')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('lastName') ? ' has-error' : '' }}">
                                            <label class="control-label" for="lastName">Last Name</label>
                                            <input type="text" class="form-control" name="lastName" id="lastName"  value="{{$userPersonalData->lastName}}">
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
                                            <input type="text" class="form-control pull-right" name="dateOfBirth" id="datepicker" value="{{$userPersonalData->dateOfBirth}}">
                                            @if ($errors->has('dateOfBirth'))
                                                <span class="help-block">{{$errors->first('dateOfBirth')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('placeOfBirth') ? ' has-error' : '' }}">
                                            <label class="control-label" for="placeOfBirth">Place of Birth</label>
                                            <input type="text" class="form-control" name="placeOfBirth" id="placeOfBirth"  value="{{$userPersonalData->placeOfBirth}}">
                                            @if ($errors->has('placeOfBirth'))
                                                <span class="help-block">{{$errors->first('placeOfBirth')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('age') ? ' has-error' : '' }}">
                                            <label class="control-label" for="age">Age</label>
                                            <input type="number" class="form-control" name="age" id="age"  value="{{$userPersonalData->age}}">
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
                                                <option @if ($userPersonalData->gender == 'Male') selected @endif>Male</option>
                                                <option @if ($userPersonalData->gender == 'Female') selected @endif>Female</option>
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
                                                <option @if ($userPersonalData->civilStatus == 'Single') selected @endif>Single</option>
                                                <option @if ($userPersonalData->civilStatus == 'Married') selected @endif>Married</option>
                                                <option @if ($userPersonalData->civilStatus == 'Separated') selected @endif>Separated</option>
                                                <option @if ($userPersonalData->civilStatus == 'Divorced') selected @endif>Divorced</option>
                                            </select>
                                            @if ($errors->has('civilStatus'))
                                                <span class="help-block">{{$errors->first('civilStatus')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group {{ $errors->has('nationality') ? ' has-error' : '' }}">
                                            <label class="control-label" for="nationality">Nationality</label>
                                            <input type="text" class="form-control" name="nationality" id="nationality"  value="{{$userPersonalData->nationality}}">
                                            @if ($errors->has('nationality'))
                                                <span class="help-block">{{$errors->first('nationality')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group {{ $errors->has('religion') ? ' has-error' : '' }}">
                                            <label class="control-label" for="religion">Religion</label>
                                            <input type="text" class="form-control" name="religion" id="religion"  value="{{$userPersonalData->religion}}">
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
                                            <input type="text" class="form-control" name="nameOfSpouse" id="nameOfSpouse"  value="{{$userPersonalData->nameOfSpouse}}">
                                            @if ($errors->has('nameOfSpouse'))
                                                <span class="help-block">{{$errors->first('nameOfSpouse')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('spouseOccupation') ? ' has-error' : '' }}">
                                            <label class="control-label" for="spouseOccupation">Spouse Occupation</label>
                                            <input type="text" class="form-control" name="spouseOccupation" id="spouseOccupation"  value="{{$userPersonalData->spouseOccupation}}">
                                            @if ($errors->has('spouseOccupation'))
                                                <span class="help-block">{{$errors->first('spouseOccupation')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('numberOfChildren') ? ' has-error' : '' }}">
                                            <label class="control-label" for="numberOfChildren">Number of Children</label>
                                            <input type="number" class="form-control" name="numberOfChildren" id="numberOfChildren"  value="{{$userPersonalData->numberOfChildren}}">
                                            @if ($errors->has('numberOfChildren'))
                                                <span class="help-block">{{$errors->first('numberOfChildren')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @if($user->level == 'Grade 7' || $user->level == 'Grade 8' || $user->level == 'Grade 9' || $user->level == 'Grade 9' || $user->level == 'Grade 10' || $user->level == 'Grade 11' || $user->level == 'Grade 12' || $user->level == 'College')
                                <div class="collegeShow grade1112Show grade710Show grade16Hide">
                                    <h5>Current Address</h5>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group {{ $errors->has('currentNumber') ? ' has-error' : '' }}">
                                                <label class="control-label" for="currentNumber">Number</label>
                                                <input type="text" class="form-control" name="currentNumber" id="currentNumber"  value="{{$userPersonalData->currentAddressNo}}">
                                                @if ($errors->has('currentNumber'))
                                                    <span class="help-block">{{$errors->first('currentNumber')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group {{ $errors->has('currentStreetZone') ? ' has-error' : '' }}">
                                                <label class="control-label" for="currentStreetZone">Street/Zone</label>
                                                <input type="text" class="form-control" name="currentStreetZone" id="currentStreetZone"  value="{{$userPersonalData->currentAddressStreet}}">
                                                @if ($errors->has('currentStreetZone'))
                                                    <span class="help-block">{{$errors->first('currentStreetZone')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group {{ $errors->has('currentMunicipality') ? ' has-error' : '' }}">
                                                <label class="control-label" for="currentMunicipality">Municipality</label>
                                                <input type="text" class="form-control" name="currentMunicipality" id="currentMunicipality"  value="{{$userPersonalData->currentAddressMun}}">
                                                @if ($errors->has('currentMunicipality'))
                                                    <span class="help-block">{{$errors->first('currentMunicipality')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group {{ $errors->has('currentProvince') ? ' has-error' : '' }}">
                                                <label class="control-label" for="currentProvince">Province</label>
                                                <input type="text" class="form-control" name="currentProvince" id="currentProvince"  value="{{$userPersonalData->currentAddressProv}}">
                                                @if ($errors->has('currentProvince'))
                                                    <span class="help-block">{{$errors->first('currentProvince')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <h5>Permanent Address</h5>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group {{ $errors->has('permanentNumber') ? ' has-error' : '' }}">
                                            <label class="control-label" for="permanentNumber">Number</label>
                                            <input type="text" class="form-control" name="permanentNumber" id="permanentNumber"  value="{{$userPersonalData->permanentAddressNo}}">
                                            @if ($errors->has('permanentNumber'))
                                                <span class="help-block">{{$errors->first('permanentNumber')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group {{ $errors->has('permanentStreetZone') ? ' has-error' : '' }}">
                                            <label class="control-label" for="permanentStreetZone">Street/Zone</label>
                                            <input type="text" class="form-control" name="permanentStreetZone" id="permanentStreetZone"  value="{{$userPersonalData->permanentAddressStreet}}">
                                            @if ($errors->has('permanentStreetZone'))
                                                <span class="help-block">{{$errors->first('permanentStreetZone')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group {{ $errors->has('permanentMunicipality') ? ' has-error' : '' }}">
                                            <label class="control-label" for="permanentMunicipality">Municipality</label>
                                            <input type="text" class="form-control" name="permanentMunicipality" id="permanentMunicipality"  value="{{$userPersonalData->permanentAddressMun}}">
                                            @if ($errors->has('permanentMunicipality'))
                                                <span class="help-block">{{$errors->first('permanentMunicipality')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group {{ $errors->has('permanentProvince') ? ' has-error' : '' }}">
                                            <label class="control-label" for="permanentProvince">Province</label>
                                            <input type="text" class="form-control" name="permanentProvince" id="permanentProvince"  value="{{$userPersonalData->permanentAddressProv}}">
                                            @if ($errors->has('permanentProvince'))
                                                <span class="help-block">{{$errors->first('permanentProvince')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <br>
                                @if($user->level == 'Grade 7' || $user->level == 'Grade 8' || $user->level == 'Grade 9' || $user->level == 'Grade 9' || $user->level == 'Grade 10' || $user->level == 'Grade 11' || $user->level == 'Grade 12' || $user->level == 'College')
                                <div class="collegeShow grade1112Show grade710Show grade16Hide">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group {{ $errors->has('landline') ? ' has-error' : '' }}">
                                                <label class="control-label" for="landline">Landline</label>
                                                <input type="text" class="form-control" name="landline" id="landline"  value="{{$userPersonalData->landline}}">
                                                @if ($errors->has('landline'))
                                                    <span class="help-block">{{$errors->first('landline')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group {{ $errors->has('cellphoneNumber') ? ' has-error' : '' }}">
                                                <label class="control-label" for="cellphoneNumber">Cell Phone Number</label>
                                                <input type="text" class="form-control" name="cellphoneNumber" id="cellphoneNumber"  value="{{$userPersonalData->cellPhoneNo}}">
                                                @if ($errors->has('cellphoneNumber'))
                                                    <span class="help-block">{{$errors->first('cellphoneNumber')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group {{ $errors->has('doYouWork') ? ' has-error' : '' }}">
                                                <label class="control-label" for="doYouWork">Do You Work?</label>
                                                <select class="form-control" name="doYouWork" id="doYouWork">
                                                    <option @if ($userPersonalData->doYouWork == 'No') selected @endif>No</option>
                                                    <option @if ($userPersonalData->doYouWork == 'Yes') selected @endif>Yes</option>
                                                </select>
                                                @if ($errors->has('doYouWork'))
                                                    <span class="help-block">{{$errors->first('doYouWork')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="row" id="firmDiv">
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('nameOfFirm') ? ' has-error' : '' }}">
                                            <label class="control-label" for="nameOfFirm">Name of Firm</label>
                                            <input type="text" class="form-control" name="nameOfFirm" id="nameOfFirm"  value="{{$userPersonalData->nameOfFirm}}">
                                            @if ($errors->has('nameOfFirm'))
                                                <span class="help-block">{{$errors->first('nameOfFirm')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('addressOfFirm') ? ' has-error' : '' }}">
                                            <label class="control-label" for="addressOfFirm">Address of Firm</label>
                                            <input type="text" class="form-control" name="addressOfFirm" id="addressOfFirm"  value="{{$userPersonalData->addressOfFirm}}">
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
                                            <input type="text" class="form-control" name="email" id="email" value="{{$user->email}}">
                                            @if ($errors->has('email'))
                                                <span class="help-block">{{$errors->first('email')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    @if($user->level == 'Grade 7' || $user->level == 'Grade 8' || $user->level == 'Grade 9' || $user->level == 'Grade 9' || $user->level == 'Grade 10' || $user->level == 'Grade 11' || $user->level == 'Grade 12' || $user->level == 'College')
                                    <div class="col-md-6 collegeShow grade1112Show grade710Show grade16Hide">
                                        <div class="form-group {{ $errors->has('whoSendsToSchool') ? ' has-error' : '' }}">
                                            <label class="control-label" for="whoSendsToSchool">Who Sends You to School?</label>
                                            <select class="form-control" name="whoSendsToSchool" id="whoSendsToSchool">
                                                <option @if ($userPersonalData->sendsToScholl == 'Self') selected @endif>Self</option>
                                                <option @if ($userPersonalData->sendsToScholl == 'Parents') selected @endif>Parents</option>
                                                <option @if ($userPersonalData->sendsToScholl == 'Others') selected @endif>Others</option>
                                            </select>
                                            @if ($errors->has('whoSendsToSchool'))
                                                <span class="help-block">{{$errors->first('whoSendsToSchool')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                        @endif
                                </div>
                                <div class="row" id="whoSendsToSchoolDiv">
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('whoSendsToSchoolName') ? ' has-error' : '' }}">
                                            <label class="control-label" for="whoSendsToSchoolName">Sender Name</label>
                                            <input type="text" class="form-control" name="whoSendsToSchoolName" id="whoSendsToSchoolName"  value="{{$userPersonalData->sendName}}">
                                            @if ($errors->has('whoSendsToSchoolName'))
                                                <span class="help-block">{{$errors->first('whoSendsToSchoolName')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('whoSendsToSchoolRel') ? ' has-error' : '' }}">
                                            <label class="control-label" for="whoSendsToSchoolRel">Sender Relationship</label>
                                            <input type="text" class="form-control" name="whoSendsToSchoolRel" id="whoSendsToSchoolRel"  value="{{$userPersonalData->sendRelation}}">
                                            @if ($errors->has('whoSendsToSchoolRel'))
                                                <span class="help-block">{{$errors->first('whoSendsToSchoolRel')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('whoSendsToSchoolOccu') ? ' has-error' : '' }}">
                                            <label class="control-label" for="whoSendsToSchoolOccu">Sender Occupation</label>
                                            <input type="text" class="form-control" name="whoSendsToSchoolOccu" id="whoSendsToSchoolOccu"  value="{{$userPersonalData->sendOccupation}}">
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
                                            <input type="text" class="form-control" name="authorizeName" id="authorizeName"  value="{{$userPersonalData->authName}}">
                                            @if ($errors->has('authorizeName'))
                                                <span class="help-block">{{$errors->first('authorizeName')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('authorizeRelationship') ? ' has-error' : '' }}">
                                            <label class="control-label" for="authorizeRelationship">Relationship</label>
                                            <input type="text" class="form-control" name="authorizeRelationship" id="authorizeRelationship"  value="{{$userPersonalData->authRelationship}}">
                                            @if ($errors->has('authorizeRelationship'))
                                                <span class="help-block">{{$errors->first('authorizeRelationship')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{ $errors->has('authorizeContactNumber') ? ' has-error' : '' }}">
                                            <label class="control-label" for="authorizeContactNumber">Contact Number</label>
                                            <input type="text" class="form-control" name="authorizeContactNumber" id="authorizeContactNumber"  value="{{$userPersonalData->authContact}}">
                                            @if ($errors->has('authorizeContactNumber'))
                                                <span class="help-block">{{$errors->first('authorizeContactNumber')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @if($user->level == 'Grade 7' || $user->level == 'Grade 8' || $user->level == 'Grade 9' || $user->level == 'Grade 9' || $user->level == 'Grade 10' || $user->level == 'Grade 11' || $user->level == 'Grade 12' || $user->level == 'College')
                                <div class="collegeShow grade1112Show grade710Show grade16Hide">
                                    <h6>Authorize Person Permanent Address</h6>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group {{ $errors->has('authPermNumber') ? ' has-error' : '' }}">
                                                <label class="control-label" for="authPermNumber">Number</label>
                                                <input type="text" class="form-control" name="authPermNumber" id="authPermNumber"  value="{{$userPersonalData->authPermanentNo}}">
                                                @if ($errors->has('authPermNumber'))
                                                    <span class="help-block">{{$errors->first('authPermNumber')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group {{ $errors->has('authPermStreetZone') ? ' has-error' : '' }}">
                                                <label class="control-label" for="authPermStreetZone">Street/Zone</label>
                                                <input type="text" class="form-control" name="authPermStreetZone" id="authPermStreetZone"  value="{{$userPersonalData->authPermanentStreet}}">
                                                @if ($errors->has('authPermStreetZone'))
                                                    <span class="help-block">{{$errors->first('authPermStreetZone')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group {{ $errors->has('authPermMunicipality') ? ' has-error' : '' }}">
                                                <label class="control-label" for="authPermMunicipality">Municipality</label>
                                                <input type="text" class="form-control" name="authPermMunicipality" id="authPermMunicipality"  value="{{$userPersonalData->authPermanentMun}}">
                                                @if ($errors->has('authPermMunicipality'))
                                                    <span class="help-block">{{$errors->first('authPermMunicipality')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group {{ $errors->has('authPermProvince') ? ' has-error' : '' }}">
                                                <label class="control-label" for="authPermProvince">Province</label>
                                                <input type="text" class="form-control" name="authPermProvince" id="authPermProvince"  value="{{$userPersonalData->authPermanentProv}}">
                                                @if ($errors->has('authPermProvince'))
                                                    <span class="help-block">{{$errors->first('authPermProvince')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group {{ $errors->has('talentsSkills') ? ' has-error' : '' }}">
                                            <label class="control-label" for="talentsSkills">Talents/Skills</label>
                                            <input type="text" class="form-control" name="talentsSkills" id="talentsSkills"  value="{{$userPersonalData->talents}}">
                                            @if ($errors->has('talentsSkills'))
                                                <span class="help-block">{{$errors->first('talentsSkills')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group {{ $errors->has('curricularActivity1') ? ' has-error' : '' }}">
                                            <label class="control-label" for="curricularActivity1">Co-Curricular Activity 1</label>
                                            <input type="text" class="form-control" name="curricularActivity1" id="curricularActivity1"  value="{{$userPersonalData->curricular1}}">
                                            @if ($errors->has('curricularActivity1'))
                                                <span class="help-block">{{$errors->first('curricularActivity1')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group {{ $errors->has('curricularActivity2') ? ' has-error' : '' }}">
                                            <label class="control-label" for="curricularActivity2">Co-Curricular Activity 2</label>
                                            <input type="text" class="form-control" name="curricularActivity2" id="curricularActivity2"  value="{{$userPersonalData->curricular2}}">
                                            @if ($errors->has('curricularActivity2'))
                                                <span class="help-block">{{$errors->first('curricularActivity2')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group {{ $errors->has('curricularActivity3') ? ' has-error' : '' }}">
                                            <label class="control-label" for="curricularActivity3">Co-Curricular Activity 3</label>
                                            <input type="text" class="form-control" name="curricularActivity3" id="curricularActivity3"  value="{{$userPersonalData->curricular3}}">
                                            @if ($errors->has('curricularActivity3'))
                                                <span class="help-block">{{$errors->first('curricularActivity3')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-content -->
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-lg btn-flat btn-primary center-block">Save</button>
                </div>
            </div>
        </form>
    </section>
@endsection
@section('scripts')
    <script>
        $( document ).ready(function() {
            //Civil status create page div
            if ($("#civilStatus").val() == "Married") {
                $("#marriedDiv").show();
            }
            else {
                $("#marriedDiv").hide();
            }
            $("#civilStatus").change(function()
            {
                var x = $("#civilStatus").val();
                if (x == 'Married')
                {
                    $("#marriedDiv").show();
                }
                else
                {
                    $("#marriedDiv").hide();
                }
            });

            //Show and hide firm div
            if ($('#doYouWork').val() == "Yes")
            {
                $("#firmDiv").show();
            }
            else
            {
                $("#firmDiv").hide();
            }
            $("#doYouWork").change(function() {
                var test = $(this).val();
                if (test == 'Yes') {
                    $("#firmDiv").show();
                }
                else{
                    $("#firmDiv").hide();
                }
            });

            //Show and hide who sends you to school div
            if ($('#whoSendsToSchool').val() == "Others")
            {
                $("#whoSendsToSchoolDiv").show();
            }
            else
            {
                $("#whoSendsToSchoolDiv").hide();
            }
            $("#whoSendsToSchool").change(function() {
                var test = $(this).val();
                if (test == 'Others') {
                    $("#whoSendsToSchoolDiv").show();
                }
                else{
                    $("#whoSendsToSchoolDiv").hide();
                }
            });
            $('#profileLink').click(function () {
                window.location.href = '{{route('adminEditProfile', ['id' => $user->id, 'personalDataId' => $userPersonalData->id])}}';
            });
            $('#familyBackgroundLink').click(function () {
                window.location.href = '{{route('adminEditFamilyBackground', ['id' => $user->id, 'familyBackgroundId' => $userPersonalData->id])}}';
            });
        });
    </script>
@endsection
