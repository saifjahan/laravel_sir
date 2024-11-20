@extends('backend.layouts.app')

@section('css')
<!-- Favicon -->
<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<!-- Morris Charts CSS -->
    <link href="{{asset('/vendors/bower_components/morris.js/morris.css')}}" rel="stylesheet" type="text/css"/>
	
	<!-- vector map CSS -->
	<link href="{{asset('/vendors/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" type="text/css"/>
	
	<!-- Data table CSS -->
	<link href="{{asset('/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
	
	<link href="{{asset('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">
	
	<!-- Custom CSS -->
	<link href="{{asset('/dist/css/style.css')}}" rel="stylesheet" type="text/css">
	@endsection

@section('content')
<div class="container-fluid">
				
				<!-- Title -->
				<div class="row heading-bg  bg-yellow">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-light">demographical</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>dashboard</span></a></li>
							<li class="active"><span>demographical</span></li>
						</ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				<!-- Row -->
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Literacy</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="sm-graph-box">
										<div class="row">
											<div class="col-xs-6">
												<div id="sparkline_1"></div>
											</div>
											<div class="col-xs-6">
												<div class="counter-wrap text-right">
													<span class="counter-cap"><i class="fa  fa-level-up txt-success"></i></span><span class="counter">15</span><span>%</span>
												</div>	
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Population</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="sm-graph-box">
										<div class="row">
											<div class="col-xs-6">
												<div id="sparkline_2"></div>
											</div>
											<div class="col-xs-6">
												<div class="counter-wrap text-right">
													<span class="counter-cap"><i class="fa  fa-level-up txt-success"></i></span><span class="counter">10</span><span>m</span>
												</div>	
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">	
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Animal growth</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="sm-graph-box">
										<div class="row">
											<div class="col-xs-6">
												<div id="sparkline_6"></div>
											</div>
											<div class="col-xs-6">
												<div class="counter-wrap text-right">
													<span class="counter-cap"><i class="fa  fa-level-down txt-danger"></i></span><span class="counter">3</span><span>%</span>
												</div>	
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">	
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">total waste</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="sm-graph-box">
										<div class="row">
											<div class="col-xs-6">
												<div id="sparkline_7"></div>
											</div>
											<div class="col-xs-6">
												<div class="counter-wrap text-right">
													<span class="counter-cap"><i class="fa  fa-level-down txt-danger"></i></span><span class="counter">1122</span>
												</div>	
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				<!-- Row -->
				<div class="row">
					<div class="col-lg-12">
                        <div class="panel panel-default card-view">
							<div class="panel-heading">
								<h3 style="text-alin: center"> welcome dashboard</h3>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<img src="{{asset('images/welcome.jpg')}}" alt="" style="width: 100%">
									
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<!-- /Row -->
				
				
				
				
			</div>



@endsection

@section('js')


 <!-- jQuery -->
 <script src="{{asset('vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- Vector Maps JavaScript -->
<script src="{{asset('vendors/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('vendors/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('dist/js/vectormap-data.js')}}"></script>

<!-- simpleWeather JavaScript -->
<script src="{{asset('vendors/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js')}}"></script>
<script src="{{asset('dist/js/simpleweather-data.js')}}"></script>

<!-- Data table JavaScript -->
<script src="{{asset('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{asset('dist/js/jquery.slimscroll.js')}}"></script>

<!-- Fancy Dropdown JS -->
<script src="{{asset('dist/js/dropdown-bootstrap-extended.js')}}"></script>

<!-- Sparkline JavaScript -->
<script src="{{asset('vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{asset('vendors/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/morris.js/morris.min.js')}}"></script>
<script src="{{asset('dist/js/morris-data.js')}}"></script>

<!-- ChartJS JavaScript -->
<script src="{{asset('vendors/chart.js/Chart.min.js')}}"></script>

<!-- Jquery Toast JavaScript -->
<script src="{{asset('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>

<!-- Init JavaScript -->
<script src="{{asset('dist/js/init.js')}}"></script>
<script src="{{asset('dist/js/dashboard2-data.js')}}"></script>
@endsection