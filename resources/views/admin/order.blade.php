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
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Data Produk Pemesanan
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<!-- <li><a href="{{ url('admin/product/productadd') }}">
												<em class="fa fa-user-plus"></em> Tambah Produk
											</a></li> -->
											<!--<li class="divider"></li>
											 <li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li> -->
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						
						<table class="table table-bordered table-striped">
                            <tr>
                                <th>No. </th>
                                <th>Tanggal Transaksi </th>
                                <th>Nama Produk </th>
                                <th>Nama Pemesan </th>
                                <th>No HP Pemesan </th>
                                <th>Total Harga Pesanan </th>
                                <th width="170px">Aksi </th>
                            </tr>
                            <!-- <tr>
                                <td>1 </td>
                                <td>Belum terisi</td>
                                <td>Wahyu Pratama</td>
                                <td>082125652405</td>
                                <td>BANK PERMATA</td>
                                <td align="center">10 <em class="fa fa-diamond"></em></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-info"><em class="fa fa-edit"></em> Edit </button>
                                    <button type="button" class="btn btn-sm btn-danger"><em class="fa fa-user-times"></em> Banned </button>
                                </td>
                            </tr> -->
							<?php $no = 1;?>
							@foreach($product_views as $p)
							<tr>
                                <td>{{$no++}}</td>
                                <td>{{ $p->product_transaction_date }}</td>
                                <td>{{ $p->product_name}}</td>
                                <td>{{ $p->product_transaction_order_name }}</td>
                                <td>{{ $p->product_transaction_no_handphone }}</td>
                                <td>Rp. {{ number_format($p->product_transaction_total_price,0, ',', '.') }}</td>
                                <td>
                                    <a href="{{ url('/admin/maintenance') }}" class="btn btn-sm btn-success"><em class="fa fa-send"></em> Kirim </a>
                                    <a href="{{ url('/admin/maintenance') }}" class="btn btn-sm btn-danger"><em class="fa fa-trash"></em> Cancel </a>
                                </td>
                            </tr>
							@endforeach
                        </table>
					</div>
				</div>
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