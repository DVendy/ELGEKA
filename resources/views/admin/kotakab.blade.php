@extends('base')

@section('extraStyle')
	<title>ELGEKA - Kota / kabupaten</title>
@stop

@section('headerExtraScript')
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
@stop

@section('pageTitle')
Kota / kabupaten
@stop

@section('pageSubtitle')
Manage kota / kabupaten
@stop

@section('body')
<div class="breadcrumb-line">
	<ul class="breadcrumb">
		<li><a href="{{ URL('/') }}">Home</a></li>
		<li class="active">Kota / kabupaten</li>
	</ul>
</div>
<ul class="info-blocks" style="text-align: left;">
	<li class="bg-primary">
		<div class="top-info"><a data-toggle="modal" role="button" href="#iconified_modal">New Kota / kabupaten</a><small>create new kota / kabupaten</small></div>
		<a data-toggle="modal" role="button" href="#iconified_modal"><i class="icon-home6"></i></a><span class="bottom-info bg-danger"></span>
	</li>
</ul>
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title"><i class="icon-paragraph-justify"></i> Kota / kabupaten</h6>
			</div>
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama Kota / kabupaten</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						?>
						@foreach($kotakabs as $key)
						<tr>
							<td>{{ $i}}</td>
							<td>{{ $key->nama_kotakab }}</td>
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
			{!! $kotakabs->render() !!}
		</div>
	</div>
</div>

<div id="iconified_modal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-user-plus2"></i> Tambah kota / kabupaten baru</h4>
			</div>
			<form action="{{URL('kotakab/create')}}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="modal-body">
				<div class="panel-body">
					<div class="form-group @if ($errors->has('nama_kotakab')) has-error @endif">
						<label class="col-md-3 control-label">Nama Kota / kabupaten: </label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="nama_kotakab" value="{{ Input::old('nama_kotakab') }}">
							@if ($errors->has('nama_kotakab')) <p class="help-block">{{ $errors->first('nama_kotakab') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group">
			            <label class="col-md-3 control-label">Provinsi </label>
			            <div class="col-md-9">
			              <select name="select" class="form-control">
			                <option value="opt1">Usual select box</option>
			                <option value="opt2">Option 2</option>
			                <option value="opt3">Option 3</option>
			                <option value="opt4">Option 4</option>
			                <option value="opt5">Option 5</option>
			                <option value="opt6">Option 6</option>
			                <option value="opt7">Option 7</option>
			                <option value="opt8">Option 8</option>
			              </select>
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
				<h4 class="modal-title"><i class="icon-user-plus2"></i> Edit kota / kabupaten</h4>
			</div>
			<form action="{{URL('kotakab/update')}}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="edit_id" value="1" id="edit_id" value="{{ Input::old('edit_id') }}">
			<div class="modal-body">
				<div class="panel-body">
					<div class="form-group @if ($errors->has('edit_nama_kotakab')) has-error @endif">
						<label class="col-md-3 control-label">Nama Kota / kabupaten: </label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="edit_nama_kotakab" id="edit_nama_kotakab" value="{{ Input::old('edit_nama_kotakab') }}">
							@if ($errors->has('edit_nama_kotakab')) <p class="help-block">{{ $errors->first('edit_nama_kotakab') }}</p> @endif
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
				<h4 class="modal-title"><i class="icon-warning"></i> Delete kota / kabupaten</h4>
			</div>
			<div class="modal-body with-padding">
				Hapus kota / kabupaten ini??
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
			$("#delete_user").prop('href', 'kotakab/delete-' + event.target.id);
		});

		$(".edit_user").click(function(event){
			$.get('kotakab/getAjax/' + event.target.id, function( data ) {
				var elem = document.getElementById("edit_id");
				elem.value = data['id'];
				elem = document.getElementById("edit_nama_kotakab");
				elem.value = data['nama_kotakab'];
			});
		});
	});
</script>
@stop