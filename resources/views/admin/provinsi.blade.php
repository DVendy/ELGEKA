@extends('base')

@section('extraStyle')
	<title>ELGEKA - Provinsi</title>
@stop

@section('headerExtraScript')
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
@stop

@section('pageTitle')
Provinsi
@stop

@section('pageSubtitle')
Manage provinsi
@stop

@section('body')
<div class="breadcrumb-line">
	<ul class="breadcrumb">
		<li><a href="{{ URL('/') }}">Home</a></li>
		<li class="active">Provinsi</li>
	</ul>
</div>
<ul class="info-blocks" style="text-align: left;">
	<li class="bg-primary">
		<div class="top-info"><a data-toggle="modal" role="button" href="#iconified_modal">New Provinsi</a><small>create new provinsi</small></div>
		<a data-toggle="modal" role="button" href="#iconified_modal"><i class="icon-home7"></i></a><span class="bottom-info bg-danger"></span>
	</li>
</ul>
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title"><i class="icon-paragraph-justify"></i> Provinsi</h6>
			</div>
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama Provinsi</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						?>
						@foreach($provinsis as $key)
						<tr>
							<td>{{ $i}}</td>
							<td>{{ $key->nama_provinsi }}</td>
							<td> 
								<div class="pull-right">
									<a href="#" data-toggle="modal" data-target="#edit_modal" title="Delete"><i class="icon-pencil text-success edit_user" id="{{ $key->id }}"></i></a>
									&nbsp;
									<a href="#" data-toggle="modal" data-target="#delete_modal" title="Delete"><i class="icon-close text-danger delete_user" id="{{ $key->id }}"></i></a>		
								</div>
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
		<div class="text-center block">
			{!! $provinsis->render() !!}
		</div>
	</div>
</div>

<div id="iconified_modal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-user-plus2"></i> Tambah provinsi baru</h4>
			</div>
			<form action="{{URL('provinsi/create')}}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="modal-body">
				<div class="panel-body">
					<div class="form-group @if ($errors->has('nama_provinsi')) has-error @endif">
						<label class="col-md-3 control-label">Nama Provinsi: </label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="nama_provinsi" value="{{ Input::old('nama_provinsi') }}">
							@if ($errors->has('nama_provinsi')) <p class="help-block">{{ $errors->first('nama_provinsi') }}</p> @endif
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-warning" data-dismiss="modal"><i class="icon-cancel-circle"></i> Batal</button>
				<button class="btn btn-primary" type="submit" value="Import" id="form-overview"><i class="icon-download2"></i> Tambah</button>
			</div>
			</form>
		</div>
	</div>
</div>

<div id="edit_modal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-user-plus2"></i> Edit provinsi</h4>
			</div>
			<form action="{{URL('provinsi/update')}}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="edit_id" value="1" id="edit_id" value="{{ Input::old('edit_id') }}">
			<div class="modal-body">
				<div class="panel-body">
					<div class="form-group @if ($errors->has('edit_nama_provinsi')) has-error @endif">
						<label class="col-md-3 control-label">Nama Provinsi: </label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="edit_nama_provinsi" id="edit_nama_provinsi" value="{{ Input::old('edit_nama_provinsi') }}">
							@if ($errors->has('edit_nama_provinsi')) <p class="help-block">{{ $errors->first('edit_nama_provinsi') }}</p> @endif
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-warning" data-dismiss="modal"><i class="icon-cancel-circle"></i> Cancel</button>
				<button class="btn btn-primary" type="submit" value="Import" id="form-overview"><i class="icon-pencil4"></i> Update</button>
			</div>
			</form>
		</div>
	</div>
</div>

<div id="delete_modal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-warning"></i> Delete provinsi</h4>
			</div>
			<div class="modal-body with-padding">
				Hapus provinsi ini??
			</div>
			<div class="modal-footer">
				<button class="btn btn-warning" data-dismiss="modal"><i class="icon-cancel-circle"></i> Cancel</button>
				<a href="#" class="btn btn-primary" id="delete_user"><i class="icon-remove3"></i> Delete</a>
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
			$("#delete_user").prop('href', 'provinsi/delete-' + event.target.id);
		});

		$(".edit_user").click(function(event){
			$.get('provinsi/getAjax/' + event.target.id, function( data ) {
				var elem = document.getElementById("edit_id");
				elem.value = data['id'];
				elem = document.getElementById("edit_nama_provinsi");
				elem.value = data['nama_provinsi'];
			});
		});
	});
</script>
@stop