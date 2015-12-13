<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('css/londinium-theme.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('css/styles.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('css/icons.min.css')}}" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
	<script type="text/javascript" src="{{ URL::asset('js/plugins/charts/sparkline.min.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/plugins/forms/uniform.min.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/plugins/forms/select2.min.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/plugins/forms/inputmask.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/plugins/forms/autosize.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/plugins/forms/inputlimit.min.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/plugins/forms/listbox.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/plugins/forms/multiselect.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/plugins/forms/validate.min.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/plugins/forms/tags.min.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/plugins/forms/switch.min.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/plugins/forms/uploader/plupload.full.min.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/plugins/forms/uploader/plupload.queue.min.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/plugins/forms/wysihtml5/wysihtml5.min.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/plugins/forms/wysihtml5/toolbar.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/plugins/interface/daterangepicker.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/plugins/interface/fancybox.min.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/plugins/interface/moment.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/plugins/interface/jgrowl.min.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/plugins/interface/datatables.min.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/plugins/interface/colorpicker.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/plugins/interface/fullcalendar.min.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/plugins/interface/timepicker.min.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/plugins/interface/collapsible.min.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/application.js')}}"></script>     

	<script type="text/javascript" src="{{ URL::asset('js/dataTables.columnFilter.js')}}"></script>
	<style>
		body{
			background-image:url(images/bg.jpg);
    		background-repeat:repeat;
		}
		.navigation > li ul > li> a > i {
			font-size: 16px;
			right: 14px;
			top: 13px;
			opacity: 0.5;
			position: absolute;
		}
		.navbar-inverse {
    background-color: #E54D4D;
}
	</style>  

	@yield('extraStyle')
</head>
<body  class="sidebar-wide">
	

	<div class="login-wrapper">
  <form action="{{ URL('admin-DoLogin') }}" role="form" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="popup-header"><span class="text-semibold">Admin Login</span>
    </div>
    <div class="well">
    	@if(Session::has('fail'))
    	<div class="alert alert-danger fade in block-inner">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <i class="icon-closeicon"></i> Username atau Password salah.
        </div>
        @endif
      <div class="form-group has-feedback @if ($errors->has('username')) has-error @endif">
        <label>Username</label>
        <input type="text" class="form-control" placeholder="Username" name="username">
        @if ($errors->has('username')) <p class="help-block">{{ $errors->first('username') }}</p> @endif
        <i class="icon-users form-control-feedback"></i></div>
      <div class="form-group has-feedback @if ($errors->has('password')) has-error @endif">
        <label>Password</label>
        <input type="password" class="form-control" placeholder="Password" name="password">
        @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
        <i class="icon-lock form-control-feedback"></i></div>
      <div class="row form-actions">
        <div class="col-xs-6">
        </div>
        <div class="col-xs-6">
          <button type="submit" class="btn btn-warning pull-right"><i class="icon-menu2"></i> Login</button>
        </div>
      </div>
    </div>
  </form>
</div>


    @section('footerScript')
    
    @show
    
    @section('footerExtraScript')

    @show
</body>
</html>