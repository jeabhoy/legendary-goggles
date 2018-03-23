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
            PROFILE
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Manage Student</li>
            <li class="active">Create Student Record</li>
            <li class="active">Personality Test</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <form action="{{route('adminStoreStudentPersonalityTest', ['id' => $user->id])}}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-12">
                    <!-- Custom Tabs -->
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="disabled"><a href="#" data-toggle="tab">Profile</a></li>
                            <li class="disabled"><a href="#" data-toggle="tab">Personal Data</a></li>
                            <li class="disabled"><a href="#" data-toggle="tab">Family Background</a></li>
                            <li class="disabled"><a href="#" data-toggle="tab">Siblings</a></li>
                            <li class="disabled"><a href="#" data-toggle="tab">Educational Background</a></li>
                            <li class="disabled"><a href="#" data-toggle="tab">Structured Interview</a></li>
                            <li class="active"><a href="#tab_1" data-toggle="tab">Personality Test</a></li>
                            @if($user->level == 'College' && $user->exitInterviewTaken == 'false')
                                <li class="disabled"><a href="#" data-toggle="tab">Exit Interview</a></li>
                            @endif
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                                <table class="table table-bordered table-responsive">
                                    <tr>
                                        <th class="text-center">Section 1</th>
                                        <th class="text-center">Section 2</th>
                                        <th class="text-center">Section 3</th>
                                        <th class="text-center">Section 4</th>
                                    </tr>
                                    <tr>
                                        <td>
                                           <div class="row">
                                               <div class="col-xs-6">
                                                   <div class="form-group {{ $errors->has('section1Row1') ? ' has-error' : '' }}">
                                                       <select class="form-control" name="section1Row1" id="section1Row1">
                                                           <option @if (old('section1Row1') == '---') selected @endif>---</option>
                                                           <option @if (old('section1Row1') == '1') selected @endif>1</option>
                                                           <option @if (old('section1Row1') == '2') selected @endif>2</option>
                                                           <option @if (old('section1Row1') == '3') selected @endif>3</option>
                                                           <option @if (old('section1Row1') == '4') selected @endif>4</option>
                                                           <option @if (old('section1Row1') == '5') selected @endif>5</option>
                                                       </select>
                                                       @if ($errors->has('section1Row1'))
                                                           <span class="help-block">{{$errors->first('section1Row1')}}</span>
                                                       @endif
                                                   </div>
                                               </div>
                                               <div class="col-xs-6">
                                                   emotional
                                               </div>
                                           </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row1') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row1" id="section2Row1">
                                                            <option @if (old('section2Row1') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row1') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row1') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row1') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row1') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row1') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row1'))
                                                            <span class="help-block">{{$errors->first('section2Row1')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    optimistic
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row1') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row1" id="section3Row1">
                                                            <option @if (old('section3Row1') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row1') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row1') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row1') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row1') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row1') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row1'))
                                                            <span class="help-block">{{$errors->first('section3Row1')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    deep feeling
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row1') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row1" id="section4Row1">
                                                            <option @if (old('section4Row1') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row1') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row1') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row1') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row1') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row1') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row1'))
                                                            <span class="help-block">{{$errors->first('section4Row1')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    very quiet
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row2') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row2" id="section1Row2">
                                                            <option @if (old('section1Row2') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row2') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row2') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row2') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row2') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row2') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row2'))
                                                            <span class="help-block">{{$errors->first('section1Row2')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    egotistical
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row2') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row2" id="section2Row2">
                                                            <option @if (old('section2Row2') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row2') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row2') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row2') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row2') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row2') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row2'))
                                                            <span class="help-block">{{$errors->first('section2Row2')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    determined
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row2') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row2" id="section3Row2">
                                                            <option @if (old('section3Row2') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row2') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row2') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row2') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row2') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row2') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row2'))
                                                            <span class="help-block">{{$errors->first('section3Row2')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    critical
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row2') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row2" id="section4Row2">
                                                            <option @if (old('section4Row2') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row2') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row2') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row2') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row2') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row2') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row2'))
                                                            <span class="help-block">{{$errors->first('section4Row2')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    selfish
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row3') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row3" id="section1Row3">
                                                            <option @if (old('section1Row3') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row3') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row3') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row3') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row3') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row3') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row3'))
                                                            <span class="help-block">{{$errors->first('section1Row3')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    interrupts others
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row3') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row3" id="section2Row3">
                                                            <option @if (old('section2Row3') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row3') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row3') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row3') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row3') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row3') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row3'))
                                                            <span class="help-block">{{$errors->first('section2Row3')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    bossy
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row3') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row3" id="section3Row3">
                                                            <option @if (old('section3Row3') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row3') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row3') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row3') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row3') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row3') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row3'))
                                                            <span class="help-block">{{$errors->first('section3Row3')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    insecure
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row3') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row3" id="section4Row3">
                                                            <option @if (old('section4Row3') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row3') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row3') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row3') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row3') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row3') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row3'))
                                                            <span class="help-block">{{$errors->first('section4Row3')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    unenthusiastic
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row4') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row4" id="section1Row4">
                                                            <option @if (old('section1Row4') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row4') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row4') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row4') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row4') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row4') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row4'))
                                                            <span class="help-block">{{$errors->first('section1Row4')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    compassionate
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row4') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row4" id="section2Row4">
                                                            <option @if (old('section2Row4') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row4') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row4') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row4') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row4') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row4') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row4'))
                                                            <span class="help-block">{{$errors->first('section2Row4')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    goal-oriented
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row4') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row4" id="section3Row4">
                                                            <option @if (old('section3Row4') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row4') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row4') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row4') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row4') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row4') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row4'))
                                                            <span class="help-block">{{$errors->first('section3Row4')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    sensitive
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row4') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row4" id="section4Row4">
                                                            <option @if (old('section4Row4') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row4') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row4') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row4') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row4') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row4') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row4'))
                                                            <span class="help-block">{{$errors->first('section4Row4')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    negative
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row5') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row5" id="section1Row5">
                                                            <option @if (old('section1Row5') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row5') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row5') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row5') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row5') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row5') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row5'))
                                                            <span class="help-block">{{$errors->first('section1Row5')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    impulsive
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row5') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row5" id="section2Row5">
                                                            <option @if (old('section2Row5') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row5') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row5') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row5') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row5') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row5') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row5'))
                                                            <span class="help-block">{{$errors->first('section2Row5')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    decisive
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row5') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row5" id="section3Row5">
                                                            <option @if (old('section3Row5') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row5') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row5') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row5') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row5') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row5') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row5'))
                                                            <span class="help-block">{{$errors->first('section3Row5')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    indecisive
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row5') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row5" id="section4Row5">
                                                            <option @if (old('section4Row5') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row5') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row5') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row5') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row5') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row5') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row5'))
                                                            <span class="help-block">{{$errors->first('section4Row5')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    regular daily habits
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row6') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row6" id="section1Row6">
                                                            <option @if (old('section1Row6') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row6') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row6') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row6') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row6') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row6') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row6'))
                                                            <span class="help-block">{{$errors->first('section1Row6')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    disorganized
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row6') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row6" id="section2Row6">
                                                            <option @if (old('section2Row6') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row6') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row6') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row6') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row6') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row6') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row6'))
                                                            <span class="help-block">{{$errors->first('section2Row6')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    frank
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row6') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row6" id="section3Row6">
                                                            <option @if (old('section3Row6') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row6') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row6') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row6') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row6') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row6') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row6'))
                                                            <span class="help-block">{{$errors->first('section3Row6')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    hard to please
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row6') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row6" id="section4Row6">
                                                            <option @if (old('section4Row6') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row6') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row6') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row6') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row6') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row6') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row6'))
                                                            <span class="help-block">{{$errors->first('section4Row6')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    hesitant
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row7') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row7" id="section1Row7">
                                                            <option @if (old('section1Row7') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row7') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row7') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row7') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row7') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row7') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row7'))
                                                            <span class="help-block">{{$errors->first('section1Row7')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    impractical
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row7') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row7" id="section2Row7">
                                                            <option @if (old('section2Row7') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row7') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row7') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row7') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row7') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row7') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row7'))
                                                            <span class="help-block">{{$errors->first('section2Row7')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    self-confident
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row7') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row7" id="section3Row7">
                                                            <option @if (old('section3Row7') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row7') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row7') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row7') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row7') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row7') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row7'))
                                                            <span class="help-block">{{$errors->first('section3Row7')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    self-centered
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row7') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row7" id="section4Row7">
                                                            <option @if (old('section4Row7') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row7') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row7') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row7') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row7') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row7') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row7'))
                                                            <span class="help-block">{{$errors->first('section4Row7')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    shy
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row8') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row8" id="section1Row8">
                                                            <option @if (old('section1Row8') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row8') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row8') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row8') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row8') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row8') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row8'))
                                                            <span class="help-block">{{$errors->first('section1Row8')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    funny
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row8') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row8" id="section2Row8">
                                                            <option @if (old('section2Row8') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row8') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row8') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row8') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row8') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row8') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row8'))
                                                            <span class="help-block">{{$errors->first('section2Row8')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    sarcastic
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row8') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row8" id="section3Row8">
                                                            <option @if (old('section3Row8') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row8') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row8') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row8') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row8') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row8') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row8'))
                                                            <span class="help-block">{{$errors->first('section3Row8')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    pessimistic
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row8') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row8" id="section4Row8">
                                                            <option @if (old('section4Row8') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row8') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row8') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row8') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row8') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row8') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row8'))
                                                            <span class="help-block">{{$errors->first('section4Row8')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    stingy
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row9') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row9" id="section1Row9">
                                                            <option @if (old('section1Row9') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row9') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row9') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row9') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row9') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row9') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row9'))
                                                            <span class="help-block">{{$errors->first('section1Row9')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    forgetful
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row9') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row9" id="section2Row9">
                                                            <option @if (old('section2Row9') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row9') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row9') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row9') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row9') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row9') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row9'))
                                                            <span class="help-block">{{$errors->first('section2Row9')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    workaholic
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row9') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row9" id="section3Row9">
                                                            <option @if (old('section3Row9') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row9') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row9') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row9') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row9') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row9') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row9'))
                                                            <span class="help-block">{{$errors->first('section3Row9')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    depressed easily
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row9') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row9" id="section4Row9">
                                                            <option @if (old('section4Row9') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row9') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row9') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row9') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row9') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row9') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row9'))
                                                            <span class="help-block">{{$errors->first('section4Row9')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    aimless
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row10') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row10" id="section1Row10">
                                                            <option @if (old('section1Row10') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row10') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row10') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row10') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row10') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row10') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row10'))
                                                            <span class="help-block">{{$errors->first('section1Row10')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    easily discouraged
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row10') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row10" id="section2Row10">
                                                            <option @if (old('section2Row10') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row10') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row10') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row10') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row10') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row10') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row10'))
                                                            <span class="help-block">{{$errors->first('section2Row10')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    self-sufficient
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row10') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row10" id="section3Row10">
                                                            <option @if (old('section3Row10') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row10') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row10') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row10') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row10') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row10') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row10'))
                                                            <span class="help-block">{{$errors->first('section3Row10')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    easily offended
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row10') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row10" id="section4Row10">
                                                            <option @if (old('section4Row10') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row10') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row10') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row10') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row10') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row10') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row10'))
                                                            <span class="help-block">{{$errors->first('section4Row10')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    not aggresive
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row11') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row11" id="section1Row11">
                                                            <option @if (old('section1Row11') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row11') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row11') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row11') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row11') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row11') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row11'))
                                                            <span class="help-block">{{$errors->first('section1Row11')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    very positive
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row11') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row11" id="section2Row11">
                                                            <option @if (old('section2Row11') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row11') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row11') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row11') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row11') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row11') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row11'))
                                                            <span class="help-block">{{$errors->first('section2Row11')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    practical
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row11') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row11" id="section3Row11">
                                                            <option @if (old('section3Row11') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row11') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row11') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row11') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row11') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row11') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row11'))
                                                            <span class="help-block">{{$errors->first('section3Row11')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    idealistic
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row11') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row11" id="section4Row11">
                                                            <option @if (old('section4Row11') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row11') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row11') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row11') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row11') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row11') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row11'))
                                                            <span class="help-block">{{$errors->first('section4Row11')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    stubborn
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row12') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row12" id="section1Row12">
                                                            <option @if (old('section1Row12') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row12') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row12') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row12') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row12') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row12') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row12'))
                                                            <span class="help-block">{{$errors->first('section1Row12')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    easily angered
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row12') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row12" id="section2Row12">
                                                            <option @if (old('section2Row12') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row12') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row12') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row12') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row12') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row12') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row12'))
                                                            <span class="help-block">{{$errors->first('section2Row12')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    headstrong
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row12') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row12" id="section3Row12">
                                                            <option @if (old('section3Row12') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row12') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row12') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row12') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row12') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row12') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row12'))
                                                            <span class="help-block">{{$errors->first('section3Row12')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    loner
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row12') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row12" id="section4Row12">
                                                            <option @if (old('section4Row12') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row12') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row12') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row12') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row12') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row12') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row12'))
                                                            <span class="help-block">{{$errors->first('section4Row12')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    worrier
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row13') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row13" id="section1Row13">
                                                            <option @if (old('section1Row13') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row13') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row13') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row13') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row13') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row13') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row13'))
                                                            <span class="help-block">{{$errors->first('section1Row13')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    undisciplined
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row13') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row13" id="section2Row13">
                                                            <option @if (old('section2Row13') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row13') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row13') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row13') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row13') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row13') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row13'))
                                                            <span class="help-block">{{$errors->first('section2Row13')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    activist
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row13') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row13" id="section3Row13">
                                                            <option @if (old('section3Row13') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row13') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row13') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row13') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row13') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row13') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row13'))
                                                            <span class="help-block">{{$errors->first('section3Row13')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    self-sacrificing
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row13') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row13" id="section4Row13">
                                                            <option @if (old('section4Row13') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row13') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row13') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row13') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row13') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row13') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row13'))
                                                            <span class="help-block">{{$errors->first('section4Row13')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    spectator of life
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row14') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row14" id="section1Row14">
                                                            <option @if (old('section1Row14') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row14') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row14') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row14') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row14') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row14') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row14'))
                                                            <span class="help-block">{{$errors->first('section1Row14')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    extrovert
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row14') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row14" id="section2Row14">
                                                            <option @if (old('section2Row14') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row14') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row14') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row14') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row14') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row14') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row14'))
                                                            <span class="help-block">{{$errors->first('section2Row14')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    outgoing
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row14') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row14" id="section3Row14">
                                                            <option @if (old('section3Row14') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row14') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row14') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row14') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row14') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row14') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row14'))
                                                            <span class="help-block">{{$errors->first('section3Row14')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    introvert
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row14') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row14" id="section4Row14">
                                                            <option @if (old('section4Row14') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row14') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row14') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row14') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row14') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row14') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row14'))
                                                            <span class="help-block">{{$errors->first('section4Row14')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    works well under pressure
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row15') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row15" id="section1Row15">
                                                            <option @if (old('section1Row15') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row15') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row15') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row15') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row15') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row15') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row15'))
                                                            <span class="help-block">{{$errors->first('section1Row15')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    refreshing
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row15') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row15" id="section2Row15">
                                                            <option @if (old('section2Row15') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row15') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row15') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row15') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row15') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row15') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row15'))
                                                            <span class="help-block">{{$errors->first('section2Row15')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    domineering
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row15') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row15" id="section3Row15">
                                                            <option @if (old('section3Row15') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row15') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row15') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row15') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row15') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row15') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row15'))
                                                            <span class="help-block">{{$errors->first('section3Row15')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    faithful friend
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row15') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row15" id="section4Row15">
                                                            <option @if (old('section4Row15') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row15') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row15') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row15') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row15') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row15') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row15'))
                                                            <span class="help-block">{{$errors->first('section4Row15')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    indecisive
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row16') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row16" id="section1Row16">
                                                            <option @if (old('section1Row16') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row16') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row16') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row16') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row16') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row16') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row16'))
                                                            <span class="help-block">{{$errors->first('section1Row16')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    lively/spirited
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row16') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row16" id="section2Row16">
                                                            <option @if (old('section2Row16') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row16') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row16') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row16') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row16') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row16') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row16'))
                                                            <span class="help-block">{{$errors->first('section2Row16')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    adventurous
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row16') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row16" id="section3Row16">
                                                            <option @if (old('section3Row16') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row16') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row16') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row16') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row16') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row16') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row16'))
                                                            <span class="help-block">{{$errors->first('section3Row16')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    analytical
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row16') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row16" id="section4Row16">
                                                            <option @if (old('section4Row16') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row16') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row16') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row16') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row16') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row16') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row16'))
                                                            <span class="help-block">{{$errors->first('section4Row16')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    adaptable
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row17') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row17" id="section1Row17">
                                                            <option @if (old('section1Row17') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row17') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row17') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row17') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row17') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row17') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row17'))
                                                            <span class="help-block">{{$errors->first('section1Row17')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    weak-willed
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row17') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row17" id="section2Row17">
                                                            <option @if (old('section2Row17') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row17') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row17') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row17') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row17') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row17') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row17'))
                                                            <span class="help-block">{{$errors->first('section2Row17')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    agressive
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row17') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row17" id="section3Row17">
                                                            <option @if (old('section3Row17') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row17') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row17') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row17') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row17') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row17') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row17'))
                                                            <span class="help-block">{{$errors->first('section3Row17')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    considerate
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row17') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row17" id="section4Row17">
                                                            <option @if (old('section4Row17') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row17') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row17') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row17') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row17') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row17') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row17'))
                                                            <span class="help-block">{{$errors->first('section4Row17')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    slow and lazy
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row18') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row18" id="section1Row18">
                                                            <option @if (old('section1Row18') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row18') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row18') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row18') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row18') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row18') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row18'))
                                                            <span class="help-block">{{$errors->first('section1Row18')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    spontaneous
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row18') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row18" id="section2Row18">
                                                            <option @if (old('section2Row18') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row18') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row18') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row18') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row18') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row18') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row18'))
                                                            <span class="help-block">{{$errors->first('section2Row18')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    competitive
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row18') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row18" id="section3Row18">
                                                            <option @if (old('section3Row18') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row18') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row18') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row18') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row18') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row18') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row18'))
                                                            <span class="help-block">{{$errors->first('section3Row18')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    likes behind the scenes
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row18') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row18" id="section4Row18">
                                                            <option @if (old('section4Row18') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row18') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row18') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row18') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row18') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row18') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row18'))
                                                            <span class="help-block">{{$errors->first('section4Row18')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    submissive to others
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row19') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row19" id="section1Row19">
                                                            <option @if (old('section1Row19') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row19') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row19') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row19') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row19') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row19') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row19'))
                                                            <span class="help-block">{{$errors->first('section1Row19')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    talkative
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row19') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row19" id="section2Row19">
                                                            <option @if (old('section2Row19') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row19') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row19') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row19') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row19') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row19') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row19'))
                                                            <span class="help-block">{{$errors->first('section2Row19')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    leadership ability
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row19') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row19" id="section3Row19">
                                                            <option @if (old('section3Row19') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row19') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row19') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row19') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row19') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row19') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row19'))
                                                            <span class="help-block">{{$errors->first('section3Row19')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    suspicious
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row19') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row19" id="section4Row19">
                                                            <option @if (old('section4Row19') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row19') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row19') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row19') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row19') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row19') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row19'))
                                                            <span class="help-block">{{$errors->first('section4Row19')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    easy going
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row20') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row20" id="section1Row20">
                                                            <option @if (old('section1Row20') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row20') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row20') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row20') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row20') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row20') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row20'))
                                                            <span class="help-block">{{$errors->first('section1Row20')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    delightful/cheerful
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row20') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row20" id="section2Row20">
                                                            <option @if (old('section2Row20') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row20') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row20') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row20') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row20') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row20') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row20'))
                                                            <span class="help-block">{{$errors->first('section2Row20')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    daring
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row20') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row20" id="section3Row20">
                                                            <option @if (old('section3Row20') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row20') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row20') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row20') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row20') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row20') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row20'))
                                                            <span class="help-block">{{$errors->first('section3Row20')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    respectful
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row20') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row20" id="section4Row20">
                                                            <option @if (old('section4Row20') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row20') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row20') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row20') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row20') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row20') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row20'))
                                                            <span class="help-block">{{$errors->first('section4Row20')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    reserved
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row21') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row21" id="section1Row21">
                                                            <option @if (old('section1Row21') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row21') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row21') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row21') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row21') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row21') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row21'))
                                                            <span class="help-block">{{$errors->first('section1Row21')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    enjoyable
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row21') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row21" id="section2Row21">
                                                            <option @if (old('section2Row21') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row21') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row21') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row21') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row21') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row21') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row21'))
                                                            <span class="help-block">{{$errors->first('section2Row21')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    persevering
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row21') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row21" id="section3Row21">
                                                            <option @if (old('section3Row21') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row21') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row21') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row21') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row21') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row21') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row21'))
                                                            <span class="help-block">{{$errors->first('section3Row21')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    introspective
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row21') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row21" id="section4Row21">
                                                            <option @if (old('section4Row21') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row21') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row21') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row21') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row21') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row21') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row21'))
                                                            <span class="help-block">{{$errors->first('section4Row21')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    calm and cool
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row22') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row22" id="section1Row22">
                                                            <option @if (old('section1Row22') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row22') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row22') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row22') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row22') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row22') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row22'))
                                                            <span class="help-block">{{$errors->first('section1Row22')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    popular
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row22') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row22" id="section2Row22">
                                                            <option @if (old('section2Row22') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row22') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row22') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row22') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row22') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row22') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row22'))
                                                            <span class="help-block">{{$errors->first('section2Row22')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    bold
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row22') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row22" id="section3Row22">
                                                            <option @if (old('section3Row22') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row22') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row22') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row22') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row22') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row22') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row22'))
                                                            <span class="help-block">{{$errors->first('section3Row22')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    planner
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row22') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row22" id="section4Row22">
                                                            <option @if (old('section4Row22') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row22') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row22') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row22') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row22') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row22') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row22'))
                                                            <span class="help-block">{{$errors->first('section4Row22')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    content/satisfied
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row23') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row23" id="section1Row23">
                                                            <option @if (old('section1Row23') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row23') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row23') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row23') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row23') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row23') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row23'))
                                                            <span class="help-block">{{$errors->first('section1Row23')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    friendly/sociable
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row23') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row23" id="section2Row23">
                                                            <option @if (old('section2Row23') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row23') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row23') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row23') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row23') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row23') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row23'))
                                                            <span class="help-block">{{$errors->first('section2Row23')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    strong-willed
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row23') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row23" id="section3Row23">
                                                            <option @if (old('section3Row23') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row23') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row23') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row23') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row23') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row23') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row23'))
                                                            <span class="help-block">{{$errors->first('section3Row23')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    perfectionist
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row23') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row23" id="section4Row23">
                                                            <option @if (old('section4Row23') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row23') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row23') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row23') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row23') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row23') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row23'))
                                                            <span class="help-block">{{$errors->first('section4Row23')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    efficient
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row24') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row24" id="section1Row24">
                                                            <option @if (old('section1Row24') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row24') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row24') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row24') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row24') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row24') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row24'))
                                                            <span class="help-block">{{$errors->first('section1Row24')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    "bouncy"
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row24') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row24" id="section2Row24">
                                                            <option @if (old('section2Row24') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row24') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row24') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row24') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row24') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row24') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row24'))
                                                            <span class="help-block">{{$errors->first('section2Row24')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    persuasive
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row24') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row24" id="section3Row24">
                                                            <option @if (old('section3Row24') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row24') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row24') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row24') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row24') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row24') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row24'))
                                                            <span class="help-block">{{$errors->first('section3Row24')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    scheduled
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row24') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row24" id="section4Row24">
                                                            <option @if (old('section4Row24') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row24') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row24') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row24') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row24') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row24') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row24'))
                                                            <span class="help-block">{{$errors->first('section4Row24')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    patient
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row25') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row25" id="section1Row25">
                                                            <option @if (old('section1Row25') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row25') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row25') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row25') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row25') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row25') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row25'))
                                                            <span class="help-block">{{$errors->first('section1Row25')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    restless
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row25') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row25" id="section2Row25">
                                                            <option @if (old('section2Row25') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row25') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row25') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row25') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row25') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row25') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row25'))
                                                            <span class="help-block">{{$errors->first('section2Row25')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    hot-tempered
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row25') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row25" id="section3Row25">
                                                            <option @if (old('section3Row25') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row25') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row25') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row25') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row25') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row25') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row25'))
                                                            <span class="help-block">{{$errors->first('section3Row25')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    unforgiving/resents
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row25') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row25" id="section4Row25">
                                                            <option @if (old('section4Row25') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row25') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row25') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row25') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row25') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row25') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row25'))
                                                            <span class="help-block">{{$errors->first('section4Row25')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    dependable
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row26') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row26" id="section1Row26">
                                                            <option @if (old('section1Row26') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row26') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row26') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row26') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row26') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row26') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row26'))
                                                            <span class="help-block">{{$errors->first('section1Row26')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    difficulty concentrating
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row26') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row26" id="section2Row26">
                                                            <option @if (old('section2Row26') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row26') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row26') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row26') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row26') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row26') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row26'))
                                                            <span class="help-block">{{$errors->first('section2Row26')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    resourceful
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row26') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row26" id="section3Row26">
                                                            <option @if (old('section3Row26') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row26') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row26') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row26') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row26') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row26') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row26'))
                                                            <span class="help-block">{{$errors->first('section3Row26')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    orderly
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row26') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row26" id="section4Row26">
                                                            <option @if (old('section4Row26') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row26') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row26') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row26') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row26') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row26') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row26'))
                                                            <span class="help-block">{{$errors->first('section4Row26')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    listener
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row27') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row27" id="section1Row27">
                                                            <option @if (old('section1Row27') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row27') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row27') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row27') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row27') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row27') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row27'))
                                                            <span class="help-block">{{$errors->first('section1Row27')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    likes to play
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row27') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row27" id="section2Row27">
                                                            <option @if (old('section2Row27') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row27') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row27') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row27') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row27') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row27') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row27'))
                                                            <span class="help-block">{{$errors->first('section2Row27')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    insensitive
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row27') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row27" id="section3Row27">
                                                            <option @if (old('section3Row27') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row27') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row27') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row27') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row27') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row27') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row27'))
                                                            <span class="help-block">{{$errors->first('section3Row27')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    creative
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row27') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row27" id="section4Row27">
                                                            <option @if (old('section4Row27') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row27') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row27') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row27') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row27') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row27') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row27'))
                                                            <span class="help-block">{{$errors->first('section4Row27')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    witty/dry humor
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row28') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row28" id="section1Row28">
                                                            <option @if (old('section1Row28') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row28') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row28') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row28') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row28') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row28') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row28'))
                                                            <span class="help-block">{{$errors->first('section1Row28')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    difficulty keeping resolutions
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row28') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row28" id="section2Row28">
                                                            <option @if (old('section2Row28') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row28') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row28') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row28') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row28') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row28') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row28'))
                                                            <span class="help-block">{{$errors->first('section2Row28')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    outspoken
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row28') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row28" id="section3Row28">
                                                            <option @if (old('section3Row28') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row28') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row28') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row28') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row28') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row28') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row28'))
                                                            <span class="help-block">{{$errors->first('section3Row28')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    detailed
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row28') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row28" id="section4Row28">
                                                            <option @if (old('section4Row28') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row28') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row28') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row28') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row28') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row28') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row28'))
                                                            <span class="help-block">{{$errors->first('section4Row28')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    pleasant
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row29') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row29" id="section1Row29">
                                                            <option @if (old('section1Row29') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row29') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row29') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row29') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row29') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row29') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row29'))
                                                            <span class="help-block">{{$errors->first('section1Row29')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    lives in present
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row29') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row29" id="section2Row29">
                                                            <option @if (old('section2Row29') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row29') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row29') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row29') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row29') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row29') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row29'))
                                                            <span class="help-block">{{$errors->first('section2Row29')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    unsympathetic
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row29') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row29" id="section3Row29">
                                                            <option @if (old('section3Row29') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row29') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row29') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row29') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row29') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row29') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row29'))
                                                            <span class="help-block">{{$errors->first('section3Row29')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    moody
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row29') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row29" id="section4Row29">
                                                            <option @if (old('section4Row29') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row29') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row29') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row29') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row29') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row29') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row29'))
                                                            <span class="help-block">{{$errors->first('section4Row29')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    teases others
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section1Row30') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section1Row30" id="section1Row30">
                                                            <option @if (old('section1Row30') == '---') selected @endif>---</option>
                                                            <option @if (old('section1Row30') == '1') selected @endif>1</option>
                                                            <option @if (old('section1Row30') == '2') selected @endif>2</option>
                                                            <option @if (old('section1Row30') == '3') selected @endif>3</option>
                                                            <option @if (old('section1Row30') == '4') selected @endif>4</option>
                                                            <option @if (old('section1Row30') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section1Row30'))
                                                            <span class="help-block">{{$errors->first('section1Row30')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    difficulty with appointments
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section2Row30') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section2Row30" id="section2Row30">
                                                            <option @if (old('section2Row30') == '---') selected @endif>---</option>
                                                            <option @if (old('section2Row30') == '1') selected @endif>1</option>
                                                            <option @if (old('section2Row30') == '2') selected @endif>2</option>
                                                            <option @if (old('section2Row30') == '3') selected @endif>3</option>
                                                            <option @if (old('section2Row30') == '4') selected @endif>4</option>
                                                            <option @if (old('section2Row30') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section2Row30'))
                                                            <span class="help-block">{{$errors->first('section2Row30')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    productve
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section3Row30') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section3Row30" id="section3Row30">
                                                            <option @if (old('section3Row30') == '---') selected @endif>---</option>
                                                            <option @if (old('section3Row30') == '1') selected @endif>1</option>
                                                            <option @if (old('section3Row30') == '2') selected @endif>2</option>
                                                            <option @if (old('section3Row30') == '3') selected @endif>3</option>
                                                            <option @if (old('section3Row30') == '4') selected @endif>4</option>
                                                            <option @if (old('section3Row30') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section3Row30'))
                                                            <span class="help-block">{{$errors->first('section3Row30')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    gifted(musically or athletically)
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group {{ $errors->has('section4Row30') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="section4Row30" id="section4Row30">
                                                            <option @if (old('section4Row30') == '---') selected @endif>---</option>
                                                            <option @if (old('section4Row30') == '1') selected @endif>1</option>
                                                            <option @if (old('section4Row30') == '2') selected @endif>2</option>
                                                            <option @if (old('section4Row30') == '3') selected @endif>3</option>
                                                            <option @if (old('section4Row30') == '4') selected @endif>4</option>
                                                            <option @if (old('section4Row30') == '5') selected @endif>5</option>
                                                        </select>
                                                        @if ($errors->has('section4Row30'))
                                                            <span class="help-block">{{$errors->first('section4Row30')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    consistent
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- /.tab-content -->
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-lg btn-flat btn-primary center-block">Next</button>
                </div>
            </div>
        </form>
    </section>
@endsection
@section('scripts')
    <script src="{{asset('js/admin/createRecord.js')}}"></script>
@endsection
