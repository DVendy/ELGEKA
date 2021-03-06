@extends('base')

@section('extraStyle')
<title>ELGEKA - Pasien</title>
@stop

@section('headerExtraScript')
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
@stop

@section('pageTitle')
Pasien
@stop

@section('pageSubtitle')
Manage pasien
@stop

@section('body')
<div class="breadcrumb-line">
	<ul class="breadcrumb">
		<li><a href="{{ URL('/') }}">Home</a></li>
		<li class="active">Pasien</li>
	</ul>
</div>
<ul class="info-blocks" style="text-align: left;">
	<li class="bg-primary">
		<div class="top-info"><a data-toggle="modal" role="button" href="#iconified_modal">Pasien Baru</a><small>daftarkan pasien baru</small></div>
		<a data-toggle="modal" role="button" href="#iconified_modal"><i class="icon-user2"></i></a><span class="bottom-info bg-danger"></span>
	</li>
	<li class="bg-primary">
		<div class="top-info"><a data-toggle="modal" role="button" href="#iconified_modal">Cari Pasien</a><small>cari data pasien</small></div>
		<a data-toggle="modal" role="button" href="#modal-search"><i class="icon-search3"></i></a><span class="bottom-info bg-danger"></span>
	</li>
</ul>
<div class="panel panel-info">
	<div class="panel-heading">
		<h6 class="panel-title"><i class="icon-paragraph-justify"></i> Pasien</h6>
	</div>
	<div class="table-responsive">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>Nama</th>
					<th>Username</th>
					<th>Email</th>
					<th>L/P</th>
					<th>TTL</th>
					<th>Alamat</th>
					<th>Kelurahan</th>
					<th>HP 1</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$i = 1;
				?>
				@foreach($users as $key)
				<tr>
					<td>{{ $i}}</td>
					<td>{{ $key->nama_pasien }}</td>
					<td>{{ $key->username }}</td>
					<td>{{ $key->email }}</td>
					<td style="text-transform: uppercase;">{{ $key->jk }}</td>
					<td>{{ $key->ttl_t }}, {{ date_format(DateTime::createFromFormat('Y-m-d H:i:s', $key->ttl_tl),"d/m/Y") }}</td>
					<td>{{ $key->alamat }}</td>
					<td>{{ isset($key->kelurahan->nama_kelurahan) ? $key->kelurahan->nama_kelurahan : '-' }}</td>
					<td>{{ $key->hp1 }}</td>
					<td>{{ $key->status }}</td>
					
					<td> 
						<div class="pull-right">
							<a href="{{ URL('pasien/detail/'.$key->id) }}" title="Detail"><i class="icon-zoom-in text-success"></i></a>
							&nbsp;
							<a href="#" data-toggle="modal" data-target="#edit_modal" title="Edit"><i class="icon-pencil text-warning edit_user" id="{{ $key->id }}"></i></a>
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
	{!! $users->render() !!}
</div>

<div id="modal-search" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-user-plus2"></i> Cari data pasien</h4>
			</div>
			<form action="{{ URL('pasien/search') }}" role="form" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="modal-body with-padding">
              
	        	<div class="form-group">
					<label>Nama Pasien</label>
					<input placeholder="Nama pasien" class="form-control" type="text" name="nama">
	        	</div>
	        	<div class="form-group">
					<label>Username</label>
					<input placeholder="Nama pasien" class="form-control" type="text" name="username">
	        	</div>
	        	<div class="form-group">
					<label>Email</label>
					<input placeholder="Nama pasien" class="form-control" type="text" name="email">
	        	</div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Cari</button>
            </div>
          </form>
		</div>
	</div>
</div>

