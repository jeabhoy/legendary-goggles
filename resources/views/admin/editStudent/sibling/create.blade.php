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
            ADD SIBLING
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Manage Student</li>
            <li class="active">Edit Student Record</li>
            <li class="active">Siblings</li>
            <li class="active">Create</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <form action="{{route('adminStoreEditSibling', ['id' => $user->id])}}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-12">
                    <div class="box box-success">
                        <div class="box-body">
                            <div class="col-lg-4">
                                <div class="form-group {{ $errors->has('siblingName') ? ' has-error' : '' }}">
                                    <label class="control-label" for="siblingName">Name</label>
                                    <input type="text" class="form-control" name="siblingName" id="siblingName"  value="{{old('siblingName')}}">
                                    @if ($errors->has('siblingName'))
                                        <span class="help-block">{{$errors->first('siblingName')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group {{ $errors->has('siblingAge') ? ' has-error' : '' }}">
                                    <label class="control-label" for="siblingAge">Age</label>
                                    <input type="number" class="form-control" name="siblingAge" id="siblingAge"  value="{{old('siblingAge')}}">
                                    @if ($errors->has('siblingAge'))
                                        <span class="help-block">{{$errors->first('siblingAge')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group {{ $errors->has('siblingEducationalLevel') ? ' has-error' : '' }}">
                                    <label class="control-label" for="siblingEducationalLevel">Education Level</label>
                                    <input type="text" class="form-control" name="siblingEducationalLevel" id="siblingEducationalLevel"  value="{{old('siblingEducationalLevel')}}">
                                    @if ($errors->has('siblingEducationalLevel'))
                                        <span class="help-block">{{$errors->first('siblingEducationalLevel')}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-lg btn-flat btn-primary center-block">Save</button>
            </div>
        </form>

    </section>
@endsection
