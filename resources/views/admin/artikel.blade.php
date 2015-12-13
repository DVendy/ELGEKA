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
<ul class="info-blocks" style="text-align: left;">
	<li class="bg-primary">
		<div class="top-info"><a data-toggle="modal" role="button" href="#iconified_modal">Artikel Baru</a><small>buat artikel baru</small></div>
		<a data-toggle="modal" role="button" href="#iconified_modal"><i class="icon-file4"></i></a><span class="bottom-info bg-danger"></span>
	</li>
</ul>

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

<div id="edit_modal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-user-plus2"></i> Edit Artikel</h4>
			</div>
			<form action="{{URL('Artikel/update')}}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="edit_id" value="1" id="edit_id" value="{{ Input::old('edit_id') }}">
				<div class="modal-body">
					<div class="panel-body">
						<div class="form-group @if ($errors->has('edit_nama_Artikel')) has-error @endif">
							<label class="col-sm-2 control-label">Nama Artikel: </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="edit_nama_Artikel" id="edit_nama_Artikel" value="{{ Input::old('edit_nama_Artikel') }}">
								@if ($errors->has('edit_nama_Artikel')) <p class="help-block">{{ $errors->first('edit_nama_Artikel') }}</p> @endif
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-warning" data-dismiss="modal"><i class="icon-cancel-circle"></i> Cancel</button>
					<button class="btn btn-primary" type="submit" value="Import" id="form-overview"><i class="icon-pencil4"></i> Update</button>
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
				<h4 class="modal-title"><i class="icon-warning"></i> Delete Artikel</h4>
			</div>
			<div class="modal-body with-padding">
				Hapus Artikel ini??
			</div>
			<div class="modal-footer">
				<button class="btn btn-warning" data-dismiss="modal"><i class="icon-cancel-circle"></i> Cancel</button>
				<a href="#" class="btn btn-primary" id="delete_user"><i class="icon-remove3"></i> Delete</a>
			</div>
		</div>
	</div>
</div>

@stop

@section('footerExtraScript')
<script type="text/javascript">
@if($errors->has('create'))
$(window).load(function(){
	$('#iconified_modal').modal('show');
});
@endif
@if($errors->has('update'))
$(window).load(function(){
	$('#edit_modal').modal('show');
});
@endif
$(document).ready(function() {
	$(".delete_user").click(function(event){
		$("#delete_user").prop('href', 'Artikel/delete-' + event.target.id);
	});

	$(".edit_user").click(function(event){
		$.get('Artikel/getAjax/' + event.target.id, function( data ) {
			var elem = document.getElementById("edit_id");
			elem.value = data['id'];
			elem = document.getElementById("edit_nama_Artikel");
			elem.value = data['nama_Artikel'];
		});
	});
});
</script>
@stop