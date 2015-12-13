@extends('front.base')

@section('extraStyle')
	<title>ELGEKA - Halaman Utama</title>
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


@section('body')
	<div class="container main">
		<div class="row">
			<div class="col-md-9">
				<div class="konten">
					<h2>Berita Terbaru <a href="{{ URL('berita') }}" class="pull-right btn btn-warning">Daftar Berita</a></h2>
					<hr>
					<div class="berita-list">
						@foreach($artikel as $key)
							<div class="berita">
								<a href="{{ URL('berita/'.$key->id.'-'.str_replace(" ","-",$key->judul)) }}"><h3>{{ $key->judul }}</h3></a>
								<div class="isi">{!! substr($key->isi, 0, 200) !!}<a href="{{ URL('berita/'.$key->id.'-'.str_replace(" ","-",$key->judul)) }}"> selengkapnya...</a></div>
							</div>
							<hr>
						@endforeach
					</div>
				</div>
				<div class="konten chart1">
					<h2>Jumlah pasien per penyakit per asuransi</h2>
					<hr>
					<div id="c_ribet" style="mwidth:100%; height: 400px; margin: 0 auto"></div>
				</div>
			</div>
			<div class="col-md-3">
                @include('front.sidebar')
            </div>
		</div>
	</div>
@stop

@section('footerExtraScript')
<script type="text/javascript">
	function shuffle(a){for(var b=a.length,d,c;0!==b;)c=Math.floor(Math.random()*b),--b,d=a[b],a[b]=a[c],a[c]=d;return a};
	var colorsT="#1abc9c #2ecc71 #3498db #9b59b6 #34495e #16a085 #27ae60 #2980b9 #8e44ad #2c3e50 #f1c40f #e67e22 #e74c3c #ecf0f1 #95a5a6 #f39c12 #d35400 #c0392b #bdc3c7 #7f8c8d".split(" ");

	$(document).ready(function () {
		
		//CHART ASURANSI
        Highcharts.theme={colors:shuffle(colorsT)};Highcharts.setOptions(Highcharts.theme);

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