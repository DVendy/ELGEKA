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

@if (Session::has('success'))
<div class="callout callout-success fade in">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<h5>Mutasi berhasil</h5>
	<p>Mutasi telah berhasil dilakukan, harap tunggu konfirmasi admin.</p>
</div>
@endif
@if (Session::has('obat'))
<div class="callout callout-success fade in">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<h5>Obat berhasil ditambahkan</h5>
	<p>Obat berhasil ditambahkan.</p>
</div>
@endif

<div class="tabbable page-tabs">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#activity" data-toggle="tab"><i class="icon-info"></i> Detail Pasien</a></li>
		<li><a href="#medis" data-toggle="tab"><i class="icon-user"></i> Riwayat medis</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active fade in" id="activity">
			<div class="form-horizontal">
				<div class="form-group">
					<label class="col-sm-2 control-label">Nama </label>
					<div class="col-sm-8">
						<input class="form-control" readonly="readonly" value="{{ $pasien->nama_pasien }}" type="text" autocomplete="off">
					</div>
				</div> 
				<div class="form-group">
					<label class="col-sm-2 control-label">Penyakit </label>
					<div class="col-sm-8">
						<input class="form-control" readonly="readonly" value="{{ isset($pasien->penyakit->nama_penyakit) ? $pasien->penyakit->nama_penyakit : '-' }}" type="text" autocomplete="off">
					</div>
					<div class="col-sm-2 text-center">
						<a data-toggle="modal" href="#modal_penyakit" class="btn btn-info"><i class="icon-heart6"></i> Mutasi</a>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Rumah Sakit </label>
					<div class="col-sm-8">
						<input class="form-control" readonly="readonly" value="{{ isset($pasien->rs->nama_rs) ? $pasien->rs->nama_rs : '-' }}" type="text" autocomplete="off">
					</div>
					<div class="col-sm-2 text-center">
						<a data-toggle="modal" href="#modal_rs" class="btn btn-info"><i class="icon-home5"></i> Mutasi</a>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Dokter </label>
					<div class="col-sm-8">
						<input class="form-control" readonly="readonly" value="{{ isset($pasien->dokter->nama_dokter) ? $pasien->dokter->nama_dokter : '-' }}" type="text" autocomplete="off">
					</div>
					<div class="col-sm-2 text-center">
						<a data-toggle="modal" href="#modal_dokter" class="btn btn-info"><i class="icon-glasses3"></i> Mutasi</a>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Asuransi </label>
					<div class="col-sm-8">
						<input class="form-control" readonly="readonly" value="{{ isset($pasien->asuransi->nama_asuransi) ? $pasien->asuransi->nama_asuransi : '-' }}" type="text" autocomplete="off">
					</div>
					<div class="col-sm-2 text-center">
						<a data-toggle="modal" href="#modal_asuransi" class="btn btn-info"><i class="icon-file4"></i> Mutasi</a>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Obat </label>
					<div class="col-sm-8">
					@if($pasien->obats->count() != 0)
					@foreach($pasien->obats as $obat)
					<div class="row" style="padding:0px 0px 20px 0px;">
						<div class="col-sm-10">
							<input class="form-control" readonly="readonly" value="{{ $obat->nama_obat }}" type="text" autocomplete="off">
						</div>
						<div class="col-sm-2 text-right">
							<a data-toggle="modal" href="#modal_obat_delete" class="btn btn-icon btn-danger obat_delete" id="{{ $obat->id }}"><i class="icon-close" id="{{ $obat->id }}"></i></a>
						</div>
					</div>
					@endforeach
					@else
					<p>-</p>
					@endif
					</div>
					<div class="col-sm-2 text-center">
						<a class="btn btn-info" data-toggle="modal" href="#modal_obat"><i class="icon-inject"></i> Tambah</a>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="medis">
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

