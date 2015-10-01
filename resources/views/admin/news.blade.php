@extends('base')

@section('extraStyle')
	<title>ELGEKA - Rumah Sakit</title>
@stop

@section('headerExtraScript')
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
@stop

@section('pageTitle')
Rumah Sakit
@stop

@section('pageSubtitle')
Manage rumah sakit
@stop

@section('body')
<div class="breadcrumb-line">
	<ul class="breadcrumb">
		<li><a href="{{ URL('/') }}">Home</a></li>
		<li class="active">Rumah Sakit</li>
	</ul>
</div>
<ul class="info-blocks" style="text-align: left;">
	<li class="bg-primary">
		<div class="top-info"><a data-toggle="modal" role="button" href="#iconified_modal">New Rumah Sakit</a><small>create new rumah sakit</small></div>
		<a data-toggle="modal" role="button" href="#iconified_modal"><i class="icon-home5"></i></a><span class="bottom-info bg-danger"></span>
	</li>
</ul>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title"><i class="icon-paragraph-justify"></i> Rumah Sakit</h6>
			</div>
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>#</th>
							<th>Rumah Sakit</th>
							<th>Kelurahan</th>
							<th>Kecamatan</th>
							<th>Kota / kabupaten</th>
							<th>Provinsi</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						?>
						@foreach($rss as $key)
						<tr>
							<td>{{ $i}}</td>
							<td>{{ $key->nama_rs }}</td>
							<td>{{ $key->kelurahan->nama_kelurahan }}</td>
							<td>{{ $key->kelurahan->kecamatan->nama_kecamatan }}</td>
							<td>{{ $key->kelurahan->kecamatan->kotakab->nama_kotakab }}</td>
							<td>{{ $key->kelurahan->kecamatan->kotakab->provinsi->nama_provinsi }}</td>
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
			{!! $rss->render() !!}
		</div>
	</div>
</div>

