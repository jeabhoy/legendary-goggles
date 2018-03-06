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
      Structured Interview
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Structured Interview</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        @if(Auth::user()->level == 'College' && Auth::user()->exitInterviewTaken == 'False')
          @include('user.components.testAlert')
        @endif
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            @if($array['level'] == 'College' || $array['level'] == 'Grade 12' || $array['level'] == 'Grade 11' || $array['level'] == 'Grade 10' || $array['level'] == 'Grade 9' || $array['level'] == 'Grade 8' || $array['level'] == 'Grade 7')
              <li class="active"><a href="#personal" data-toggle="tab">Personal</a></li>
            @endif
            <li @if($array['level'] == 'Grade 1' || $array['level'] == 'Grade 2' || $array['level'] == 'Grade 3' || $array['level'] == 'Grade 4' || $array['level'] == 'Grade 5' || $array['level'] == 'Grade 6')
             class="active"
            @endif><a href="#interpersonal" data-toggle="tab">Interpersonal</a></li>
            <li><a href="#academic" data-toggle="tab">Academic</a></li>
            @if($array['exitInterviewTaken'] == 'True')
              <li><a href="#exitInterview" data-toggle="tab">Exit Interview</a></li>
            @endif
          </ul>
          <div class="tab-content">
            @if($array['level'] == 'College' || $array['level'] == 'Grade 12' || $array['level'] == 'Grade 11' || $array['level'] == 'Grade 10' || $array['level'] == 'Grade 9' || $array['level'] == 'Grade 8' || $array['level'] == 'Grade 7')
              <div class="active tab-pane" id="personal">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <b>One positive and negative characteristics that describe you best: </b><span>{{$array['interview']['characteristics']}}</span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <b>What concerns you the most: </b><span>{{$array['interview']['concern']}}</span>
                    </div>
                  </div>
                </div>
              </div>
            @endif
            <!-- /.tab-pane -->
            <div class="
            @if($array['level'] == 'Grade 1' || $array['level'] == 'Grade 2' || $array['level'] == 'Grade 3' || $array['level'] == 'Grade 4' || $array['level'] == 'Grade 5' || $array['level'] == 'Grade 6')
             active
            @endif tab-pane" id="interpersonal">
              <h5>How well do you get along with the following</h5>
              <div class="row">
                <div class="col-md-2 col-md-offset-1">
                  <div class="form-group">
                    <b>Father: </b><span>{{$array['interview']['fatherInter']}}</span>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <b>Mother: </b><span>{{$array['interview']['motherInter']}}</span>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <b>Siblings: </b><span>{{$array['interview']['siblingsInter']}}</span>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <b>Relatives: </b><span>{{$array['interview']['relativesInter']}}</span>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <b>Friends: </b><span>{{$array['interview']['friendsInter']}}</span>
                  </div>
                </div>
                <div class="col-md-1">
                </div>
              </div>
              <div class="form-group">
                <b>Father Description</b>
                <div class="row">
                  <div class="col-lg-12">
                    <span>{{$array['interview']['describeFather']}}</span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <b>Mother Description</b>
                <div class="row">
                  <div class="col-md-12">
                    <span>{{$array['interview']['describeMother']}}</span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <b>Family Description</b>
                <div class="row">
                  <div class="col-md-12">
                    <span>{{$array['interview']['describeFamily']}}</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="academic">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <b>Strength: </b><span>{{$array['interview']['radioStrength']}}</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <b>Weakness: </b><span>{{$array['interview']['radioWeakness']}}</span>
                  </div>
                </div>
              </div>
              @if($array['level'] == 'College' || $array['level'] == 'Grade 12' || $array['level'] == 'Grade 11' || $array['level'] == 'Grade 10' || $array['level'] == 'Grade 9' || $array['level'] == 'Grade 8' || $array['level'] == 'Grade 7')
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-12">
                          <b>What made you decide to enroll in Panpacific University North Philippines:</b>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          @if($array['interview']['decideEnroll'] == 'Others')
                            <span>{{$array['interview']['otherDecide']}}</span>
                          @else
                            <span>{{$array['interview']['decideEnroll']}}</span>
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-12">
                          <b>What factor influenced you to take the course you enrolled:</b>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          @if($array['interview']['factorInfluenced'] == 'Others')
                            <span>{{$array['interview']['otherFactor']}}</span>
                          @else
                            <span>{{$array['interview']['factorInfluenced']}}</span>
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endif
            </div>
            <!-- /.tab-pane -->
            @if($array['exitInterviewTaken'] == 'True')
              <div class="tab-pane" id="exitInterview">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <b>Department: </b><span>{{$array['exit_interview']['department']}}</span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">Have you attended any other colleges or universities? Which one?</label>
                      <p>{{$array['exit_interview']['attendedOther']}}</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">What attracted you to that school?</label>
                      <p>{{$array['exit_interview']['attracted']}}</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">Why did you choose to study in PUNP?</label>
                      <p>{{$array['exit_interview']['chooseToStudy']}}</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">What are the best parts of your learning experience in PUNP? Why?</label>
                      <p>{{$array['exit_interview']['bestPartsOfPUNP']}}</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">What are the worst parts of your learning experience in PUNP? Why?</label>
                      <p>{{$array['exit_interview']['worstPartsOfPUNP']}}</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">Of all the subjects you took, which were your favorites and why?</label>
                      <p>{{$array['exit_interview']['favoriteSubject']}}</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">Of all the subjects you took, which were your least and why?</label>
                      <p>{{$array['exit_interview']['leastFavoriteSubject']}}</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">What did you like best in the <span>{{$array['exit_interview']['department']}}</span></label>
                      <p>{{$array['exit_interview']['likeBest']}}</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">What did you like least in the <span>{{$array['exit_interview']['department']}}</span></label>
                      <p>{{$array['exit_interview']['likeLeast']}}</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">Did you work while you were in school?</label>
                      <p>{{$array['exit_interview']['workWhileSchool']}}</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">What changes would you like to suggest that we can make in the <span>{{$array['exit_interview']['department']}}</span></label>
                      <p>{{$array['exit_interview']['changesYouSuggest']}}</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">Who is the best instructor for you? Why?</label>
                      <p>{{$array['exit_interview']['bestInstructor']}}</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">Who is the least instructor for you? Why?</label>
                      <p>{{$array['exit_interview']['leastInstructor']}}</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">What are your immediate plans after graduation? Employment? Or Review for the Licensure Examination?</label>
                      <p>{{$array['exit_interview']['immediatePlans']}}</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">If planning to review for the Licensure Examination, would you prefer to enroll at PUNP?</label>
                      <p>{{$array['exit_interview']['review']}}</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">If you choose PUNP, what would be the best way to contact you in future?</label>
                      <p>{{$array['exit_interview']['choosePUNP']}}</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">Give some comments to PUNP negative and positive.</label>
                      <p>{{$array['exit_interview']['comments']}}</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">Any other comments you would care to make?</label>
                      <p>{{$array['exit_interview']['otherComments']}}</p>
                    </div>
                  </div>
                </div>
              </div>
            @endif
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
    </div>
  </section>
@endsection
