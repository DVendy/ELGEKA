@extends('base')

@section('extraStyle')
	<title>ELGEKA - Admin</title>
@stop

@section('headerExtraScript')
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
@stop

@section('pageTitle')
Admin
@stop

@section('pageSubtitle')
Halaman admin
@stop

@section('body')
<div class="breadcrumb-line">
	<ul class="breadcrumb">
		<li><a href="{{ URL('/') }}">Home</a></li>
		<li class="active">Admin</li>
	</ul>
</div>
<!--
<div class="breadcrumb-line">
<form action="{{ URL('excel') }}" method="post" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
	<div class="form-group @if ($errors->has('error')) has-error @endif">
		<label>File</label>
		<input name="file" id="file" type="file" class="file btn-success" accept=".xlsx; .xls"></input>
	</div>
	<button class="btn btn-primary" type="submit" value="Import" id="form-overview"><i class="icon-download2"></i> Import</button>
</form>
</div>
-->
<ul class="info-blocks" style="text-align: left;">
	<li class="bg-primary">
		<div class="top-info"><a data-toggle="modal" role="button" href="#iconified_modal">Admin Baru</a><small>tambah admin baru</small></div>
		<a data-toggle="modal" role="button" href="#iconified_modal"><i class="icon-user-plus2"></i></a><span class="bottom-info bg-danger"></span>
	</li>
</ul>
<div class="panel panel-default">
	<div class="panel-heading">
		<h6 class="panel-title"><i class="icon-paragraph-justify"></i> Admin</h6>
	</div>
	<div class="table-responsive">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>Nama</th>
					<th>Username</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
					<th>Super</th>
					<th>Laporan</th>
					<th>Data</th>
					<th>Konfirmasi</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php
				$i = 1;
			?>
				@foreach($admin as $key)
				<tr>
					<td>{{ $i}}</td>
					<td>{{ $key->nama }}</td>
					<td>{{ $key->username }}</td>
					<td>{{ $key->email }}</td>
					<td>{{ $key->alamat }}</td>
					<td>{{ $key->telepon }}</td>
					<td class="text-center">{!! $key->a_super == 0 ? '' : '<i class="icon-checkmark text-success edit_user"></i>' !!}</td>
					<td class="text-center">{!! $key->a_laporan == 0 ? '' : '<i class="icon-checkmark text-success edit_user"></i>' !!}</td>
					<td class="text-center">{!! $key->a_data == 0 ? '' : '<i class="icon-checkmark text-success edit_user"></i>' !!}</td>
					<td class="text-center">{!! $key->a_konfirmasi == 0 ? '' : '<i class="icon-checkmark text-success edit_user"></i>' !!}</td>
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

