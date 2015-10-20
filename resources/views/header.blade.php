	<div class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><h4>Elgeka</h4></a>
			<a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar"><span class="sr-only">Toggle navigation</span><i class="icon-paragraph-justify2"></i></button>
		</div>
	</div>
	<!-- /navbar -->
	<!-- Page container -->
	<div class="page-container">
		<!-- Sidebar -->
		<div class="sidebar collapse">
			<div class="sidebar-content">
			<!-- User dropdown -->
				<div class="user-menu dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="images/demo/users/face3.png" alt="">
						<div class="user-info">Nama<span>Role</span></div>
					</a>
					<div class="popup dropdown-menu dropdown-menu-right">
						<div class="thumbnail" style="padding-bottom: 0px;">
							<div class="caption text-center">
								<h6 style="text-transform: capitalize;">Nama <small>Role- <span style="text-transform: none;">Email</span></small></h6>
							</div>
							<hr style="margin-bottom: 0;">
						</div>
						<div class="row">
							<div class="user-logout col-md-6" style="padding:10px; padding-left: 22px;">
								<a href="#" class="btn btn-success"><i class="icon-pencil3"></i> Update</a>
							</div>
							<div class="user-logout col-md-6" style="padding:10px;">
								<a href="#" class="btn btn-danger"><i class="icon-lock"></i> Logout</a>
							</div>
						</div>
					</div>
				</div> 
				<!-- /user dropdown -->
				<!-- Main navigation -->
				<ul class="navigation">
				<li @if(Request::is('dashboard*')) class="active" @endif ><a href="{{ URL('dashboard') }}"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>  
				<li @if(Request::is('admin*')) class="active" @endif ><a href="{{ URL('admin') }}"><span>Admin</span> <i class="icon-user4"></i></a></li>  
				<?php
				$master = false;
				if(Request::is('pasien*') || Request::is('obat*') || Request::is('asuransi*') || Request::is('dokter*') || Request::is('indikasi*') || Request::is('rs*') || Request::is('provinsi*') || Request::is('kotakab*') || Request::is('kecamatan*') || Request::is('kelurahan*') || Request::is('penyakit*'))
				$master = true;
				?>
				<li><a href="#" class="expand" @if($master) id="second-level" @endif ><span>Olah Master</span> <i class="icon-grid3"></i></a>
				<ul style="display: none;">
					<li @if(Request::is('pasien*')) class="active" @endif ><a href="{{ URL('pasien') }}"><span>Pasien</span> <i class="icon-user2"></i></a></li>  
					<li @if(Request::is('obat*')) class="active" @endif ><a href="{{ URL('obat') }}"><span>Obat</span> <i class="icon-inject"></i></a></li>
					<li @if(Request::is('penyakit*')) class="active" @endif ><a href="{{ URL('penyakit') }}"><span>Penyakit</span> <i class="icon-heart6"></i></a></li>
					<li @if(Request::is('asuransi*')) class="active" @endif ><a href="{{ URL('asuransi') }}"><span>Asuransi</span> <i class="icon-file4"></i></a></li>
					<li @if(Request::is('dokter*')) class="active" @endif ><a href="{{ URL('dokter') }}"><span>Dokter</span> <i class="icon-glasses3"></i></a></li>
					<li @if(Request::is('rs*')) class="active" @endif ><a href="{{ URL('rs') }}"><span>Rumah Sakit</span> <i class="icon-home5"></i></a></li>
					<li @if(Request::is('kelurahan*')) class="active" @endif ><a href="{{ URL('kelurahan') }}"><span>Kelurahan</span> <i class="icon-home"></i></a></li>
					<li @if(Request::is('kecamatan*')) class="active" @endif ><a href="{{ URL('kecamatan') }}"><span>Kecamatan</span> <i class="icon-home2"></i></a></li>
					<li @if(Request::is('kotakab*')) class="active" @endif ><a href="{{ URL('kotakab') }}"><span>Kota / kabupaten</span> <i class="icon-home6"></i></a></li>
					<li @if(Request::is('provinsi*')) class="active" @endif ><a href="{{ URL('provinsi') }}"><span>Provinsi</span> <i class="icon-home7"></i></a></li>
				</ul>
				</li>

				<li @if(Request::is('artikel*')) class="active" @endif ><a href="#"><span>Artikel</span> <i class="icon-newspaper"></i></a></li>
				<li @if(Request::is('laporan*')) class="active" @endif ><a href="#"><span>Laporan</span> <i class="icon-clipboard"></i></a></li>
				</ul>
			<!-- /main navigation -->
			</div>
		</div>
		<!-- /sidebar -->
		<!-- Page content -->
		<div class="page-content">
		<!-- Page header -->
		<div class="page-header">
			<div class="page-title">
				<h3>@section('pageTitle') Dashboard @show<small>@section('pageSubtitle') Statistik @show</small></h3>
			</div>
		</div>