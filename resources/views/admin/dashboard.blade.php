@extends('base')

@section('extraStyle')
<title>ELGEKA - Dashboard</title>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>

<style type="text/css">
	svg > text{
		display: none;
	}
    .highcharts-button{
        visibility: hidden;
    }
</style>
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

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h6 class="panel-title"><i class="icon-clipboard"></i> Jumlah pasien per penyakit per asuransi</h6>
            </div>
            <div class="panel-body">
                <div id="c_ribet" style="mwidth:100%; height: 400px; margin: 0 auto"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h6 class="panel-title"><i class="icon-calendar2"></i> Jumlah pasien per program</h6>
            </div>
            <div class="panel-body">
                <div id="c_asuransi" style="width:100%; height: 400px; margin: 0 auto"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h6 class="panel-title"><i class="icon-inject"></i> Jumlah pasien per obat</h6>
            </div>
            <div class="panel-body">
                <div id="c_obat" style="width:100%; height: 400px; margin: 0 auto"></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h6 class="panel-title"><i class="icon-heart6"></i> Jumlah pasien per penyakit</h6>
            </div>
            <div class="panel-body">
                <div id="c_penyakit" style="width:100%; height: 400px; margin: 0 auto"></div>
            </div>
        </div>        
    </div>
</div>

<script type="text/javascript">
	function shuffle(a){for(var b=a.length,d,c;0!==b;)c=Math.floor(Math.random()*b),--b,d=a[b],a[b]=a[c],a[c]=d;return a};
	var colorsT="#1abc9c #2ecc71 #3498db #9b59b6 #34495e #16a085 #27ae60 #2980b9 #8e44ad #2c3e50 #f1c40f #e67e22 #e74c3c #ecf0f1 #95a5a6 #f39c12 #d35400 #c0392b #bdc3c7 #7f8c8d".split(" ");

	$(document).ready(function () {
		
		//CHART ASURANSI
        Highcharts.theme={colors:shuffle(colorsT)};Highcharts.setOptions(Highcharts.theme);

        $('#c_asuransi').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: ''
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.y}</b> ({point.percentage:.1f} %)'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        distance: -30,
                        format: '<b>{point.name}</b><br><i>{point.y} pasien</i>'
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Jumlah pasien',
                colorByPoint: true,
                data: [
                @foreach($asuransi as $key => $value)
                {
                    name: "{{ $value->name }}",
                    y: {{ $value->value }}
                },
                @endforeach
                ]
            }]
        });

        //CHART OBAT
        Highcharts.theme={colors:shuffle(colorsT)};Highcharts.setOptions(Highcharts.theme);

        $('#c_obat').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: ''
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.y}</b> ({point.percentage:.1f} %)'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        distance: -30,
                        format: '<b>{point.name}</b><br><i>{point.y} pasien</i>'
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Jumlah pasien',
                colorByPoint: true,
                data: [
                @foreach($obat as $key => $value)
                {
                    name: "{{ $value->name }}",
                    y: {{ $value->jumlah }}
                },
                @endforeach
                ]
            }]
        });

        //CHART ASURANSI
        Highcharts.theme={colors:shuffle(colorsT)};Highcharts.setOptions(Highcharts.theme);

        $('#c_penyakit').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: ''
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.y}</b> ({point.percentage:.1f} %)'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        distance: -30,
                        format: '<b>{point.name}</b><br><i>{point.y} pasien</i>'
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Jumlah pasien',
                colorByPoint: true,
                data: [
                @foreach($penyakit as $key => $value)
                {
                    name: "{{ $value->name }}",
                    y: {{ $value->value }}
                },
                @endforeach
                ]
            }]
        });

        $('#c_ribet').highcharts({
            chart: {
                type: 'column'
            },
            xAxis: {
                categories: [
                    @foreach($data['asuransi'] as $key)
                    '{{ $key->name }}',
                    @endforeach
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Pasien'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y} pasien</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [
            @foreach($data['penyakit'] as $penyakit)
            {
                name: '{{ $penyakit->name }}',
                data: [
                    @foreach($data['asuransi'] as $asuransi)
                        @if(isset($ribet[$asuransi->name][$penyakit->name]))
                        {{ $ribet[$asuransi->name][$penyakit->name] }},
                        @else
                        0,
                        @endif
                    @endforeach
                ]

            },
            @endforeach
            ]
        });

    });
</script>
@stop

@section('footerExtraScript')

@stop