<div id="modal_penyakit" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-heart6"></i> Manage penyakit</h4>
			</div>
			<form action="{{URL('pasien/setPenyakit')}}" method="post" class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="edit_id" value="{{ $pasien->id }}" id="edit_id">
				<div class="modal-body">
					<div class="panel-body">
						<div class="form-group @if ($errors->has('penyakit')) has-error @endif">
							<label class="col-md-3 control-label">Penyakit </label>
							<div class="col-md-9">
								<select name="penyakit" class="form-control">
									<option value="">- Pilih penyakit -</option>
									@foreach($penyakits as $value)
										@if($pasien->penyakit_id != 0)
											@if($pasien->penyakit->id != $value->id)
												<option value="{{ $value->id }}">{{ $value->nama_penyakit }}</option>
											@endif
										@else
											<option value="{{ $value->id }}">{{ $value->nama_penyakit }}</option>
										@endif
									@endforeach
								</select>
								@if ($errors->has('penyakit')) <p class="help-block">{{ $errors->first('penyakit') }}</p> @endif
							</div>
						</div>
						@if($pasien->penyakit_id != 0)
						<div class="form-group">
							<label class="col-sm-3 control-label">Catat ke riwayat? </label>
							<div class="col-sm-9">
								<div class="block-inner" style="margin-bottom:0px;">
									<label class="checkbox-inline checkbox-success">
										<div class="checker">
											<span class="checked">
												<input class="styled" checked="checked" type="checkbox" name="history_penyakit">
											</span>
										</div>
										Catat
									</label>
								</div>
							</div>
						</div>
						@endif
					</div>
				</div>
			<div class="modal-footer">
				<button class="btn btn-warning" data-dismiss="modal"><i class="icon-cancel-circle"></i> Batal</button>
				<button class="btn btn-primary" type="submit" value="Import" id="form-overview"><i class="icon-disk"></i> Simpan</button>
			</div>
			</form>
		</div>
	</div>
</div>
<div id="modal_rs" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-home5"></i> Manage rumah sakit</h4>
			</div>
			<form action="{{URL('pasien/setRs')}}" method="post" class="form-horizontal">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="edit_id" value="{{ $pasien->id }}" id="edit_id">
			<div class="modal-body">
				<div class="panel-body">
					<div class="form-group @if ($errors->has('rs')) has-error @endif">
			            <label class="col-md-3 control-label">Rumah Sakit </label>
			            <div class="col-md-9">
			              <select name="rs" class="form-control">
			                	<option value="">- Pilih rumah sakit -</option>
			                @foreach($rss as $value)
			                	@if($pasien->rs_id != 0)
									@if($pasien->rs_id != $value->id)
				                	<option value="{{ $value->id }}">{{ $value->nama_rs }}</option>
				                	@endif
								@else
				                	<option value="{{ $value->id }}">{{ $value->nama_rs }}</option>
								@endif
			               	@endforeach
			              </select>
			              @if ($errors->has('rs')) <p class="help-block">{{ $errors->first('rs') }}</p> @endif
			            </div>
			        </div>
					@if($pasien->rs_id != 0)
					<div class="form-group">
						<label class="col-sm-3 control-label">Catat ke riwayat? </label>
						<div class="col-sm-9">
							<div class="block-inner" style="margin-bottom:0px;">
								<label class="checkbox-inline checkbox-success">
									<div class="checker">
										<span class="checked">
											<input class="styled" checked="checked" type="checkbox" name="history_rs">
										</span>
									</div>
									Catat
								</label>
							</div>
						</div>
					</div>
					@endif
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-warning" data-dismiss="modal"><i class="icon-cancel-circle"></i> Batal</button>
				<button class="btn btn-primary" type="submit" value="Import" id="form-overview"><i class="icon-disk"></i> Simpan</button>
			</div>
			</form>
		</div>
	</div>
</div>
<div id="modal_dokter" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-heart6"></i> Manage dokter</h4>
			</div>
			<form action="{{URL('pasien/setDokter')}}" method="post" class="form-horizontal">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="edit_id" value="{{ $pasien->id }}" id="edit_id">
			<div class="modal-body">
				<div class="panel-body">
					<div class="form-group @if ($errors->has('dokter')) has-error @endif">
			            <label class="col-md-3 control-label">Dokter </label>
			            <div class="col-md-9">
			              <select name="dokter" class="form-control">
			                	<option value="">- Pilih dokter -</option>
			                @foreach($dokters as $value)
			                	@if($pasien->dokter_id != 0)
									@if($pasien->dokter_id != $value->id)
				                	<option value="{{ $value->id }}">{{ $value->nama_dokter }}</option>
				                	@endif
								@else
				                	<option value="{{ $value->id }}">{{ $value->nama_dokter }}</option>
								@endif
			               	@endforeach
			              </select>
			              @if ($errors->has('dokter')) <p class="help-block">{{ $errors->first('dokter') }}</p> @endif
			            </div>
			        </div>
					@if($pasien->dokter_id != 0)
					<div class="form-group">
						<label class="col-sm-3 control-label">Catat ke riwayat? </label>
						<div class="col-sm-9">
							<div class="block-inner" style="margin-bottom:0px;">
								<label class="checkbox-inline checkbox-success">
									<div class="checker">
										<span class="checked">
											<input class="styled" checked="checked" type="checkbox" name="history_dokter">
										</span>
									</div>
									Catat
								</label>
							</div>
						</div>
					</div>
					@endif
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-warning" data-dismiss="modal"><i class="icon-cancel-circle"></i> Batal</button>
				<button class="btn btn-primary" type="submit" value="Import" id="form-overview"><i class="icon-disk"></i> Tambah</button>
			</div>
			</form>
		</div>
	</div>
