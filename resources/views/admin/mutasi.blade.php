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
		<li class="active"><a href="#activity" data-toggle="tab"><i class="icon-heart6"></i> Penyakit<span class="label label-danger">{{ count($penyakit_history) }}</span></a></li>
		<li><a href="#tasks" data-toggle="tab"><i class="icon-user"></i> Biodata</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active fade in" id="activity">
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
		<div class="tab-pane fade" id="tasks">
			<div class="form-horizontal">
				<div class="form-group">
					<label class="col-sm-2 control-label">Default text input: </label>
					<div class="col-sm-10">
						<input class="form-control" type="text">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Password: </label>
					<div class="col-sm-10">
						<input class="form-control" type="password">
					</div>
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