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
            FAMILY BACKGROUND
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Manage Student</li>
            <li class="active">Create Student Record</li>
            <li class="active">Family Background</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <form action="{{route('adminStoreStudentFamilyBackground', ['id' => $user->id])}}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-12">
                    <!-- Custom Tabs -->
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="disabled"><a href="#" data-toggle="tab">Profile</a></li>
                            <li class="disabled"><a href="#" data-toggle="tab">Personal Data</a></li>
                            <li class="active"><a href="#tab_1" data-toggle="tab">Family Background</a></li>
                            <li class="disabled"><a href="#" data-toggle="tab">Siblings</a></li>
                            <li class="disabled"><a href="#" data-toggle="tab">Educational Background</a></li>
                            <li class="disabled"><a href="#" data-toggle="tab">Structured Interview</a></li>
                            <li class="disabled"><a href="#" data-toggle="tab">Personality Test</a></li>
                            @if($user->level == 'College' && $user->exitInterviewTaken == 'false')
                                <li class="disabled"><a href="#" data-toggle="tab">Exit Interview</a></li>
                            @endif
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                                <h4>FAMILY BACKGROUND</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('fatherName') ? ' has-error' : '' }}">
                                            <label class="control-label" for="fatherName">Father's Name</label>
                                            <input type="text" class="form-control" name="fatherName" id="fatherName"  value="{{old('fatherName')}}">
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
                                                    <input type="checkbox" name="fatherDeceased" id="fatherDeceased" {{ old('fatherDeceased') ? 'checked' : '' }} value="True">
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
                                            <input type="text" class="form-control" name="fatherOccupation" id="fatherOccupation"  value="{{old('fatherOccupation')}}">
                                            @if ($errors->has('fatherOccupation'))
                                                <span class="help-block">{{$errors->first('fatherOccupation')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('fatherContactNumber') ? ' has-error' : '' }}">
                                            <label class="control-label" for="fatherContactNumber">Father Contact Number</label>
                                            <input type="text" class="form-control" name="fatherContactNumber" id="fatherContactNumber"  value="{{old('fatherContactNumber')}}">
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
                                            <input type="text" class="form-control" name="motherName" id="motherName"  value="{{old('motherName')}}">
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
                                                    <input type="checkbox" name="motherDeceased" id="motherDeceased" {{ old('motherDeceased') ? 'checked' : '' }} value="True">
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
                                            <input type="text" class="form-control" name="motherOccupation" id="motherOccupation"  value="{{old('motherOccupation')}}">
                                            @if ($errors->has('motherOccupation'))
                                                <span class="help-block">{{$errors->first('motherOccupation')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('motherContactNumber') ? ' has-error' : '' }}">
                                            <label class="control-label" for="motherContactNumber">Mother Contact Number</label>
                                            <input type="text" class="form-control" name="motherContactNumber" id="motherContactNumber"  value="{{old('motherContactNumber')}}">
                                            @if ($errors->has('motherContactNumber'))
                                                <span class="help-block">{{$errors->first('motherContactNumber')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('physicalProblems') ? ' has-error' : '' }}">
                                            <label class="control-label" for="physicalProblems">Physical Problem</label>
                                            <input type="text" class="form-control" name="physicalProblems" id="physicalProblems"  value="{{old('physicalProblems')}}">
                                            @if ($errors->has('physicalProblems'))
                                                <span class="help-block">{{$errors->first('physicalProblems')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('allergies') ? ' has-error' : '' }}">
                                            <label class="control-label" for="allergies">Allergies</label>
                                            <input type="text" class="form-control" name="allergies" id="allergies"  value="{{old('allergies')}}">
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
                                            <input type="text" class="form-control" name="treatmentSought" id="treatmentSought"  value="{{old('treatmentSought')}}">
                                            @if ($errors->has('treatmentSought'))
                                                <span class="help-block">{{$errors->first('treatmentSought')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('medicineTaken') ? ' has-error' : '' }}">
                                            <label class="control-label" for="medicineTaken">Medicine Taken, if any</label>
                                            <input type="text" class="form-control" name="medicineTaken" id="medicineTaken"  value="{{old('medicineTaken')}}">
                                            @if ($errors->has('medicineTaken'))
                                                <span class="help-block">{{$errors->first('medicineTaken')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
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
@section('scripts')
    <script>
        $(document).ready(function () {
            //Show and hide father deceased div
            if ($("#fatherDeceased").is(':checked')) {
                $("#fatherDeceasedDiv").hide();
            }
            else{
                $("#fatherDeceasedDiv").show();
            }
            $("#fatherDeceased").click(function() {
                if ($(this).is(':checked')) {
                    $("#fatherDeceasedDiv").hide();
                }
                else{
                    $("#fatherDeceasedDiv").show();
                }
            });

            //Show and hide mother deceased div
            if ($("#motherDeceased").is(':checked')) {
                $("#motherDeceasedDiv").hide();
            }
            else{
                $("#motherDeceasedDiv").show();
            }
            $("#motherDeceased").click(function() {
                if ($(this).is(':checked')) {
                    $("#motherDeceasedDiv").hide();
                }
                else{
                    $("#motherDeceasedDiv").show();
                }
            });
        });
    </script>
@endsection