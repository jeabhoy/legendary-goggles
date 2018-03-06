@extends('layouts.guest')
@section('content')
<div class="login-logo">
  <a href="#"><b>Student Profiling Information System</b></a>
</div>
<!-- /.login-logo -->
<div class="login-box-body">
  <p class="login-box-msg">Enter email address to recover your account</p>

  <form method="POST" action="{{ route('password.email') }}">
    {{ csrf_field() }}
    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
      <input type="text" class="form-control" name="email" placeholder="Email" value='{{old('email')}}' autofocus>
      <span class="fa fa-user form-control-feedback"></span>
      @if ($errors->has('email'))
        <span class="help-block">{{$errors->first('email')}}</span>
      @endif
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block btn-flat">
              Send Password Reset Link
          </button>
        </div>
      </div>
    </div>
  </form>
</div>
<!-- /.login-box-body -->
@endsection
