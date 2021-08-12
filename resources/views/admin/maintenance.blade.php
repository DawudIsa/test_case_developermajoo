<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Majoo Teknologi Indonesia - Product Order</title>
	<link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/css/datepicker3.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="admin/js/html5shiv.js"></script>
	<script src="admin/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!--header-->
	@include("admin/header")
	<!--/.header-->

	<!--sidebar-->
	@include("admin/sidebar")
	<!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Data Pemesanan</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Pemesanan</h1>
			</div>
		</div><!--/.row-->
		
        <div class="row">
			<div class="col-lg-12">
				<h2>Alerts</h2>
				<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Kami akan segere kembali! <br> Layanan ini sedang dalam perbaikan. Tenang, kami sedang lakukan yang terbaik dan akan kembali secepatnya!<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
			</div>
		</div><!--/.row-->

		
		<div class="row">
			<!--Main Content-->
            
            <!--footer-->
			@include("admin/footer")
            <!--/footer-->
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<script src="{{ asset('admin/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('admin/js/chart.min.js') }}"></script>
	<script src="{{ asset('admin/js/chart-data.js') }}"></script>
	<script src="{{ asset('admin/js/easypiechart.js') }}"></script>
	<script src="{{ asset('admin/js/easypiechart-data.js') }}"></script>
	<script src="{{ asset('admin/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset('admin/js/custom.js') }}"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>