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
  </div>
</div>
</div>

@stop

@section('footerExtraScript')

@stop