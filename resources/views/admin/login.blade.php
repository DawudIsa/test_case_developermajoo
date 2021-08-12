<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Majoo Teknologi Indonesia - Login</title>
	<link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/css/datepicker3.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="{{ asset('js/html5shiv.js') }}"></script>
	<script src="{{ asset('js/respond.min.js') }}"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				
				<div class="panel-body">
					{{-- Error Alert --}}
					@if (session('error'))
							<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> {{session('error')}} <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
					@endif
					@if (!empty($notif))
							<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> {{$notif}} <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
					@endif
					<form role="form" action="{{url('proses_login')}}" method="post">
					{{ csrf_field() }}
						<fieldset>
							<div class="form-group">
								<span class="error">{{ $errors->first('username') }}</span>
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
							</div>
							<div class="form-group">
								<span class="error">{{ $errors->first('password') }}</span>
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<!-- <div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div> -->
							<button type="submit" class="btn btn-primary">Login</button></fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
