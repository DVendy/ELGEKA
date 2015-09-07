@extends('base')

@section('extraStyle')
	<title>ELGEKA - Dashboard</title>
@stop

@section('headerExtraScript')
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
@stop

@section('pageTitle')
Dashboard
@stop

@section('pageSubtitle')
Halaman utama
@stop

@section('body')
<div class="breadcrumb-line">
	<ul class="breadcrumb">
		<li><a href="{{ URL('/') }}">Home</a></li>
		<li class="active">Dashboard</li>
	</ul>
</div>
<< dashboard >>
@stop

@section('footerExtraScript')

@stop