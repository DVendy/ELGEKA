@extends('base')

@section('extraStyle')
	<title>GJM - Product</title>
@stop

@section('headerExtraScript')
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
@stop

@section('pageTitle')
Product
@stop

@section('pageSubtitle')
Product list
@stop

@section('body')
<div class="breadcrumb-line">
	<ul class="breadcrumb">
		<li><a href="{{ URL('/') }}">Home</a></li>
		<li class="active">Product</li>
	</ul>
</div>
body
@stop

@section('footerExtraScript')

@stop