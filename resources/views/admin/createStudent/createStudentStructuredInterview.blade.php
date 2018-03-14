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
            STRUCTURED INTERVIEW
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Manage Student</li>
            <li class="active">Create Student Record</li>
            <li class="active">Structured Interview</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <form method="POST" action="{{route('adminStoreStudentStructuredInterview', ['id' => $user->id])}}">
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
                        <li class="disabled"><a href="#" data-toggle="tab">Educational Background</a></li>
                        <li class="active"><a href="#tab_1" data-toggle="tab">Structured Interview</a></li>
                        <li class="disabled"><a href="#" data-toggle="tab">Personality Test</a></li>
                        @if($user->level == 'College' && $user->exitInterviewTaken == 'false')
                            <li class="disabled"><a href="#" data-toggle="tab">Exit Interview</a></li>
                        @endif
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            @if($user->level == 'Grade 7' || $user->level == 'Grade 8' || $user->level == 'Grade 9' || $user->level == 'Grade 9' || $user->level == 'Grade 10' || $user->level == 'Grade 11' || $user->level == 'Grade 12' || $user->level == 'College')
                            <div class="collegeShow grade1112Show grade710Show grade16Hide">
                                <h4>Personal</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('characteristics') ? ' has-error' : '' }}">
                                            <label class="control-label" for="characteristics">Give one positive and negative characteristics that describe you best.</label>
                                            <input type="text" class="form-control" name="characteristics" id="characteristics"  value="{{old('characteristics')}}">
                                            @if ($errors->has('characteristics'))
                                                <span class="help-block">{{$errors->first('characteristics')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('concern') ? ' has-error' : '' }}">
                                            <label class="control-label" for="concern">What concerns you the most?</label>
                                            <input type="text" class="form-control" name="concern" id="concern"  value="{{old('concern')}}">
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
                                                <option @if (old('fatherInterpersonal') == 'Very Well') selected @endif>Very Well</option>
                                                <option @if (old('fatherInterpersonal') == 'Frequently Well') selected @endif>Frequently Well</option>
                                                <option @if (old('fatherInterpersonal') == 'Seldom to be Well') selected @endif>Seldom to be Well</option>
                                                <option @if (old('fatherInterpersonal') == 'Poor') selected @endif>Poor</option>
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
                                                <option @if (old('motherInterpersonal') == 'Very Well') selected @endif>Very Well</option>
                                                <option @if (old('motherInterpersonal') == 'Frequently Well') selected @endif>Frequently Well</option>
                                                <option @if (old('motherInterpersonal') == 'Seldom to be Well') selected @endif>Seldom to be Well</option>
                                                <option @if (old('motherInterpersonal') == 'Poor') selected @endif>Poor</option>
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
                                                <option @if (old('siblingsInterpersonal') == 'Very Well') selected @endif>Very Well</option>
                                                <option @if (old('siblingsInterpersonal') == 'Frequently Well') selected @endif>Frequently Well</option>
                                                <option @if (old('siblingsInterpersonal') == 'Seldom to be Well') selected @endif>Seldom to be Well</option>
                                                <option @if (old('siblingsInterpersonal') == 'Poor') selected @endif>Poor</option>
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
                                                <option @if (old('relativesInterpersonal') == 'Very Well') selected @endif>Very Well</option>
                                                <option @if (old('relativesInterpersonal') == 'Frequently Well') selected @endif>Frequently Well</option>
                                                <option @if (old('relativesInterpersonal') == 'Seldom to be Well') selected @endif>Seldom to be Well</option>
                                                <option @if (old('relativesInterpersonal') == 'Poor') selected @endif>Poor</option>
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
                                                <option @if (old('friendsInterpersonal') == 'Very Well') selected @endif>Very Well</option>
                                                <option @if (old('friendsInterpersonal') == 'Frequently Well') selected @endif>Frequently Well</option>
                                                <option @if (old('friendsInterpersonal') == 'Seldom to be Well') selected @endif>Seldom to be Well</option>
                                                <option @if (old('friendsInterpersonal') == 'Poor') selected @endif>Poor</option>
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
                            @endif
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group {{ $errors->has('describeFather') ? ' has-error' : '' }}">
                                        <label class="control-label" for="describeFather">Describe your Father</label>
                                        <textarea class="form-control" rows="5" name="describeFather" id="describeFather">{{old('describeFather')}}</textarea>
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
                                        <textarea class="form-control" rows="5" name="describeMother" id="describeMother">{{old('describeMother')}}</textarea>
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
                                        <textarea class="form-control" rows="5" name="describeFamily" id="describeFamily">{{old('describeFamily')}}</textarea>
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
                                            <option @if (old('strength') == 'Understand lesson well') selected @endif id="strength1">Understand lesson well</option>
                                            <option @if (old('strength') == 'Find time to finish assignment') selected @endif id="strength2">Find time to finish assignment</option>
                                            <option @if (old('strength') == 'Work with classmates') selected @endif id="strength3">Work with classmates</option>
                                            <option @if (old('strength') == 'Develop confidence in discussion') selected @endif id="strength4">Develop confidence in discussion</option>
                                            <option @if (old('strength') == 'Balance between leisure and studies') selected @endif id="strength5">Balance between leisure and studies</option>
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
                                            <option @if (old('weakness') == 'Understand lesson well') selected @endif id="weakness1">Understand lesson well</option>
                                            <option @if (old('weakness') == 'Find time to finish assignment') selected @endif id="weakness2">Find time to finish assignment</option>
                                            <option @if (old('weakness') == 'Work with classmates') selected @endif id="weakness3">Work with classmates</option>
                                            <option @if (old('weakness') == 'Develop confidence in discussion') selected @endif id="weakness4">Develop confidence in discussion</option>
                                            <option @if (old('weakness') == 'Balance between leisure and studies') selected @endif id="weakness5">Balance between leisure and studies</option>
                                        </select>
                                        @if ($errors->has('weakness'))
                                            <span class="help-block">{{$errors->first('weakness')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                                @if($user->level == 'Grade 7' || $user->level == 'Grade 8' || $user->level == 'Grade 9' || $user->level == 'Grade 9' || $user->level == 'Grade 10' || $user->level == 'Grade 11' || $user->level == 'Grade 12' || $user->level == 'College')
                            <div class="collegeShow grade1112Show grade710Show grade16Hide">
                                <h5>
                                    What made you decide to enroll in Panpacific University North Philippines?
                                </h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('decideToEnroll') ? ' has-error' : '' }}">
                                            <label class="control-label" for="decideToEnroll"></label>
                                            <select class="form-control" name="decideToEnroll" id="decideToEnroll">
                                                <option @if (old('decideToEnroll') == 'Distance of School') selected @endif>Distance of School</option>
                                                <option @if (old('decideToEnroll') == 'Parents') selected @endif>Parents</option>
                                                <option @if (old('decideToEnroll') == 'Friends') selected @endif>Friends</option>
                                                <option @if (old('decideToEnroll') == 'Competent Instructor') selected @endif>Competent Instructor</option>
                                                <option @if (old('decideToEnroll') == 'Facilities') selected @endif>Facilities</option>
                                                <option @if (old('decideToEnroll') == 'Marketing') selected @endif>Marketing</option>
                                                <option @if (old('decideToEnroll') == 'Scholarship Grant') selected @endif>Scholarship Grant</option>
                                                <option @if (old('decideToEnroll') == 'Others') selected @endif>Others</option>
                                            </select>
                                            @if ($errors->has('decideToEnroll'))
                                                <span class="help-block">{{$errors->first('decideToEnroll')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('decideToEnrollOthers') ? ' has-error' : '' }}">
                                            <label class="control-label" for="decideToEnrollOthers"></label>
                                            <input type="text" class="form-control" name="decideToEnrollOthers" id="decideToEnrollOthers"  value="{{old('decideToEnrollOthers')}}" disabled>
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
                                                <option @if (old('factorInfluenced') == 'Friend') selected @endif>Friend</option>
                                                <option @if (old('factorInfluenced') == 'Parents') selected @endif>Parents</option>
                                                <option @if (old('factorInfluenced') == 'Relative') selected @endif>Relative</option>
                                                <option @if (old('factorInfluenced') == 'Financial Status') selected @endif>Financial Status</option>
                                                <option @if (old('factorInfluenced') == 'Employability') selected @endif>Employability</option>
                                                <option @if (old('factorInfluenced') == 'In line with the ability/interest') selected @endif>In line with the ability/interest</option>
                                                <option @if (old('factorInfluenced') == 'Others') selected @endif>Others</option>
                                            </select>
                                            @if ($errors->has('factorInfluenced'))
                                                <span class="help-block">{{$errors->first('factorInfluenced')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('factorInfluencedOthers') ? ' has-error' : '' }}">
                                            <label class="control-label" for="factorInfluencedOthers"></label>
                                            <input type="text" class="form-control" name="factorInfluencedOthers" id="factorInfluencedOthers"  value="{{old('factorInfluencedOthers')}}" disabled>
                                            @if ($errors->has('factorInfluencedOthers'))
                                                <span class="help-block">{{$errors->first('factorInfluencedOthers')}}</span>
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
@section('scripts')
    <script>
        $(document).ready(function () {
            // Academic disable/enable strength
            if ($("#strength").val() == 'Understand lesson well') {
                $("#weakness1").attr("disabled", "disabled");
                $("#weakness2, #weakness3, #weakness4, #weakness5").removeAttr("disabled");
            }
            if ($("#strength").val() == 'Find time to finish assignment') {
                $("#weakness2").attr("disabled", "disabled");
                $("#weakness1, #weakness3, #weakness4, #weakness5").removeAttr("disabled");
            }
            if ($("#strength").val() == 'Work with classmates') {
                $("#weakness3").attr("disabled", "disabled");
                $("#weakness1, #weakness2, #weakness4, #weakness5").removeAttr("disabled");
            }
            if ($("#strength").val() == 'Develop confidence in discussion') {
                $("#weakness4").attr("disabled", "disabled");
                $("#weakness1, #weakness2, #weakness3, #weakness5").removeAttr("disabled");
            }
            if ($("#strength").val() == 'Balance between leisure and studies') {
                $("#weakness5").attr("disabled", "disabled");
                $("#weakness1, #weakness2, #weakness3, #weakness4").removeAttr("disabled");
            }
            $("#strength").change(function() {
                var test = $(this).val();
                if (test == 'Understand lesson well') {
                    $("#weakness1").attr("disabled", "disabled");
                    $("#weakness2, #weakness3, #weakness4, #weakness5").removeAttr("disabled");
                }
                if (test == 'Find time to finish assignment') {
                    $("#weakness2").attr("disabled", "disabled");
                    $("#weakness1, #weakness3, #weakness4, #weakness5").removeAttr("disabled");
                }
                if (test == 'Work with classmates') {
                    $("#weakness3").attr("disabled", "disabled");
                    $("#weakness1, #weakness2, #weakness4, #weakness5").removeAttr("disabled");
                }
                if (test == 'Develop confidence in discussion') {
                    $("#weakness4").attr("disabled", "disabled");
                    $("#weakness1, #weakness2, #weakness3, #weakness5").removeAttr("disabled");
                }
                if (test == 'Balance between leisure and studies') {
                    $("#weakness5").attr("disabled", "disabled");
                    $("#weakness1, #weakness2, #weakness3, #weakness4").removeAttr("disabled");
                }
            });

            // Academic disable/enable weakness
            if ($("#weakness").val() == 'Understand lesson well') {
                $("#strength1").attr("disabled", "disabled");
                $("#strength2, #strength3, #strength4, #strength5").removeAttr("disabled");
            }
            if ($("#weakness").val() == 'Find time to finish assignment') {
                $("#strength2").attr("disabled", "disabled");
                $("#strength1, #strength3, #strength4, #strength5").removeAttr("disabled");
            }
            if ($("#weakness").val() == 'Work with classmates') {
                $("#strength3").attr("disabled", "disabled");
                $("#strength1, #strength2, #strength4, #strength5").removeAttr("disabled");
            }
            if ($("#weakness").val() == 'Develop confidence in discussion') {
                $("#strength4").attr("disabled", "disabled");
                $("#strength1, #strength2, #strength3, #strength5").removeAttr("disabled");
            }
            if ($("#weakness").val() == 'Balance between leisure and studies') {
                $("#strength5").attr("disabled", "disabled");
                $("#strength1, #strength2, #strength3, #strength4").removeAttr("disabled");
            }
            $("#weakness").change(function() {
                var test = $(this).val();
                if (test == 'Understand lesson well') {
                    $("#strength1").attr("disabled", "disabled");
                    $("#strength2, #strength3, #strength4, #strength5").removeAttr("disabled");
                }
                if (test == 'Find time to finish assignment') {
                    $("#strength2").attr("disabled", "disabled");
                    $("#strength1, #strength3, #strength4, #strength5").removeAttr("disabled");
                }
                if (test == 'Work with classmates') {
                    $("#strength3").attr("disabled", "disabled");
                    $("#strength1, #strength2, #strength4, #strength5").removeAttr("disabled");
                }
                if (test == 'Develop confidence in discussion') {
                    $("#strength4").attr("disabled", "disabled");
                    $("#strength1, #strength2, #strength3, #strength5").removeAttr("disabled");
                }
                if (test == 'Balance between leisure and studies') {
                    $("#strength5").attr("disabled", "disabled");
                    $("#strength1, #strength2, #strength3, #strength4").removeAttr("disabled");
                }
            });
            //enable disable decide to enroll others input
            if ($('#decideToEnroll').val() == "Others")
            {
                $("#decideToEnrollOthers").removeAttr("disabled");
            }
            else
            {
                $("#decideToEnrollOthers").attr("disabled", "disabled");
            }
            $("#decideToEnroll").change(function() {
                var test = $(this).val();
                if (test == 'Others') {
                    $("#decideToEnrollOthers").removeAttr("disabled");
                }
                else{
                    $("#decideToEnrollOthers").attr("disabled", "disabled");
                }
            });

            //enable disable factor influenced others input
            if ($('#factorInfluenced').val() == "Others")
            {
                $("#factorInfluencedOthers").removeAttr("disabled");
            }
            else
            {
                $("#factorInfluencedOthers").attr("disabled", "disabled");
            }
            $("#factorInfluenced").change(function() {
                var test = $(this).val();
                if (test == 'Others') {
                    $("#factorInfluencedOthers").removeAttr("disabled");
                }
                else{
                    $("#factorInfluencedOthers").attr("disabled", "disabled");
                }
            });
        });
    </script>
    @endsection
