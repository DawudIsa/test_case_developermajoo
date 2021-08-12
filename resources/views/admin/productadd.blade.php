<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Majoo Teknologi Indonesia - Product Add</title>
	<link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/css/datepicker3.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="{{ asset('admin/js/html5shiv.js') }}"></script>
	<script src="{{ asset('admin/js/respond.min.js') }}"></script>
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
				<li class="active">Tambah Produk</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tambah Produk</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Data Produk
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						@if (count($errors) > 0)
							@foreach ($errors->all() as $error)
							<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> {{ $error }} <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
                        	@endforeach
						@endif
						@if (!empty($notif))
							<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> {{ $notif }} <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
						@endif
						<div class="col-md-12">
							<form role="form" action="/admin/product/productaddsave" method="post"  enctype="multipart/form-data">
                                {{ csrf_field() }}
								<div class="form-group">
									<label>Nama Produk</label>
									<input class="form-control" name="name_product" placeholder="Isi nama produk">
								</div>
								<div class="form-group">
									<label>Harga Produk</label>
									<input class="form-control" name="price_product" placeholder="Harga produk">
								</div>
                                <div class="form-group">
									<label>Deskripsi Produk</label>
									<textarea class="form-control" rows="6" name="des_product" placeholder="Deskripsi produk"></textarea>
                                </div>
								<div class="form-group">
									<label>File input</label>
									<input type="file" name="file_product">
									<!-- <p class="help-block">Example block-level help text here.</p> -->
								</div>
								
							    <hr>
                                <button type="submit" class="btn btn-primary">Simpan</button>
								<button type="reset" class="btn btn-default">Batal</button>
								
							</form>
						</div>
					</div>
				</div>
			</div><!--/.col-->
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
	
</body>
</html>