<div id="iconified_modal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-user-plus2"></i> Tambah pasien baru</h4>
			</div>
			<form action="{{URL('pasien/create')}}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="modal-body">
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-6">
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
										<input type="text" class="form-control" name="username" value="{{ Input::old('username') }}" autocomplete="off">
										@if ($errors->has('username')) <p class="help-block">{{ $errors->first('username') }}</p> @endif
									</div>
								</div>
								&nbsp;
								<div class="form-group @if ($errors->has('password')) has-error @endif">
									<label class="col-sm-2 control-label">Password:</label>
									<div class="col-sm-10">
										<input type="password" class="form-control" name="password" autocomplete="off">
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
								<div class="form-group @if ($errors->has('ttl_t')) has-error @endif">
									<label class="col-sm-2 control-label">Tempat lahir: </label>
									<div class="col-sm-10">
										<textarea class="form-control" name="ttl_t"></textarea>
										@if ($errors->has('ttl_t')) <p class="help-block">{{ $errors->first('ttl_t') }}</p> @endif
									</div>
								</div>
								&nbsp;
								<div class="form-group @if ($errors->has('ttl_tl')) has-error @endif">
									<label class="col-sm-2 control-label">Tanggal lahir: </label>
									<div class="col-sm-10">
										<input class="form-control" name="ttl_tl" data-mask="99/99/9999" type="text" placeholder="ex: 31/12/1995">
										@if ($errors->has('ttl_tl')) <p class="help-block">{{ $errors->first('ttl_tl') }}</p> @endif
									</div>
								</div>
								&nbsp;
								<div class="form-group @if ($errors->has('hp1')) has-error @endif">
									<label class="col-sm-4 control-label">Nomor telepon 1: </label>
									<div class="col-sm-8">
										<input type="number" class="form-control" name="hp1" value="{{ Input::old('hp1') }}">
										@if ($errors->has('hp1')) <p class="help-block">{{ $errors->first('hp1') }}</p> @endif
									</div>
								</div>
								&nbsp;
								<div class="form-group @if ($errors->has('hp2')) has-error @endif">
									<label class="col-sm-4 control-label">Nomor telepon 2: </label>
									<div class="col-sm-8">
										<input type="number" class="form-control" name="hp2" value="{{ Input::old('hp2') }}">
										@if ($errors->has('hp2')) <p class="help-block">{{ $errors->first('hp2') }}</p> @endif
									</div>
								</div>
								&nbsp;
								<div class="form-group @if ($errors->has('telp_rumah')) has-error @endif">
									<label class="col-sm-4 control-label">Telepon Rumah: </label>
									<div class="col-sm-8">
										<input type="number" class="form-control" name="telp_rumah" value="{{ Input::old('telp_rumah') }}">
										@if ($errors->has('telp_rumah')) <p class="help-block">{{ $errors->first('telp_rumah') }}</p> @endif
									</div>
								</div>
								&nbsp;
								<div class="form-group @if ($errors->has('status')) has-error @endif">
									<label class="col-sm-2 control-label">Status: </label>
									<div class="col-sm-10">
										<input type="number" class="form-control" name="status" value="{{ Input::old('status') }}">
										@if ($errors->has('status')) <p class="help-block">{{ $errors->first('status') }}</p> @endif
									</div>
								</div>
								&nbsp;
								<div class="form-group">
									<label class="col-sm-2 control-label">Jenis kelamin: </label>
									<div class="col-sm-10">
										<label class="radio-inline radio-success">
											<input type="radio" name="jk" class="styled" checked="checked" value="l">
											Laki - laki</label>
											<label class="radio-inline radio-success">
												<input type="radio" name="jk" class="styled" value="p">
												Perempuan
											</label>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group @if ($errors->has('alamat')) has-error @endif">
										<label class="col-sm-3 control-label">Alamat: </label>
										<div class="col-sm-9">
											<textarea class="form-control" name="alamat"></textarea>
											@if ($errors->has('alamat')) <p class="help-block">{{ $errors->first('alamat') }}</p> @endif
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
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title"><i class="icon-user-plus2"></i> Edit pasien</h4>
				</div>
				<form action="{{URL('pasien/update')}}" method="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="edit_id" value="1" id="edit_id" value="{{ Input::old('edit_id') }}">
					<div class="modal-body">
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-6">
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
									<div class="form-group @if ($errors->has('edit_hp1')) has-error @endif">
										<label class="col-sm-4 control-label">Nomor telepon 1: </label>
										<div class="col-sm-8">
											<input type="text" class="form-control" name="edit_hp1" id="edit_hp1" value="{{ Input::old('hp1') }}">
											@if ($errors->has('edit_hp1')) <p class="help-block">{{ $errors->first('edit_hp1') }}</p> @endif
										</div>
									</div>
									&nbsp;
									<div class="form-group @if ($errors->has('edit_hp2')) has-error @endif">
										<label class="col-sm-4 control-label">Nomor telepon 2: </label>
										<div class="col-sm-8">
											<input type="text" class="form-control" name="edit_hp2" id="edit_hp2" value="{{ Input::old('hp2') }}">
											@if ($errors->has('edit_hp2')) <p class="help-block">{{ $errors->first('edit_hp2') }}</p> @endif
										</div>
									</div>
									&nbsp;
									<div class="form-group @if ($errors->has('edit_telp_rumah')) has-error @endif">
										<label class="col-sm-4 control-label">Telepon Rumah: </label>
										<div class="col-sm-8">
											<input type="number" class="form-control" name="edit_telp_rumah" id="edit_telp_rumah" value="{{ Input::old('edit_telp_rumah') }}">
											@if ($errors->has('edit_telp_rumah')) <p class="help-block">{{ $errors->first('edit_telp_rumah') }}</p> @endif
										</div>
									</div>
									&nbsp;
									<div class="form-group @if ($errors->has('edit_status')) has-error @endif">
										<label class="col-sm-2 control-label">Status: </label>
										<div class="col-sm-10">
											<input type="number" class="form-control" name="edit_status" id="edit_status" value="{{ Input::old('edit_status') }}">
											@if ($errors->has('edit_status')) <p class="help-block">{{ $errors->first('edit_status') }}</p> @endif
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
										<div class="col-sm-6">
											<div class="form-group @if ($errors->has('edit_alamat')) has-error @endif">
											<label class="col-sm-3 control-label">Alamat: </label>
												<div class="col-sm-9">
													<textarea class="form-control" name="edit_alamat" id="edit_alamat"></textarea>
													@if ($errors->has('edit_alamat')) <p class="help-block">{{ $errors->first('edit_alamat') }}</p> @endif
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
							<h4 class="modal-title"><i class="icon-warning"></i> Delete pasien</h4>
						</div>
						<div class="modal-body with-padding">
							Hapus pasien ini??
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
						$("#delete_user").prop('href', 'pasien/delete-' + event.target.id);
					});

					$(".edit_user").click(function(event){
						$.get('pasien/getAjax/' + event.target.id, function( data ) {
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
							elem = document.getElementById("edit_telp_rumah");
							elem.value = data['telp_rumah'];
							elem = document.getElementById("edit_status");
							elem.value = data['status'];
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

	var s_kelurahan = document.getElementById("s_kelurahan");
	s_kelurahan.options.length = 0;
	s_kelurahan.options.add(new Option("- Pilih kecamatan terlebih dahulu -", ""));

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
	    
	var s_kelurahan = document.getElementById("edit_s_kelurahan");
	s_kelurahan.options.length = 0;
	s_kelurahan.options.add(new Option("- Pilih kecamatan terlebih dahulu -", ""));

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