@extends('base')

@section('extraStyle')
	<title>ELGEKA - Laporan</title>
@stop

@section('headerExtraScript')
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
@stop

@section('pageTitle')
Laporan
@stop

@section('pageSubtitle')
Manage laporan
@stop

@section('body')
<div class="breadcrumb-line">
	<ul class="breadcrumb">
		<li><a href="{{ URL('/') }}">Home</a></li>
		<li class="active">Laporan</li>
	</ul>
</div>

<div class="row">
<div class="col-md-6">
  <!-- Questions -->
  <h5><i class="icon-clipboard"></i> Pilih Laporan</h5>
  <div class="panel-group block">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h6 class="panel-title"><a class="collapsed" href="{{ URL('laporan/1') }}">1. Jumlah pasien berdasarkan penyakit per propinsi-perkota</a></h6>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h6 class="panel-title"><a class="collapsed" href="{{ URL('laporan/2') }}">2. Jumlah pasien berdasarkan obat per propinsi-perkota</a></h6>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h6 class="panel-title"><a class="collapsed" href="{{ URL('laporan/3') }}">3. Jumlah obat berdasarkan pasien</a></h6>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h6 class="panel-title"><a class="collapsed" href="{{ URL('laporan/4') }}">4. Jumlah pasien berdasarkan Rumah Sakit per propinsi-perkota</a></h6>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h6 class="panel-title"><a class="collapsed" href="{{ URL('laporan/5') }}">5. Daftar rumah sakit berdasarkan pasien</a></h6>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h6 class="panel-title"><a class="collapsed" href="{{ URL('laporan/6') }}">6. Jumlah obat berdasarkan Rumah sakit</a></h6>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h6 class="panel-title"><a class="collapsed" href="{{ URL('laporan/7') }}">7. Jumlah pasien berdasarkan dokter</a></h6>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h6 class="panel-title"><a class="collapsed" href="{{ URL('laporan/8') }}">8. Jumlah dokter berdasarkan pasien</a></h6>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h6 class="panel-title"><a class="collapsed" href="{{ URL('laporan/9') }}">9. Jumlah pasien berdasarkan program</a></h6>
      </div>
    </div>
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h6 class="panel-title"><a class="collapsed" href="#">10. Alamat pasien berdasarkan kecamatan</a></h6>
      </div>
    </div>
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h6 class="panel-title"><a class="collapsed" href="#">11. Jumlah pasien berdasarkan perkota</a></h6>
      </div>
    </div>
  </div>
</div>
</div>

@stop

@section('footerExtraScript')

@stop