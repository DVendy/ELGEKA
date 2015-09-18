@extends('base')

@section('extraStyle')
	<title>ELGEKA - Dashboard</title>
	<script language="javascript" type="text/javascript" src="js/chart/jquery.js"></script>
	<script language="javascript" type="text/javascript" src="js/chart/jquery.flot.js"></script>
	<script language="javascript" type="text/javascript" src="js/chart/jquery.flot.pie.js"></script>
@stop

@section('headerExtraScript')
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
<div class="panel panel-default">
	<div class="panel-heading">
		<h6 class="panel-title"><i class="icon-calendar2"></i> Empty updating graph</h6>
	</div>
	<div class="panel-body">
		<div id="placeholder" style="width:100%;height:300px"></div>
	</div>
</div>

<script type="text/javascript">
	$(function() {

		// Example Data

		//var data = [
		//	{ label: "Series1",  data: 10},
		//	{ label: "Series2",  data: 30},
		//	{ label: "Series3",  data: 90},
		//	{ label: "Series4",  data: 70},
		//	{ label: "Series5",  data: 80},
		//	{ label: "Series6",  data: 110}
		//];

		//var data = [
		//	{ label: "Series1",  data: [[1,10]]},
		//	{ label: "Series2",  data: [[1,30]]},
		//	{ label: "Series3",  data: [[1,90]]},
		//	{ label: "Series4",  data: [[1,70]]},
		//	{ label: "Series5",  data: [[1,80]]},
		//	{ label: "Series6",  data: [[1,0]]}
		//];

		//var data = [
		//	{ label: "Series A",  data: 0.2063},
		//	{ label: "Series B",  data: 38888}
		//];

		// Randomly Generated Data

		var data = [],
			series = Math.floor(Math.random() * 6) + 3;

		for (var i = 0; i < series; i++) {
			data[i] = {
				label: "Series" + (i + 1),
				data: Math.floor(Math.random() * 100) + 1
			}
		}

		var placeholder = $("#placeholder");

		$.plot(placeholder, data, {
			series: {
				pie: { 
					show: true
				}
			},
		    grid: {
		        hoverable: true,
		    }
		});
		
	});
</script>
@stop

@section('footerExtraScript')

@stop