</div>
<div id="modal_obat" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-heart6"></i> Manage obat</h4>
			</div>
			<form action="{{URL('pasien/setObat')}}" method="post" class="form-horizontal">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="edit_id" value="{{ $pasien->id }}" id="edit_id">
			<div class="modal-body">
				<div class="panel-body">
					<div class="form-group @if ($errors->has('obat')) has-error @endif">
			            <label class="col-md-3 control-label">Obat </label>
			            <div class="col-md-9">
			              <select name="obat" class="form-control">
			                	<option value="">- Pilih obat -</option>
			                @foreach($obats as $value)
			                	@if(!in_array($value->id, $obatsId) )
		                		<option value="{{ $value->id }}">{{ $value->nama_obat }}</option>
		                		@endif
			               	@endforeach
			              </select>
			              @if ($errors->has('obat')) <p class="help-block">{{ $errors->first('obat') }}</p> @endif
			            </div>
			        </div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-warning" data-dismiss="modal"><i class="icon-cancel-circle"></i> Batal</button>
				<button class="btn btn-primary" type="submit" value="Import" id="form-overview"><i class="icon-disk"></i> Tambah</button>
			</div>
			</form>
		</div>
	</div>
</div>
<div id="modal_asuransi" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-file4"></i> Manage asuransi</h4>
			</div>
			<form action="{{URL('pasien/setAsuransi')}}" method="post" class="form-horizontal">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="edit_id" value="{{ $pasien->id }}" id="edit_id">
			<div class="modal-body">
				<div class="panel-body">
					<div class="form-group @if ($errors->has('asuransi')) has-error @endif">
			            <label class="col-md-3 control-label">Penyakit </label>
			            <div class="col-md-9">
			              <select name="asuransi" class="form-control">
			                	<option value="">- Pilih asuransi -</option>
			                @foreach($asuransis as $value)
			                	@if($pasien->asuransi_id != 0)
									@if($pasien->asuransi_id != $value->id)
				                	<option value="{{ $value->id }}">{{ $value->nama_asuransi }}</option>
				                	@endif
								@else
				                	<option value="{{ $value->id }}">{{ $value->nama_asuransi }}</option>
								@endif
			               	@endforeach
			              </select>
			              @if ($errors->has('asuransi')) <p class="help-block">{{ $errors->first('asuransi') }}</p> @endif
			            </div>
			        </div>
					@if($pasien->asuransi_id != 0)
					<div class="form-group">
						<label class="col-sm-3 control-label">Catat ke riwayat? </label>
						<div class="col-sm-9">
							<div class="block-inner" style="margin-bottom:0px;">
								<label class="checkbox-inline checkbox-success">
									<div class="checker">
										<span class="checked">
											<input class="styled" checked="checked" type="checkbox" name="history_asuransi">
										</span>
									</div>
									Catat
								</label>
							</div>
						</div>
					</div>
					@endif
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-warning" data-dismiss="modal"><i class="icon-cancel-circle"></i> Batal</button>
				<button class="btn btn-primary" type="submit" value="Import" id="form-overview"><i class="icon-disk"></i> Simpan</button>
			</div>
			</form>
		</div>
	</div>
</div>
<div id="modal_obat_delete" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-inject"></i> Manage obat</h4>
			</div>
			<form action="{{URL('pasien/hapusObat')}}" method="post" class="form-horizontal">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="edit_id" value="{{ $pasien->id }}" id="edit_id">
			<input type="hidden" name="obat" id="value_obat_delete">
			<div class="modal-body">
				<div class="panel-body">
					<div class="form-group">
						<label class="col-sm-3 control-label">Catat ke riwayat? </label>
						<div class="col-sm-9">
							<div class="block-inner" style="margin-bottom:0px;">
								<label class="checkbox-inline checkbox-success">
									<div class="checker">
										<span class="checked">
											<input class="styled" checked="checked" type="checkbox" name="history_obat">
										</span>
									</div>
									Catat
								</label>
							</div>
						</div>
					</div>				
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-warning" data-dismiss="modal"><i class="icon-cancel-circle"></i> Batal</button>
				<button class="btn btn-primary" type="submit" value="Import" id="form-overview"><i class="icon-disk"></i> Hapus</button>
			</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$(".obat_delete").click(function(event){
			var elem = document.getElementById("value_obat_delete");
			elem.value = event.target.id;
		});
	});
</script>
@stop

@section('footerExtraScript')

@stop