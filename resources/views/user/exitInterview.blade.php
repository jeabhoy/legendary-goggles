@extends('layouts.user')
@section('sidebar')
  <ul class="sidebar-menu" data-widget="tree" data-follow-link='true'>
    <li class="header">MAIN NAVIGATION</li>
    <li class="treeview">
      <a href="{{route('userProfileShow', ['id' => $array['id']])}}">
        <i class="fa fa-user"></i> <span>Profile</span>
      </a>
    </li>
    <li class="active treeview">
      <a href="#">
        <i class="fa fa-commenting-o"></i>
        <span>Structured Interview</span>
      </a>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-pencil"></i> <span>Test</span>
      </a>
    </li>
    @if(Auth::user()->level == 'Admin')
      <li class="treeview">
        <a href="{{route('counselingIndex', ['id' => $array['id']])}}">
          <i class="fa fa-user-secret"></i> <span>Counseling</span>
        </a>
      </li>
      <li class="treeview">
        <a href="{{route('violationIndex', ['id' => $array['id']])}}">
          <i class="fa fa-fire"></i> <span>Violations</span>
        </a>
      </li>
    @endif
  </ul>
@endsection
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Exit Interview
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li>Structured Interview</li>
    <li class="active">Exit Interview</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-success">
        <div class="box-header">
          <h3 class="box-title">Answer the following questions:</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <form action="{{route('exitInterviewCreate', ['id' => $array['id']])}}" method="POST">
            {{ csrf_field() }}
            <div class="row"> 
              <div class="col-md-6">
                <div class="form-group {{ $errors->has('department') ? ' has-error' : '' }}">
                  <label class="control-label" for="department">Department</label>
                  <select class="form-control" name="department" id="department">
                    <option @if (old('department') == 'College of Teacher Education') selected @endif>College of Teacher Education</option>
                    <option @if (old('department') == 'College of Computer Studies') selected @endif>College of Computer Studies</option>
                  </select>
                  @if ($errors->has('department'))
                    <span class="help-block">{{$errors->first('department')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group {{ $errors->has('attendedOther') ? ' has-error' : '' }}">
                  <label class="control-label" for="attendedOther">Have you attended any other colleges or universities? Which one?</label>
                  <textarea class="form-control" rows="5" name="attendedOther" id="attendedOther">{{old('attendedOther')}}</textarea>
                  @if ($errors->has('attendedOther'))
                    <span class="help-block">{{$errors->first('attendedOther')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group {{ $errors->has('attracted') ? ' has-error' : '' }}">
                  <label class="control-label" for="attracted">What attracted you to that school?</label>
                  <textarea class="form-control" rows="5" name="attracted" id="attracted">{{old('attracted')}}</textarea>
                  @if ($errors->has('attracted'))
                    <span class="help-block">{{$errors->first('attracted')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group {{ $errors->has('chooseToStudy') ? ' has-error' : '' }}">
                  <label class="control-label" for="chooseToStudy">Why did you choose to study in PUNP?</label>
                  <textarea class="form-control" rows="5" name="chooseToStudy" id="chooseToStudy">{{old('chooseToStudy')}}</textarea>
                  @if ($errors->has('chooseToStudy'))
                    <span class="help-block">{{$errors->first('chooseToStudy')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group {{ $errors->has('bestPartsOfPUNP') ? ' has-error' : '' }}">
                  <label class="control-label" for="bestPartsOfPUNP">What are the best parts of your learning experience in PUNP? Why?</label>
                  <textarea class="form-control" rows="5" name="bestPartsOfPUNP" id="bestPartsOfPUNP">{{old('bestPartsOfPUNP')}}</textarea>
                  @if ($errors->has('bestPartsOfPUNP'))
                    <span class="help-block">{{$errors->first('bestPartsOfPUNP')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group {{ $errors->has('worstPartsOfPUNP') ? ' has-error' : '' }}">
                  <label class="control-label" for="worstPartsOfPUNP">What are the worst parts of your learning experience in PUNP? Why?</label>
                  <textarea class="form-control" rows="5" name="worstPartsOfPUNP" id="worstPartsOfPUNP">{{old('worstPartsOfPUNP')}}</textarea>
                  @if ($errors->has('worstPartsOfPUNP'))
                    <span class="help-block">{{$errors->first('worstPartsOfPUNP')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group {{ $errors->has('favoriteSubject') ? ' has-error' : '' }}">
                  <label class="control-label" for="favoriteSubject">Of all the subjects you took, which were your favorites and why?</label>
                  <textarea class="form-control" rows="5" name="favoriteSubject" id="favoriteSubject">{{old('favoriteSubject')}}</textarea>
                  @if ($errors->has('favoriteSubject'))
                    <span class="help-block">{{$errors->first('favoriteSubject')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group {{ $errors->has('leastFavoriteSubject') ? ' has-error' : '' }}">
                  <label class="control-label" for="leastFavoriteSubject">Of all the subjects you took, which were your least and why?</label>
                  <textarea class="form-control" rows="5" name="leastFavoriteSubject" id="leastFavoriteSubject">{{old('leastFavoriteSubject')}}</textarea>
                  @if ($errors->has('leastFavoriteSubject'))
                    <span class="help-block">{{$errors->first('leastFavoriteSubject')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group {{ $errors->has('likeBest') ? ' has-error' : '' }}">
                  <label class="control-label" for="likeBest">What did you like best in the <span class="department"></span>?</label>
                  <textarea class="form-control" rows="5" name="likeBest" id="likeBest">{{old('likeBest')}}</textarea>
                  @if ($errors->has('likeBest'))
                    <span class="help-block">{{$errors->first('likeBest')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group {{ $errors->has('likeLeast') ? ' has-error' : '' }}">
                  <label class="control-label" for="likeLeast">What did you like least in the <span class="department"></span>?</label>
                  <textarea class="form-control" rows="5" name="likeLeast" id="likeLeast">{{old('likeLeast')}}</textarea>
                  @if ($errors->has('likeLeast'))
                    <span class="help-block">{{$errors->first('likeLeast')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group {{ $errors->has('workWhileSchool') ? ' has-error' : '' }}">
                  <label class="control-label" for="workWhileSchool">Did you work while you were in school?</label>
                  <textarea class="form-control" rows="5" name="workWhileSchool" id="workWhileSchool">{{old('workWhileSchool')}}</textarea>
                  @if ($errors->has('workWhileSchool'))
                    <span class="help-block">{{$errors->first('workWhileSchool')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group {{ $errors->has('changesYouSuggest') ? ' has-error' : '' }}">
                  <label class="control-label" for="changesYouSuggest">What changes would you like to suggest that we can make in the <span class="department"></span>?</label>
                  <textarea class="form-control" rows="5" name="changesYouSuggest" id="changesYouSuggest">{{old('changesYouSuggest')}}</textarea>
                  @if ($errors->has('changesYouSuggest'))
                    <span class="help-block">{{$errors->first('changesYouSuggest')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group {{ $errors->has('bestInstructor') ? ' has-error' : '' }}">
                  <label class="control-label" for="bestInstructor">Who is the best instructor for you? Why?</label>
                  <textarea class="form-control" rows="5" name="bestInstructor" id="bestInstructor">{{old('bestInstructor')}}</textarea>
                  @if ($errors->has('bestInstructor'))
                    <span class="help-block">{{$errors->first('bestInstructor')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group {{ $errors->has('leastInstructor') ? ' has-error' : '' }}">
                  <label class="control-label" for="leastInstructor">Who is the least instructor for you? Why?</label>
                  <textarea class="form-control" rows="5" name="leastInstructor" id="leastInstructor">{{old('leastInstructor')}}</textarea>
                  @if ($errors->has('leastInstructor'))
                    <span class="help-block">{{$errors->first('leastInstructor')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group {{ $errors->has('immediatePlans') ? ' has-error' : '' }}">
                  <label class="control-label" for="immediatePlans">What are your immediate plans after graduation? Employment? Or Review for the Licensure Examination?</label>
                  <textarea class="form-control" rows="5" name="immediatePlans" id="immediatePlans">{{old('immediatePlans')}}</textarea>
                  @if ($errors->has('immediatePlans'))
                    <span class="help-block">{{$errors->first('immediatePlans')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group {{ $errors->has('review') ? ' has-error' : '' }}">
                  <label class="control-label" for="review">If planning to review for the Licensure Examination, would you prefer to enroll at PUNP?</label>
                  <textarea class="form-control" rows="5" name="review" id="review">{{old('review')}}</textarea>
                  @if ($errors->has('review'))
                    <span class="help-block">{{$errors->first('review')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group {{ $errors->has('choosePUNP') ? ' has-error' : '' }}">
                  <label class="control-label" for="choosePUNP">If you choose PUNP, what would be the best way to contact you in future?</label>
                  <textarea class="form-control" rows="5" name="choosePUNP" id="choosePUNP">{{old('choosePUNP')}}</textarea>
                  @if ($errors->has('choosePUNP'))
                    <span class="help-block">{{$errors->first('choosePUNP')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group {{ $errors->has('comments') ? ' has-error' : '' }}">
                  <label class="control-label" for="comments">Give some comments to PUNP negative and positive.</label>
                  <textarea class="form-control" rows="5" name="comments" id="comments">{{old('comments')}}</textarea>
                  @if ($errors->has('comments'))
                    <span class="help-block">{{$errors->first('comments')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group {{ $errors->has('otherComments') ? ' has-error' : '' }}">
                  <label class="control-label" for="otherComments">Any other comments you would care to make?</label>
                  <textarea class="form-control" rows="5" name="otherComments" id="otherComments">{{old('otherComments')}}</textarea>
                  @if ($errors->has('otherComments'))
                    <span class="help-block">{{$errors->first('otherComments')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="text-center">
              <button class="btn btn-lg btn-flat btn-primary center-block">Save</button>
            </div>
          </form>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
@endsection
@section('scripts')
  <script type="text/javascript">
    $(document).ready(function () {
      $('.department').text($('#department').val());
      $("#department").change(function() {
        $('.department').text($('#department').val());
      });
    });
  </script>
@endsection