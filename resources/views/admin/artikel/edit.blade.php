@extends('base')

@section('extraStyle')
<title>ELGEKA - Artikel Baru</title>
<script type="text/javascript" src="{{ URL::asset('/') }}js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
	selector: "textarea",
	height: 500,
	theme: "modern",
	skin: 'light',
	menubar : false,
	convert_urls: false,
	plugins: [
	"advlist autolink lists charmap preview anchor",
	"searchreplace visualblocks code fullscreen",
	"insertdatetime media table contextmenu paste openmanager"
	],
	open_manager_upload_path: '../../../../images/artikel/', /* rel path starting from tinymce/plugins/openmanager */
    menu : { // this is the complete default configuration
    	file   : {title : 'File'  , items : 'ajaxsave | openmanager | print'},
    },
    paste_retain_style_properties: "all",
    toolbar: "undo redo | styleselect | bold italic underline strikethrough | bullist numlist openmanager | preview code"
});
</script>
@stop

@section('headerExtraScript')
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
@stop

@section('pageTitle')
Artikel
@stop

@section('pageSubtitle')
Manage Artikel
@stop

@section('body')
<div class="breadcrumb-line">
	<ul class="breadcrumb">
		<li><a href="{{ URL('/') }}">Home</a></li>
		<li class="active">Artikel</li>
	</ul>
</div>


<form method="post" action="{{URL('artikel-admin-doEdit')}}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="id" value="{{ $artikel->id }}">
	<div class="form-group @if ($errors->has('judul')) has-error @endif">
		<input type="text" class="form-control" placeholder="Judul" name="judul" value="{{ $artikel->judul }}">
		@if ($errors->has('judul')) <p class="help-block">{{ $errors->first('judul') }}</p> @endif
	</div>
	<textarea class="form-control" placeholder="Enter text ..." name="isi">{{ $artikel->isi }}</textarea>
	<div class="form-group @if ($errors->has('isi')) has-error @endif">
		@if ($errors->has('isi')) <p class="help-block">{{ $errors->first('isi') }}</p> @endif
	</div>
	<div class="form-group text-right">
		<button class="btn btn-warning" data-dismiss="modal"><i class="icon-cancel-circle"></i> Batal</button>
		<button class="btn btn-primary" type="submit" value="Import" id="form-overview"><i class="icon-download2"></i> Tambah</button>
	</div>
</form>

@stop

@section('footerExtraScript')

@stop