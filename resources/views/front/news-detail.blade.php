@extends('front.base')

@section('extraStyle')
	<title>ELGEKA - {{ $artikel->judul }}</title>
@stop

@section('headerExtraScript')

@stop


@section('body')
	<div class="container main">
		<div class="row">
			<div class="col-md-9">
				<div class="konten">
					<h2>{{ $artikel->judul }} <a href="{{ URL('berita') }}" class="pull-right btn btn-warning">Daftar Berita</a></h2>
					<hr>
					<h4>Oleh <strong>{{ $author }}</strong> pada: {{ $artikel->created_at }}</h4>
					<div class="berita">
						{!! $artikel->isi !!}
					</div>
				</div>
			</div>
			<div class="col-md-3">
                @include('front.sidebar')
            </div>
		</div>
	</div>
@stop

@section('footerExtraScript')

@stop