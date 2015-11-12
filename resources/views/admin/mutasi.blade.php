@extends('base')

@section('extraStyle')
<title>ELGEKA - Konfirmasi</title>
@stop

@section('headerExtraScript')
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
@stop

@section('pageTitle')
Konfirmasi
@stop

@section('pageSubtitle')
Halaman konfirmasi mutasi
@stop

@section('body')
<div class="breadcrumb-line">
	<ul class="breadcrumb">
		<li><a href="{{ URL('/') }}">Home</a></li>
		<li class="active">Konfirmasi</li>
	</ul>
</div>

@if (Session::has('success'))
<div class="callout callout-success fade in">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<h5>Mutasi berhasil</h5>
	<p>Mutasi telah dikonfirmasi.</p>
</div>
@endif

<div class="tabbable page-tabs">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#penyakit" data-toggle="tab"><i class="icon-heart6"></i> Penyakit<span class="label label-danger">{{ count($penyakit_history) }}</span></a></li>
		<li><a href="#rs" data-toggle="tab"><i class="icon-home5"></i> Rumah Sakit<span class="label label-danger">{{ count($rs_history) }}</span></a></li>
		<li><a href="#dokter" data-toggle="tab"><i class="icon-glasses3"></i> Dokter<span class="label label-danger">{{ count($dokter_history) }}</span></a></li>
		<li><a href="#asuransi" data-toggle="tab"><i class="icon-glasses3"></i> Asuransi<span class="label label-danger">{{ count($asuransi_history) }}</span></a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active fade in" id="penyakit">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h6 class="panel-title"><i class="icon-heart6"></i> Penyakit</h6>
				</div>
				<div class="table-responsive">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th class="col-sm-1">#</th>
								<th>Nama</th>
								<th>Penyakit</th>
								<th>Mutasi ke</th>
								<th>Tanggal</th>
								<th class="col-sm-3">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 1;
							?>
							@foreach($penyakit_history as $key)
							<tr>
								<td>{{ $i}}</td>
								<td>{{ $key->nama_pasien }} <a href="{{ URL('pasien/detail/'.$key->id_pasien) }}" title="Detail"><i class="icon-zoom-in text-success pull-right"></i></a></td>
								<td>{{ $key->asal }}</td>
								<td>{{ $key->tujuan }}</td>
								<td>{{ $key->tgl }}</td>
								<td class="text-center"> 
									<a href="{{ URL('mutasi/penyakit/'.$key->id) }}" class="btn btn-success">Approve</a>
									<a href="#" class="btn btn-danger">Reject</a>
								</td>
							</tr>
							<?php
							$i++;
							?>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="tab-pane fade in" id="rs">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h6 class="panel-title"><i class="icon-home5"></i> Rumah Sakit</h6>
				</div>
				<div class="table-responsive">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th class="col-sm-1">#</th>
								<th>Nama</th>
								<th>Rumah sakit</th>
								<th>Mutasi ke</th>
								<th>Tanggal</th>
								<th class="col-sm-3">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 1;
							?>
							@foreach($rs_history as $key)
							<tr>
								<td>{{ $i}}</td>
								<td>{{ $key->nama_pasien }} <a href="{{ URL('pasien/detail/'.$key->id_pasien) }}" title="Detail"><i class="icon-zoom-in text-success pull-right"></i></a></td>
								<td>{{ $key->asal }}</td>
								<td>{{ $key->tujuan }}</td>
								<td>{{ $key->tgl }}</td>
								<td class="text-center"> 
									<a href="{{ URL('mutasi/rs/'.$key->id) }}" class="btn btn-success">Approve</a>
									<a href="#" class="btn btn-danger">Reject</a>
								</td>
							</tr>
							<?php
							$i++;
							?>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="tab-pane fade in" id="dokter">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h6 class="panel-title"><i class="icon-home5"></i> Dokter</h6>
				</div>
				<div class="table-responsive">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th class="col-sm-1">#</th>
								<th>Nama</th>
								<th>Dokter</th>
								<th>Mutasi ke</th>
								<th>Tanggal</th>
								<th class="col-sm-3">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 1;
							?>
							@foreach($dokter_history as $key)
							<tr>
								<td>{{ $i}}</td>
								<td>{{ $key->nama_pasien }} <a href="{{ URL('pasien/detail/'.$key->id_pasien) }}" title="Detail"><i class="icon-zoom-in text-success pull-right"></i></a></td>
								<td>{{ $key->asal }}</td>
								<td>{{ $key->tujuan }}</td>
								<td>{{ $key->tgl }}</td>
								<td class="text-center"> 
									<a href="{{ URL('mutasi/dokter/'.$key->id) }}" class="btn btn-success">Approve</a>
									<a href="#" class="btn btn-danger">Reject</a>
								</td>
							</tr>
							<?php
							$i++;
							?>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="tab-pane fade in" id="asuransi">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h6 class="panel-title"><i class="icon-home5"></i> Asuransi</h6>
				</div>
				<div class="table-responsive">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th class="col-sm-1">#</th>
								<th>Nama</th>
								<th>Asuransi</th>
								<th>Mutasi ke</th>
								<th>Tanggal</th>
								<th class="col-sm-3">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 1;
							?>
							@foreach($asuransi_history as $key)
							<tr>
								<td>{{ $i}}</td>
								<td>{{ $key->nama_pasien }} <a href="{{ URL('pasien/detail/'.$key->id_pasien) }}" title="Detail"><i class="icon-zoom-in text-success pull-right"></i></a></td>
								<td>{{ $key->asal }}</td>
								<td>{{ $key->tujuan }}</td>
								<td>{{ $key->tgl }}</td>
								<td class="text-center"> 
									<a href="{{ URL('mutasi/asuransi/'.$key->id) }}" class="btn btn-success">Approve</a>
									<a href="#" class="btn btn-danger">Reject</a>
								</td>
							</tr>
							<?php
							$i++;
							?>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@stop

@section('footerExtraScript')
<script type="text/javascript">
	@if($errors->has('create'))
	$(window).load(function(){
		$('#iconified_modal').modal('show');
	});
	@endif
	@if($errors->has('update'))
	$(window).load(function(){
		$('#edit_modal').modal('show');
	});
	@endif
	$(document).ready(function() {
		$(".delete_user").click(function(event){
			$("#delete_user").prop('href', 'admin/delete-' + event.target.id);
		});

		$(".edit_user").click(function(event){
			$.get('admin/getAjax/' + event.target.id, function( data ) {
				var elem = document.getElementById("edit_id");
				elem.value = data['id'];
				elem = document.getElementById("edit_name");
				elem.value = data['nama_pasien'];
				elem = document.getElementById("edit_username");
				elem.value = data['username'];
				elem = document.getElementById("edit_email");
				elem.value = data['email'];
				elem = document.getElementById("edit_ttl_t");
				elem.value = data['ttl_t'];
				elem = document.getElementById("edit_ttl_tl");
				elem.value = data['ttl_tl'];
				elem = document.getElementById("edit_alamat");
				elem.value = data['alamat'];
				elem = document.getElementById("edit_hp1");
				elem.value = data['hp1'];
				elem = document.getElementById("edit_hp2");
				elem.value = data['hp2'];
			});
		});
	});
</script>
@stop