@extends('layouts.user')
@section('sidebar')
  <ul class="sidebar-menu" data-widget="tree" data-follow-link='true'>
    <li class="header">MAIN NAVIGATION</li>
    <li class="active treeview">
      <a href="#">
        <i class="fa fa-user"></i> <span>Profile</span>
      </a>
    </li>
    <li class="treeview">
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
    @if($array['exitInterviewTaken'] == 'true')
          <li class="treeview">
              <a href="#">
                  <i class="fa fa-graguation-cap"></i> <span>Exit Interview</span>
              </a>
          </li>
        @endif
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
  </ul>
@endsection
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Profile
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> User</a></li>
    <li class="active">Profile</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="
              @if ($array['avatar'] == 'defaultAvatar.png')
                {{asset('img/defaultAvatar.png')}}
              @else
                {{asset(Storage::url($array['avatar']))}}
              @endif
              " alt="User profile picture">
              <h3 class="profile-username text-center">{{$array['personal_data']['firstName']}} {{$array['personal_data']['lastName']}}</h3>
              <p class="text-muted text-center">{{$array['level']}}</p>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Student No.</b> <span class="pull-right">{{$array['id']}}</span>
                </li>
                <li class="list-group-item">
                  <b>School Year</b> <span class="pull-right">{{$array['schoolYear']}}</span>
                </li>
                @if($array['level'] == 'College' || $array['level'] == 'Grade 12' || $array['level'] == 'Grade 11')
                  <li class="list-group-item">
                    <b>Semester</b> <span class="pull-right">{{$array['semester']}}</span>
                  </li>
                @endif
                @if($array['level'] == 'College')
                  <li class="list-group-item">
                    <b>Course</b> <span class="pull-right">{{$array['course']}}</span>
                  </li>
                @endif
                @if($array['level'] == 'Grade 12' || $array['level'] == 'Grade 11')
                  <li class="list-group-item">
                    <b>Strand</b> <span class="pull-right">{{$array['strand']}}</span>
                  </li>
                @endif
                @if($array['level'] == 'Grade 7' || $array['level'] == 'Grade 8' || $array['level'] == 'Grade 9' || $array['level'] == 'Grade 10')
                  <li class="list-group-item">
                    <b>Year</b> <span class="pull-right">{{$array['year']}}</span>
                  </li>
                  <li class="list-group-item">
                    <b>Section</b> <span class="pull-right">{{$array['section']}}</span>
                  </li>
                @endif
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#personalData" data-toggle="tab">Personal Data</a></li>
              <li><a href="#familyBackground" data-toggle="tab">Family Background</a></li>
                <li><a href="#siblings" data-toggle="tab">Siblings</a></li>
              <li><a href="#educationalBackground" data-toggle="tab">Educational Background</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="personalData">
                <div class="row">
                  <div class="col-md-4 mb-3">
                    <div class="form-group">
                      <b>First Name: </b><span>{{$array['personal_data']['firstName']}}</span>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="form-group">
                      <b>Middle Name: </b><span>{{$array['personal_data']['middleName']}}</span>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="form-group">
                      <b>Last Name: </b><span>{{$array['personal_data']['lastName']}}</span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <b>Date of Birth: </b><span>{{$array['personal_data']['dateOfBirth']}}</span>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <b>Place of Birth: </b><span>{{$array['personal_data']['placeOfBirth']}}</span>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <b>Age: </b><span>{{$array['personal_data']['age']}}</span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <b>Gender: </b><span>{{$array['personal_data']['gender']}}</span>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <b>Civil Status: </b><span>{{$array['personal_data']['civilStatus']}}</span>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <b>Nationality: </b><span>{{$array['personal_data']['nationality']}}</span>
                    </div>
                  </div>
                </div>
                @if($array['personal_data']['civilStatus'] == 'Married')
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <b>Name of Spouse: </b><span>{{$array['personal_data']['nameOfSpouse']}}</span>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <b>Spouse Occupation: </b><span>{{$array['personal_data']['spouseOccupation']}}</span>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <b>Number of Children: </b><span>{{$array['personal_data']['numberOfChildren']}}</span>
                      </div>
                    </div>
                  </div>
                @endif
                @if($array['level'] == 'College' || $array['level'] == 'Grade 12' || $array['level'] == 'Grade 11' || $array['level'] == 'Grade 10' || $array['level'] == 'Grade 9' || $array['level'] == 'Grade 8' || $array['level'] == 'Grade 7')
                  <h5>Current Adress</h5>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <b>Number: </b><span>{{$array['personal_data']['currentAddressNo']}}</span>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <b>Street/Zone: </b><span>{{$array['personal_data']['currentAddressStreet']}}</span>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <b>Municipality: </b><span>{{$array['personal_data']['currentAddressMun']}}</span>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <b>Province: </b><span>{{$array['personal_data']['currentAddressProv']}}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <h5>Permanent Address</h5>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <b>Number: </b><span>{{$array['personal_data']['permanentAddressNo']}}</span>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <b>Street/Zone: </b><span>{{$array['personal_data']['permanentAddressStreet']}}</span>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <b>Municipality: </b><span>{{$array['personal_data']['permanentAddressMun']}}</span>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <b>Province: </b><span>{{$array['personal_data']['permanentAddressProv']}}</span>
                    </div>
                  </div>
                </div>
                <br>
                @if($array['level'] == 'College' || $array['level'] == 'Grade 12' || $array['level'] == 'Grade 11' || $array['level'] == 'Grade 10' || $array['level'] == 'Grade 9' || $array['level'] == 'Grade 8' || $array['level'] == 'Grade 7')
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <b>Landline: </b><span>{{$array['personal_data']['landline']}}</span>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <b>Cell Phone Number: </b><span>{{$array['personal_data']['cellPhoneNo']}}</span>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <b>Do you work: </b><span>{{$array['personal_data']['doYouWork']}}</span>
                      </div>
                    </div>
                  </div>
                @endif
                @if($array['personal_data']['doYouWork'] == 'Yes')
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <b>Name of Firm: </b><span>{{$array['personal_data']['nameOfFirm']}}</span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <b>Address of Firm: </b><span>{{$array['personal_data']['addressOfFirm']}}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <b>Email: </b><span>{{$array['email']}}</span>
                    </div>
                  </div>
                  @if($array['level'] == 'College' || $array['level'] == 'Grade 12' || $array['level'] == 'Grade 11' || $array['level'] == 'Grade 10' || $array['level'] == 'Grade 9' || $array['level'] == 'Grade 8' || $array['level'] == 'Grade 7')
                    <div class="col-md-6">
                      <div class="form-group">
                        <b>Who Sends You to School: </b><span>{{$array['personal_data']['sendsToSchool']}}</span>
                      </div>
                    </div>
                  @endif
                </div>
                @if($array['personal_data']['sendsToSchool'] == 'Others')
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <b>Sender Name: </b><span>{{$array['personal_data']['sendName']}}</span>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <b>Sender Relation: </b><span>{{$array['personal_data']['sendRelation']}}</span>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <b>Sender Occupation: </b><span>{{$array['personal_data']['sendOccupation']}}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <h5>Authorize person to contact in case of emergency/conference(if parents are unavailable).</h5>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <b>Name: </b><span>{{$array['personal_data']['authName']}}</span>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <b>Relationship: </b><span>{{$array['personal_data']['authRelationship']}}</span>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <b>Contact: </b><span>{{$array['personal_data']['authContact']}}</span>
                    </div>
                  </div>
                </div>
                @if($array['level'] == 'College' || $array['level'] == 'Grade 12' || $array['level'] == 'Grade 11' || $array['level'] == 'Grade 10' || $array['level'] == 'Grade 9' || $array['level'] == 'Grade 8' || $array['level'] == 'Grade 7')
                  <span>Authorize Person Permanent Address</span>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <b>Number: </b><span>{{$array['personal_data']['authPermanentNo']}}</span>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <b>Street/Zone: </b><span>{{$array['personal_data']['authPermanentStreet']}}</span>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <b>Municipality: </b><span>{{$array['personal_data']['authPermanentMun']}}</span>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <b>Province: </b><span>{{$array['personal_data']['authPermanentProv']}}</span>
                      </div>
                    </div>
                  </div>
                  <br>
                @endif
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <b>Talents/Skills: </b><span>{{$array['personal_data']['talents']}}</span>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <b>Co-Curricular Activity 1: </b><span>{{$array['personal_data']['curricular1']}}</span>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <b>Co-Curricular Activity 2: </b><span>{{$array['personal_data']['curricular2']}}</span>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <b>Co-Curricular Activity 3: </b><span>{{$array['personal_data']['curricular3']}}</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="familyBackground">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <b>Father Name: </b><span>{{$array['family_background']['fatherName']}}</span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      @if($array['family_background']['fatherDeceased'] == 'True')
                        <b>Deceased</b>
                      @endif
                    </div>
                  </div>
                </div>
                @if($array['family_background']['fatherDeceased'] == 'False')
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <b>Father Occupation: </b><span>{{$array['family_background']['fatherName']}}</span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="form-group">
                          <b>Father Contact Number: </b><span>{{$array['family_background']['fatherContactNo']}}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <b>Mother Name: </b><span>{{$array['family_background']['motherName']}}</span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      @if($array['family_background']['motherDeceased'] == 'True')
                        <b>Deceased</b>
                      @endif
                    </div>
                  </div>
                </div>
                @if($array['family_background']['motherDeceased'] == 'False')
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <b>Mother Occupation: </b><span>{{$array['family_background']['motherName']}}</span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="form-group">
                          <b>Mother Contact Number: </b><span>{{$array['family_background']['motherContactNo']}}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  @if($array['family_background']['physicalProblems'] != NULL)
                    <div class="col-md-6">
                      <div class="form-group">
                        <b>Physical Problems: </b><span>{{$array['family_background']['physicalProblems']}}</span>
                      </div>
                    </div>
                  @endif
                  @if($array['family_background']['allergies'] != NULL)
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="form-group">
                          <b>Allergies: </b><span>{{$array['family_background']['allergies']}}</span>
                        </div>
                      </div>
                    </div>
                  @endif
                  @if($array['family_background']['treatmentSought'] != NULL)
                    <div class="col-md-6">
                      <div class="form-group">
                        <b>Treatment Sought: </b><span>{{$array['family_background']['treatmentSought']}}</span>
                      </div>
                    </div>
                  @endif
                  @if($array['family_background']['medicineTaken'] != NULL)
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="form-group">
                          <b>Medicine Taken: </b><span>{{$array['family_background']['medicineTaken']}}</span>
                        </div>
                      </div>
                    </div>
                  @endif
                </div>
              </div>
              <!-- /.tab-pane -->

                <!-- /.tab-pane -->
                <div class="tab-pane" id="siblings">
                    <table class="table table-hover table-responsive">
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Educational Level</th>
                        </tr>
                        @foreach($array['sibling'] as $sibling)
                            <tr>
                                <td>{{$sibling['name']}}</td>
                                <td>{{$sibling['age']}}</td>
                                <td>{{$sibling['educationalLevel']}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
              <div class="tab-pane" id="educationalBackground">
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
                        <div class="form-group">
                          <div class="form-group">
                            <span>{{$array['educational_background']['elemNameOfSchool']}}</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="form-group">
                          <div class="form-group">
                            <span>{{$array['educational_background']['elemAddressOfSchool']}}</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="form-group">
                          <div class="form-group">
                            <span>{{$array['educational_background']['elemYearsOfAttendance']}}</span>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        High School
                      </td>
                      <td>
                        <div class="form-group">
                          <div class="form-group">
                            <span>{{$array['educational_background']['highNameOfSchool']}}</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="form-group">
                          <div class="form-group">
                            <span>{{$array['educational_background']['highAddressOfSchool']}}</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="form-group">
                          <div class="form-group">
                            <span>{{$array['educational_background']['highYearsOfAttendance']}}</span>
                          </div>
                        </div>
                      </td>
                    </tr>
                    @if($array['level'] == 'College' || $array['level'] == 'Grade 12' || $array['level'] == 'Grade 11' || $array['level'] == 'Grade 10' || $array['level'] == 'Grade 9' || $array['level'] == 'Grade 8' || $array['level'] == 'Grade 7')
                      <tr>
                        <td>
                          College
                        </td>
                        <td>
                          <div class="form-group">
                            <div class="form-group">
                              <span>{{$array['educational_background']['collegeNameOfSchool']}}</span>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="form-group">
                            <div class="form-group">
                              <span>{{$array['educational_background']['collegeAddressOfSchool']}}</span>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="form-group">
                            <div class="form-group">
                              <span>{{$array['educational_background']['collegeYearsOfAttendance']}}</span>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Graduate Studies/<br>
                          Vocational Course
                        </td>
                        <td>
                          <div class="form-group">
                            <div class="form-group">
                              <span>{{$array['educational_background']['gradNameOfSchool']}}</span>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="form-group">
                            <div class="form-group">
                              <span>{{$array['educational_background']['gradAddressOfSchool']}}</span>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="form-group">
                            <div class="form-group">
                              <span>{{$array['educational_background']['gradYearsOfAttendance']}}</span>
                            </div>
                          </div>
                        </td>
                      </tr>
                    @endif
                  </table>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <b>Subject you excel the most: </b><span>{{$array['educational_background']['subjectExcel']}}</span>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <b>Subject least excel with: </b><span>{{$array['educational_background']['subjectLeast']}}</span>
                    </div>
                  </div>
                  @if($array['educational_background']['awardsReceived'] != NULL)
                    <div class="col-md-4">
                      <div class="form-group">
                        <b>Awards/Honors Received: </b><span>{{$array['educational_background']['awardsReceived']}}</span>
                      </div>
                    </div>
                  @endif
                </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</section>
<!-- /.content -->
@endsection
