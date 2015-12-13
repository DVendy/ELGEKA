@extends('front.base')

@section('extraStyle')
	<title>ELGEKA - Berita</title>
@stop

@section('headerExtraScript')

@stop


@section('body')
	<div class="container main">
		<div class="row">
			<div class="col-md-9">
				<div class="konten">
					<h2>Daftar Berita <a href="{{ URL('/') }}" class="pull-right btn btn-warning">Halaman Utama</a></h2>
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
			</div>
			<div class="col-md-3">
                @include('front.sidebar')
            </div>
		</div>
	</div>
@stop

@section('footerExtraScript')

@stop