<div id="iconified_modal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-user-plus2"></i> Tambah admin baru</h4>
			</div>
			<form action="{{URL('admin/create')}}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="modal-body">
				<div class="panel-body">
					<div class="form-group @if ($errors->has('nama')) has-error @endif">
						<label class="col-sm-2 control-label">Nama: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="nama" value="{{ Input::old('nama') }}">
							@if ($errors->has('nama')) <p class="help-block">{{ $errors->first('nama') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group @if ($errors->has('username')) has-error @endif">
						<label class="col-sm-2 control-label">Username: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="username" value="{{ Input::old('username') }}">
							@if ($errors->has('username')) <p class="help-block">{{ $errors->first('username') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group @if ($errors->has('password')) has-error @endif">
						<label class="col-sm-2 control-label">Password:</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" name="password">
							@if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group @if ($errors->has('password2')) has-error @endif">
						<label class="col-sm-2 control-label">Ulangi password:</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" name="password2">
							@if ($errors->has('password2')) <p class="help-block">{{ $errors->first('password2') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group @if ($errors->has('email')) has-error @endif">
						<label class="col-sm-2 control-label">Email: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="email" value="{{ Input::old('email') }}">
							@if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group @if ($errors->has('alamat')) has-error @endif">
						<label class="col-sm-2 control-label">Alamat: </label>
						<div class="col-sm-10">
							<textarea class="form-control" name="alamat"></textarea>
							@if ($errors->has('alamat')) <p class="help-block">{{ $errors->first('alamat') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group @if ($errors->has('telepon')) has-error @endif">
						<label class="col-sm-2 control-label">Nomor telepon: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="telepon"value="{{ Input::old('telepon') }}">
							@if ($errors->has('telepon')) <p class="help-block">{{ $errors->first('telepon') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group">
						<label class="col-sm-2 control-label">Role: </label>
						<div class="col-sm-10">
							<div class="block-inner">
								<label class="checkbox-inline checkbox-success">
									<div class="checker"><span class=""><input class="styled" type="checkbox" name="a_super" value="1"></span>
									</div>
									Super
								</label>
								<label class="checkbox-inline checkbox-success">
									<div class="checker"><span class=""><input class="styled" type="checkbox" name="a_laporan" value="1"></span>
									</div>
									Laporan
								</label>
								<label class="checkbox-inline checkbox-success">
									<div class="checker"><span class=""><input class="styled" type="checkbox" name="a_data" value="1"></span>
									</div>
									Data
								</label>
								<label class="checkbox-inline checkbox-success">
									<div class="checker"><span class=""><input class="styled" type="checkbox" name="a_konfirmasi" value="1"></span>
									</div>
									Konfirmasi
								</label>
							</div>
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
				<h4 class="modal-title"><i class="icon-user-plus2"></i> Edit admin</h4>
			</div>
			<form action="{{URL('admin/update')}}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="edit_id" value="1" id="edit_id" value="{{ Input::old('edit_id') }}">
			<div class="modal-body">
				<div class="panel-body">
					<div class="form-group @if ($errors->has('edit_name')) has-error @endif">
						<label class="col-sm-2 control-label">Nama: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="edit_name" id="edit_name" value="{{ Input::old('edit_name') }}">
							@if ($errors->has('edit_name')) <p class="help-block">{{ $errors->first('edit_name') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group @if ($errors->has('edit_username')) has-error @endif">
						<label class="col-sm-2 control-label">Username: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" readonly name="edit_username" id="edit_username" value="{{ Input::old('edit_username') }}">
							@if ($errors->has('edit_username')) <p class="help-block">{{ $errors->first('edit_username') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group @if ($errors->has('edit_password')) has-error @endif">
						<label class="col-sm-2 control-label">Password baru: </label>
						<div class="col-sm-10">
							<input type="password" class="form-control" name="edit_password" id="edit_password" value="{{ Input::old('edit_password') }}" placeholder="Kosongkan jika tidak berubah">
							@if ($errors->has('edit_password')) <p class="help-block">{{ $errors->first('edit_password') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group @if ($errors->has('edit_email')) has-error @endif">
						<label class="col-sm-2 control-label">Email: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="edit_email" id="edit_email" value="{{ Input::old('edit_email') }}">
							@if ($errors->has('edit_email')) <p class="help-block">{{ $errors->first('edit_email') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group @if ($errors->has('edit_ttl_t')) has-error @endif">
						<label class="col-sm-2 control-label">Tempat lahir: </label>
						<div class="col-sm-10">
							<textarea class="form-control" name="edit_ttl_t" id="edit_ttl_t"></textarea>
							@if ($errors->has('edit_ttl_t')) <p class="help-block">{{ $errors->first('edit_ttl_t') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group @if ($errors->has('edit_ttl_tl')) has-error @endif">
						<label class="col-sm-2 control-label">Tanggal lahir: </label>
						<div class="col-sm-10">
							<input class="form-control" name="edit_ttl_tl" data-mask="99/99/9999" type="text" placeholder="ex: 31/12/1995" id="edit_ttl_tl">
							@if ($errors->has('edit_ttl_tl')) <p class="help-block">{{ $errors->first('edit_ttl_tl') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group @if ($errors->has('edit_alamat')) has-error @endif">
						<label class="col-sm-2 control-label">Alamat: </label>
						<div class="col-sm-10">
							<textarea class="form-control" name="edit_alamat" id="edit_alamat"></textarea>
							@if ($errors->has('edit_alamat')) <p class="help-block">{{ $errors->first('edit_alamat') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group @if ($errors->has('edit_hp1')) has-error @endif">
						<label class="col-sm-2 control-label">Nomor telepon 1: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="edit_hp1" id="edit_hp1" value="{{ Input::old('hp1') }}">
							@if ($errors->has('edit_hp1')) <p class="help-block">{{ $errors->first('edit_hp1') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group @if ($errors->has('edit_hp2')) has-error @endif">
						<label class="col-sm-2 control-label">Nomor telepon 2: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="edit_hp2" id="edit_hp2" value="{{ Input::old('hp2') }}">
							@if ($errors->has('edit_hp2')) <p class="help-block">{{ $errors->first('edit_hp2') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group">
						<label class="col-sm-2 control-label">Jenis kelamin: </label>
						<div class="col-sm-10">
							<label class="radio-inline radio-success">
							<input id="edit_jk_l" type="radio" name="edit_jk" class="styled" checked="checked" value="l">
							Laki - laki</label>
							<label class="radio-inline radio-success">
							<input id="edit_jk_p" type="radio" name="edit_jk" class="styled" value="p">
							Perempuan</label>
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
				<h4 class="modal-title"><i class="icon-warning"></i> Delete admin</h4>
			</div>
			<div class="modal-body with-padding">
				Hapus admin ini??
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