@extends('base')

@section('extraStyle')
<title>ELGEKA - Artikel</title>
<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
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

@if (Session::has('delete'))
<div class="callout callout-success fade in">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<h5>Hapus berhasil</h5>
	<p>Artikel telah berhasil dihapus</p>
</div>
@endif

<ul class="info-blocks" style="text-align: left;">
	<li class="bg-primary">
		<div class="top-info"><a data-toggle="modal" role="button" href="#iconified_modal">Artikel Baru</a><small>buat artikel baru</small></div>
		<a href="{{ URL('artikel-admin-create') }}"><i class="icon-file4"></i></a><span class="bottom-info bg-danger"></span>
	</li>
</ul>

@foreach($artikels as $key)
<div class="panel panel-default">
	<div class="panel-heading">
		<h6 class="panel-title"><i class="icon-bubble4"></i> {{ $key->judul }}<small> {{ $key->created_at }}</small></h6>
		<h6 class="panel-title pull-right">
			<a href="{{ URL('artikel-admin-edit/'.$key->id) }}" title="Edit"><i class="icon-pencil text-success edit_news" id="{{ $key->id }}"></i></a>
			&nbsp;
			<a href="#" data-toggle="modal" data-target="#delete_modal" title="Delete"><i class="icon-close text-danger delete_news" id="{{ $key->id }}"></i></a>		
		</h6>
	</div>
	<div class="panel-body" style="max-height: 300px;overflow-y: scroll;">
		{!! $key->isi !!}
	</div>
</div>
@endforeach
<div class="text-center block">
{!! $artikels->render() !!}
</div>

<div id="iconified_modal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-user-plus2"></i> Tambah Artikel baru</h4>
			</div>
			<form method="post" action="{{URL('artikel-admin-create')}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="modal-body">
					<div class="form-group @if ($errors->has('judul')) has-error @endif">
						<input type="text" class="form-control" placeholder="Title" name="judul">
						@if ($errors->has('judul')) <p class="help-block">{{ $errors->first('judul') }}</p> @endif
					</div>
					<textarea class="form-control" placeholder="Enter text ..." name="isi"></textarea>
					<div class="form-group @if ($errors->has('isi')) has-error @endif">
						@if ($errors->has('isi')) <p class="help-block">{{ $errors->first('isi') }}</p> @endif
					</div>

				</div>
				<div class="modal-footer">
					<button class="btn btn-warning" data-dismiss="modal"><i class="icon-cancel-circle"></i> Batal</button>
					<button class="btn btn-primary" type="submit" value="Import" id="form-overview"><i class="icon-download2"></i> Tambah</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div id="delete_modal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-warning"></i> Hapus Artikel?</h4>
			</div>
			<div class="modal-body with-padding">
				Hapus artikel ini?
			</div>
			<div class="modal-footer">
				<button class="btn btn-warning" data-dismiss="modal"><i class="icon-cancel-circle"></i> Batal</button>
				<a href="#" class="btn btn-primary" id="delete_news"><i class="icon-remove3"></i> Hapus</a>
			</div>
		</div>
	</div>
</div>

@stop

@section('footerExtraScript')
<script type="text/javascript">
	@if($errors->has('error'))
	$(window).load(function(){
        $('#iconified_modal').modal('show');
    });
    @endif
	$(document).ready(function() {
		$(".delete_news").click(function(event){
			$("#delete_news").prop('href', 'artikel-admin-delete/' + event.target.id);
		});
		$(document).on('focusin', function(e) {
		    if ($(event.target).closest(".mce-window").length) {
		        e.stopImmediatePropagation();
		    }
		});
	});
</script>
@stop