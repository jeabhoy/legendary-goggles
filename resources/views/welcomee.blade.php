@extends('layouts.guest')
@section('stylesheets')
<!-- iCheck -->
<link rel="stylesheet" href="{{asset('plugins/iCheck/square/blue.css')}}">
@endsection
@section('content')
<div class="login-logo">
  <a href="#"><b>Student Profiling Information System</b></a>
</div>
<!-- /.login-logo -->
<div class="login-box-body">
  <p class="login-box-msg">Sign in to start your session</p>

  <form method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <div class="form-group {{ $errors->has('username') ? ' has-error' : '' }} has-feedback">
      <input type="text" class="form-control" name="username" placeholder="Username" value='{{old('username')}}' autofocus>
      <span class="fa fa-user form-control-feedback"></span>
      @if ($errors->has('username'))
        <span class="help-block">{{$errors->first('username')}}</span>
      @endif
    </div>
    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
      <input type="password" class="form-control" name="password" placeholder="Password">
      <span class="fa fa-lock form-control-feedback"></span>
      @if ($errors->has('password'))
        <span class="help-block">{{$errors->first('password')}}</span>
      @endif
    </div>
    <div class="row">
      <div class="col-xs-8">
        <div class="checkbox icheck">
          <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
          </label>
        </div>
      </div>
      <!-- /.col -->
      <div class="col-xs-4">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
      </div>
      <!-- /.col -->
    </div>
  </form>
  <a href="{{ route('passwordRecovery') }}">I forgot my password</a><br>

</div>
<!-- /.login-box-body -->
@endsection
@section('scripts')
<!-- iCheck -->
<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
<script src="{{asset('js/guest/welcomePage.js')}}"></script>
@endsection
