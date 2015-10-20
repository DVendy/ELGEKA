@extends('base')

@section('extraStyle')
<title>ELGEKA - Pasien</title>
<style type="text/css">
	.page-tabs > .nav-pills, .page-tabs > .nav-tabs {
		margin-bottom: 10px;
	}
</style>
@stop

@section('headerExtraScript')
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
@stop

@section('pageTitle')
Pasien
@stop

@section('pageSubtitle')
Detail pasien
@stop

@section('body')
<div class="breadcrumb-line">
	<ul class="breadcrumb">
		<li><a href="{{ URL('/') }}">Home</a></li>
		<li><a href="{{ URL('pasien') }}">Pasien</a></li>
		<li class="active">Detail</li>
	</ul>
</div>
<div class="tabbable page-tabs">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#activity" data-toggle="tab"><i class="icon-info"></i> Detail Pasien</a></li>
		<li><a href="#tasks" data-toggle="tab"><i class="icon-user"></i> Biodata</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active fade in" id="activity">
			<div class="row">
				<div class="col-sm-6">
					<h2>{{ $pasien->nama_pasien }}</h2>
					<h3>Penyakit</h3>
					<p>{{ isset($pasien->penyakit) ? $pasien->penyakit->nama_penyakit : '-' }}</p>
					<h3>Rumah Sakit</h3>
					<p>{{ isset($pasien->rs) ? $pasien->rs->nama_rs : '-' }}</p>
					<h3>Dokter</h3>
					@if(isset($pasien->dokter))
					@foreach($pasien->dokter as $dokter)
					<p>- {{ $dokter->nama_dokter }}</p>
					@endforeach
					@else
					<p>-</p>
					@endif
					<h3>Obat</h3>
					@if(isset($pasien->obat))
					@foreach($pasien->obat as $obat)
					<p>- {{ $obat->nama_obat }}</p>
					@endforeach
					@else
					<p>-</p>
					@endif
					<h3>Asuransi</h3>
					<p>{{ isset($pasien->asuransi) ? $pasien->asuransi->nama_asuransi : '-' }}</p>
				</div>
				<div class="col-sm-6">
					<ul class="info-blocks">
						<li class="bg-primary">
							<div class="top-info"><a data-toggle="modal" role="button" href="#iconified_modal">New Pasien</a><small>create new pasien</small></div>
							<a data-toggle="modal" role="button" href="#iconified_modal"><i class="icon-user2"></i></a><span class="bottom-info bg-danger"></span>
						</li>
						<li class="bg-primary">
							<div class="top-info"><a data-toggle="modal" role="button" href="#iconified_modal">New Pasien</a><small>create new pasien</small></div>
							<a data-toggle="modal" role="button" href="#iconified_modal"><i class="icon-user2"></i></a><span class="bottom-info bg-danger"></span>
						</li>
						<li class="bg-primary">
							<div class="top-info"><a data-toggle="modal" role="button" href="#iconified_modal">New Pasien</a><small>create new pasien</small></div>
							<a data-toggle="modal" role="button" href="#iconified_modal"><i class="icon-user2"></i></a><span class="bottom-info bg-danger"></span>
						</li>
						<li class="bg-primary">
							<div class="top-info"><a data-toggle="modal" role="button" href="#iconified_modal">New Pasien</a><small>create new pasien</small></div>
							<a data-toggle="modal" role="button" href="#iconified_modal"><i class="icon-user2"></i></a><span class="bottom-info bg-danger"></span>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="tasks">
			
		</div>
	</div>
</div>

@stop

@section('footerExtraScript')

@stop