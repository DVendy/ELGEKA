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
					<p>{{ isset($pasien->penyakit->nama_penyakit) ? $pasien->penyakit->nama_penyakit : '-' }}</p>
					<h3>Rumah Sakit</h3>
					<p>{{ isset($pasien->rs->nama_rs) ? $pasien->rs->nama_rs : '-' }}</p>
					<h3>Dokter</h3>
					@if($pasien->dokters->count() != 0)
					@foreach($pasien->dokters as $dokter)
					<p>- {{ $dokter->nama_dokter }}</p>
					@endforeach
					@else
					<p>-</p>
					@endif
					<h3>Obat</h3>
					@if($pasien->obats->count() != 0)
					@foreach($pasien->obats as $obat)
					<p>- {{ $obat->nama_obat }}</p>
					@endforeach
					@else
					<p>-</p>
					@endif
					<h3>Asuransi</h3>
					<p>{{ isset($pasien->asuransi->nama_asuransi) ? $pasien->asuransi->nama_asuransi : '-' }}</p>
				</div>
				<div class="col-sm-6">
					<ul class="info-blocks">
						<li class="bg-primary">
							<div class="top-info"><a data-toggle="modal" role="button" href="#modal_penyakit">Penyakit</a><small>manage penyakit</small></div>
							<a data-toggle="modal" role="button" href="#modal_penyakit"><i class="icon-heart6"></i></a><span class="bottom-info bg-info"></span>
						</li>
						<li class="bg-primary">
							<div class="top-info"><a data-toggle="modal" role="button" href="#modal_rs">Rumah Sakit</a><small>manage rumah sakit</small></div>
							<a data-toggle="modal" role="button" href="#modal_rs"><i class="icon-home5"></i></a><span class="bottom-info bg-info"></span>
						</li>
						<li class="bg-primary">
							<div class="top-info"><a data-toggle="modal" role="button" href="#modal_dokter">Dokter</a><small>manage dokter</small></div>
							<a data-toggle="modal" role="button" href="#modal_dokter"><i class="icon-glasses3"></i></a><span class="bottom-info bg-info"></span>
						</li>
						<li class="bg-primary">
							<div class="top-info"><a data-toggle="modal" role="button" href="#modal_obat">Obat</a><small>manage obat</small></div>
							<a data-toggle="modal" role="button" href="#modal_obat"><i class="icon-inject"></i></a><span class="bottom-info bg-info"></span>
						</li>
						<li class="bg-primary">
							<div class="top-info"><a data-toggle="modal" role="button" href="#modal_asuransi">Asuransi</a><small>manage asuransi</small></div>
							<a data-toggle="modal" role="button" href="#modal_asuransi"><i class="icon-file4"></i></a><span class="bottom-info bg-info"></span>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="tasks">
			
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
			<form action="{{URL('pasien/setPenyakit')}}" method="post">
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
			                	<option value="{{ $value->id }}">{{ $value->nama_penyakit }}</option>
			               	@endforeach
			              </select>
			              @if ($errors->has('penyakit')) <p class="help-block">{{ $errors->first('penyakit') }}</p> @endif
			            </div>
			        </div>
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
				<h4 class="modal-title"><i class="icon-heart6"></i> Manage rumah sakit</h4>
			</div>
			<form action="{{URL('pasien/setRs')}}" method="post">
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
			                	<option value="{{ $value->id }}">{{ $value->nama_rs }}</option>
			               	@endforeach
			              </select>
			              @if ($errors->has('rs')) <p class="help-block">{{ $errors->first('rs') }}</p> @endif
			            </div>
			        </div>
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
			<form action="{{URL('pasien/setDokter')}}" method="post">
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
			                	<option value="{{ $value->id }}">{{ $value->nama_dokter }}</option>
			               	@endforeach
			              </select>
			              @if ($errors->has('dokter')) <p class="help-block">{{ $errors->first('dokter') }}</p> @endif
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
<div id="modal_obat" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-heart6"></i> Manage obat</h4>
			</div>
			<form action="{{URL('pasien/setObat')}}" method="post">
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
			                	<option value="{{ $value->id }}">{{ $value->nama_obat }}</option>
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
				<h4 class="modal-title"><i class="icon-heart6"></i> Manage asuransi</h4>
			</div>
			<form action="{{URL('pasien/setAsuransi')}}" method="post">
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
			                	<option value="{{ $value->id }}">{{ $value->nama_asuransi }}</option>
			               	@endforeach
			              </select>
			              @if ($errors->has('asuransi')) <p class="help-block">{{ $errors->first('asuransi') }}</p> @endif
			            </div>
			        </div>
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
@stop

@section('footerExtraScript')

@stop