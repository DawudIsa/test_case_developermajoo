<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="{{ asset('admin/asset/img/majoo.png') }}" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Dawud Isa Muhammad</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="{{ url('/admin/product') }}"><em class="fa fa-dashboard">&nbsp;</em> Produk</a></li>
			<!-- <li><a href="{{ url('/buyers') }}"><em class="fa fa-users">&nbsp;</em> Buyer</a></li> -->
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-refresh fa-spin">&nbsp;</em> Transaksi <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="{{ url('/admin/productorder') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Produk Order
					</a></li>
					<!-- <li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Transaksi Perbuyer
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Gift Diamond
					</a></li> -->
				</ul>
			</li>
			<!-- <li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
			<li><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
			<li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
					</a></li>
				</ul>
			</li> -->
			<li><a href="{{url('logout')}}"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div>