<div id="iconified_modal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-user-plus2"></i> Tambah rumah sakit baru</h4>
			</div>
			<form action="{{URL('rs/create')}}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="modal-body">
				<div class="panel-body">
					<div class="form-group @if ($errors->has('nama_rs')) has-error @endif">
						<label class="col-md-3 control-label">Nama Rumah Sakit: </label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="nama_rs" value="{{ Input::old('nama_rs') }}">
							@if ($errors->has('nama_rs')) <p class="help-block">{{ $errors->first('nama_rs') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group @if ($errors->has('s_provinsi')) has-error @endif">
			            <label class="col-md-3 control-label">Provinsi </label>
			            <div class="col-md-9">
			              <select name="s_provinsi" class="form-control" onchange="onProvinsiChange(this.value)" id="s_provinsi">
			                	<option value="">- Pilih provinsi -</option>
			                @foreach($provinsis as $value)
			                	<option value="{{ $value->id }}">{{ $value->nama_provinsi }}</option>
			               	@endforeach
			              </select>
			              @if ($errors->has('s_provinsi')) <p class="help-block">{{ $errors->first('s_provinsi') }}</p> @endif
			            </div>
			        </div>
					&nbsp;
					<div class="form-group @if ($errors->has('s_kotakab')) has-error @endif">
			            <label class="col-md-3 control-label">Kota / Kabupaten </label>
			            <div class="col-md-9">
			              <select name="s_kotakab" class="form-control" onchange="onKotakabChange(this.value)" id="s_kotakab">
			                	<option value="">- Pilih provinsi terlebih dahulu -</option>
			              </select>
			              @if ($errors->has('s_kotakab')) <p class="help-block">{{ $errors->first('s_kotakab') }}</p> @endif
			            </div>
			        </div>
					&nbsp;
					<div class="form-group @if ($errors->has('s_kecamatan')) has-error @endif">
			            <label class="col-md-3 control-label">Kecamatan</label>
			            <div class="col-md-9">
			              <select name="s_kecamatan" class="form-control" onchange="onKecamatanChange(this.value)" id="s_kecamatan">
			                	<option value="">- Pilih kota / kabupaten terlebih dahulu -</option>
			              </select>
			              @if ($errors->has('s_kecamatan')) <p class="help-block">{{ $errors->first('s_kecamatan') }}</p> @endif
			            </div>
			        </div>
					&nbsp;
					<div class="form-group @if ($errors->has('s_kelurahan')) has-error @endif">
			            <label class="col-md-3 control-label">Kelurahan</label>
			            <div class="col-md-9">
			              <select name="s_kelurahan" class="form-control" id="s_kelurahan">
			                	<option value="">- Pilih kecamatan terlebih dahulu -</option>
			              </select>
			              @if ($errors->has('s_kelurahan')) <p class="help-block">{{ $errors->first('s_kelurahan') }}</p> @endif
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
				<h4 class="modal-title"><i class="icon-user-plus2"></i> Edit rumah sakit</h4>
			</div>
			<form action="{{URL('rs/update')}}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="edit_id" value="1" id="edit_id" value="{{ Input::old('edit_id') }}">
			<div class="modal-body">
				<div class="panel-body">
					<div class="form-group @if ($errors->has('edit_nama_rs')) has-error @endif">
						<label class="col-md-3 control-label">Nama Rumah Sakit: </label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="edit_nama_rs" id="edit_nama_rs" value="{{ Input::old('edit_nama_rs') }}">
							@if ($errors->has('edit_nama_rs')) <p class="help-block">{{ $errors->first('edit_nama_rs') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group @if ($errors->has('edit_s_provinsi')) has-error @endif">
			            <label class="col-md-3 control-label">Provinsi </label>
			            <div class="col-md-9">
			              <select name="edit_s_provinsi" class="form-control" onchange="onEdProvinsiChange(this.value)" id="edit_s_provinsi">
			                	<option value="">- Pilih provinsi -</option>
			                @foreach($provinsis as $value)
			                	<option value="{{ $value->id }}">{{ $value->nama_provinsi }}</option>
			               	@endforeach
			              </select>
			              @if ($errors->has('edit_s_provinsi')) <p class="help-block">{{ $errors->first('edit_s_provinsi') }}</p> @endif
			            </div>
			        </div>
					&nbsp;
					<div class="form-group @if ($errors->has('edit_s_kotakab')) has-error @endif">
			            <label class="col-md-3 control-label">Kota / Kabupaten </label>
			            <div class="col-md-9">
			              <select name="edit_s_kotakab" class="form-control" onchange="onEdKotakabChange(this.value)" id="edit_s_kotakab">
			                	<option value="">- Pilih provinsi terlebih dahulu -</option>
			              </select>
			              @if ($errors->has('edit_s_kotakab')) <p class="help-block">{{ $errors->first('edit_s_kotakab') }}</p> @endif
			            </div>
			        </div>
					&nbsp;
					<div class="form-group @if ($errors->has('edit_s_kecamatan')) has-error @endif">
			            <label class="col-md-3 control-label">Kecamatan</label>
			            <div class="col-md-9">
			              <select name="edit_s_kecamatan" class="form-control" onchange="onEdKecamatanChange(this.value)" id="edit_s_kecamatan">
			                	<option value="">- Pilih kota / kabupaten terlebih dahulu -</option>
			              </select>
			              @if ($errors->has('edit_s_kecamatan')) <p class="help-block">{{ $errors->first('edit_s_kecamatan') }}</p> @endif
			            </div>
			        </div>
					&nbsp;
					<div class="form-group @if ($errors->has('edit_s_kelurahan')) has-error @endif">
			            <label class="col-md-3 control-label">Kelurahan</label>
			            <div class="col-md-9">
			              <select name="edit_s_kelurahan" class="form-control" id="edit_s_kelurahan">
			                	<option value="">- Pilih kecamatan terlebih dahulu -</option>
			              </select>
			              @if ($errors->has('edit_s_kelurahan')) <p class="help-block">{{ $errors->first('edit_s_kelurahan') }}</p> @endif
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
				<h4 class="modal-title"><i class="icon-warning"></i> Delete rumah sakit</h4>
			</div>
			<div class="modal-body with-padding">
				Hapus rumah sakit ini??
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
			$("#delete_user").prop('href', 'rs/delete-' + event.target.id);
		});

		$(".edit_user").click(function(event){
			$.get('rs/getAjax/' + event.target.id, function( data ) {
				var elem = document.getElementById("edit_id");
				elem.value = data['id'];
				elem = document.getElementById("edit_nama_rs");
				elem.value = data['nama_rs'];
			});
		});
	});

	function onProvinsiChange(id) {
	    var s_kotakab = document.getElementById("s_kotakab");
	    s_kotakab.options.length = 0;
	    s_kotakab.options.add(new Option("- Pilih provinsi terlebih dahulu -", ""));

	    var s_kecamatan = document.getElementById("s_kecamatan");
	    s_kecamatan.options.length = 0;
	    s_kecamatan.options.add(new Option("- Pilih kota / kabupaten terlebih dahulu -", ""));

		if (id != ""){
			$.get('provinsi/getChild/' + id, function( data ) {
				s_kotakab.options.length = 0;
			    if (data.length == 0){
			    	s_kotakab.options.add(new Option("- Tidak ada kota / kabupaten untuk provinsi ini -", ""));
			    }else{
			    	s_kotakab.options.add(new Option("- Pilih kota / kabupaten -", ""));
			    }

				for (index = 0; index < data.length; ++index) {
					option = data[index];
					s_kotakab.options.add(new Option(option.nama_kotakab, option.id));
				}
			});
		}
	}
	function onEdProvinsiChange(id) {
	    var s_kotakab = document.getElementById("edit_s_kotakab");
	    s_kotakab.options.length = 0;
	    s_kotakab.options.add(new Option("- Pilih provinsi terlebih dahulu -", ""));

	    var s_kecamatan = document.getElementById("edit_s_kecamatan");
	    s_kecamatan.options.length = 0;
	    s_kecamatan.options.add(new Option("- Pilih kota / kabupaten terlebih dahulu -", ""));
	    
		if (id != ""){
			$.get('provinsi/getChild/' + id, function( data ) {
				s_kotakab.options.length = 0;
			    if (data.length == 0){
			    	s_kotakab.options.add(new Option("- Tidak ada kota / kabupaten untuk provinsi ini -", ""));
			    }else{
			    	s_kotakab.options.add(new Option("- Pilih kota / kabupaten -", ""));
			    }

				for (index = 0; index < data.length; ++index) {
					option = data[index];
					s_kotakab.options.add(new Option(option.nama_kotakab, option.id));
				}
			});
		}
	}
	function onKotakabChange(id) {
	    var s_kecamatan = document.getElementById("s_kecamatan");
	    s_kecamatan.options.length = 0;
	    s_kecamatan.options.add(new Option("- Pilih kota / kabupaten terlebih dahulu -", ""));
		if (id != ""){
			$.get('kotakab/getChild/' + id, function( data ) {
				s_kecamatan.options.length = 0;
			    if (data.length == 0){
			    	s_kecamatan.options.add(new Option("- Tidak ada kecamatan untuk kota / kabupaten ini -", ""));
			    }else{
			    	s_kecamatan.options.add(new Option("- Pilih kecamatan -", ""));
			    }

				for (index = 0; index < data.length; ++index) {
					option = data[index];
					s_kecamatan.options.add(new Option(option.nama_kecamatan, option.id));
				}
			});
		}
	}
	function onEdKotakabChange(id) {
	    var s_kecamatan = document.getElementById("edit_s_kecamatan");
	    s_kecamatan.options.length = 0;
	    s_kecamatan.options.add(new Option("- Pilih kota / kabupaten terlebih dahulu -", ""));
		if (id != ""){
			$.get('kotakab/getChild/' + id, function( data ) {
				s_kecamatan.options.length = 0;
			    if (data.length == 0){
			    	s_kecamatan.options.add(new Option("- Tidak ada kecamatan untuk kota / kabupaten ini -", ""));
			    }else{
			    	s_kecamatan.options.add(new Option("- Pilih kecamatan -", ""));
			    }

				for (index = 0; index < data.length; ++index) {
					option = data[index];
					s_kecamatan.options.add(new Option(option.nama_kecamatan, option.id));
				}
			});
		}
	}
	function onKecamatanChange(id) {
	    var s_kecamatan = document.getElementById("s_kelurahan");
	    s_kecamatan.options.length = 0;
	    s_kecamatan.options.add(new Option("- Pilih kecamatan terlebih dahulu -", ""));
		if (id != ""){
			$.get('kecamatan/getChild/' + id, function( data ) {
				s_kecamatan.options.length = 0;
			    if (data.length == 0){
			    	s_kecamatan.options.add(new Option("- Tidak ada kelurahan untuk kecamatan ini -", ""));
			    }else{
			    	s_kecamatan.options.add(new Option("- Pilih kelurahan -", ""));
			    }

				for (index = 0; index < data.length; ++index) {
					option = data[index];
					s_kecamatan.options.add(new Option(option.nama_kelurahan, option.id));
				}
			});
		}
	}
	function onEdKecamatanChange(id) {
	    var s_kecamatan = document.getElementById("edit_s_kelurahan");
	    s_kecamatan.options.length = 0;
	    s_kecamatan.options.add(new Option("- Pilih kecamatan terlebih dahulu -", ""));
		if (id != ""){
			$.get('kecamatan/getChild/' + id, function( data ) {
				s_kecamatan.options.length = 0;
			    if (data.length == 0){
			    	s_kecamatan.options.add(new Option("- Tidak ada kelurahan untuk kecamatan ini -", ""));
			    }else{
			    	s_kecamatan.options.add(new Option("- Pilih kelurahan -", ""));
			    }

				for (index = 0; index < data.length; ++index) {
					option = data[index];
					s_kecamatan.options.add(new Option(option.nama_kelurahan, option.id));
				}
			});
		}
	}
</script>
@stop