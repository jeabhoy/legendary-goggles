@extends('layouts.admin')
@section('sidebar')
<ul class="sidebar-menu" data-widget="tree" data-follow-link='true'>
  <li class="header">MAIN NAVIGATION</li>
  <li class="active treeview" data-follow-link='TRUE'>
    <a href="#">
      <i class="fa fa-dashboard"></i> <span>Dashboard</span>
    </a>
  </li>
  <li class="treeview">
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
    Dashboard
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Personality Temperament</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="chart-responsive">
                                <canvas id="pieChart" height="150"></canvas>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="chart-legend clearfix">
                                <li><i class="fa fa-circle-o text-red"></i> SanChlor</li>
                                <li><i class="fa fa-circle-o text-green"></i> SanMel</li>
                                <li><i class="fa fa-circle-o text-yellow"></i> SanPhleg</li>
                                <li><i class="fa fa-circle-o text-aqua"></i> ChlorSan</li>
                                <li><i class="fa fa-circle-o text-light-blue"></i> ChlorMel</li>
                                <li><i class="fa fa-circle-o text-gray"></i> ChlorPhleg</li>
                                <li><i class="fa fa-circle-o text-black"></i> MelSan</li>
                                <li><i class="fa fa-circle-o text-purple"></i> MelChlor</li>
                                <li><i class="fa fa-circle-o text-maroon"></i> MelPhleg</li>
                                <li><i class="fa fa-circle-o text-teal"></i> PhlegSan</li>
                                <li><i class="fa fa-circle-o text-fuchsia"></i> PhlegChlor</li>
                                <li><i class="fa fa-circle-o text-lime"></i> PhlegMel</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <div class="col-md-6">

        </div>
    </div>
</section>
<!-- /.content -->
@endsection
@section('scripts')
    <script src="{{asset('bower_components/Chart.js/Chart.js')}}"></script>
    <script>

        // ---------------------------
        // - END MONTHLY SALES CHART -
        // ---------------------------

        // -------------
        // - PIE CHART -
        // -------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d');
        var pieChart       = new Chart(pieChartCanvas);
        var PieData        = [
            {
                value    : {{$personalityTest->where('personality', 'SanChlor')->count()}},
                color    : '#f56954',
                highlight: '#f56954',
                label    : 'SanChlor'
            },
            {
                value    : {{$personalityTest->where('personality', 'SanMel')->count()}},
                color    : '#00a65a',
                highlight: '#00a65a',
                label    : 'SanMel'
            },
            {
                value    : {{$personalityTest->where('personality', 'SanPhleg')->count()}},
                color    : '#f39c12',
                highlight: '#f39c12',
                label    : 'SanPhleg'
            },
            {
                value    : {{$personalityTest->where('personality', 'ChlorSan')->count()}},
                color    : '#00c0ef',
                highlight: '#00c0ef',
                label    : 'ChlorSan'
            },
            {
                value    : {{$personalityTest->where('personality', 'ChlorMel')->count()}},
                color    : '#3c8dbc',
                highlight: '#3c8dbc',
                label    : 'ChlorMel'
            },
            {
                value    : {{$personalityTest->where('personality', 'ChlorPhleg')->count()}},
                color    : '#d2d6de',
                highlight: '#d2d6de',
                label    : 'ChlorPhleg'
            },
            {
                value    : {{$personalityTest->where('personality', 'MelSan')->count()}},
                color    : 'black',
                highlight: 'black',
                label    : 'MelSan'
            },
            {
                value    : {{$personalityTest->where('personality', 'MelChlor')->count()}},
                color    : 'purple',
                highlight: 'purple',
                label    : 'MelChlor'
            },
            {
                value    : {{$personalityTest->where('personality', 'MelPhleg')->count()}},
                color    : 'maroon',
                highlight: 'maroon',
                label    : 'MelPhleg'
            },
            {
                value    : {{$personalityTest->where('personality', 'PhlegSan')->count()}},
                color    : 'teal',
                highlight: 'teal',
                label    : 'PhlegSan'
            },
            {
                value    : {{$personalityTest->where('personality', 'PhlegChlor')->count()}},
                color    : 'fuchsia',
                highlight: 'fuchsia',
                label    : 'PhlegChlor'
            },
            {
                value    :  {{$personalityTest->where('personality', 'PhlegMel')->count()}},
                color    : 'lime',
                highlight: 'lime',
                label    : 'PhlegMel'
            },
        ];
        var pieOptions     = {
            // Boolean - Whether we should show a stroke on each segment
            segmentShowStroke    : true,
            // String - The colour of each segment stroke
            segmentStrokeColor   : '#fff',
            // Number - The width of each segment stroke
            segmentStrokeWidth   : 1,
            // Number - The percentage of the chart that we cut out of the middle
            percentageInnerCutout: 50, // This is 0 for Pie charts
            // Number - Amount of animation steps
            animationSteps       : 100,
            // String - Animation easing effect
            animationEasing      : 'easeOutBounce',
            // Boolean - Whether we animate the rotation of the Doughnut
            animateRotate        : true,
            // Boolean - Whether we animate scaling the Doughnut from the centre
            animateScale         : false,
            // Boolean - whether to make the chart responsive to window resizing
            responsive           : true,
            // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio  : false,
            // String - A legend template
            legendTemplate       : '<ul class=\'<%=name.toLowerCase()%>-legend\'><% for (var i=0; i<segments.length; i++){%><li><span style=\'background-color:<%=segments[i].fillColor%>\'></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>',
    // String - A tooltip template
    tooltipTemplate      : '<%=value %> <%=label%>'
  };
  // Create pie or douhnut chart
  // You can switch between pie and douhnut using the method below.
  pieChart.Doughnut(PieData, pieOptions);
  // -----------------
  // - END PIE CHART -
  // -----------------


    </script>
@endsection
