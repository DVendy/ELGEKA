<!DOCTYPE html>
<html lang="en">
<head>
  <title>Elgeka - Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href="{{ URL::asset('css/site.css')}}" rel="stylesheet" type="text/css">
  
  <script type="text/javascript" src="{{ URL::asset('js/plugins/forms/inputmask.js')}}"></script>
</head>
<body>
  <nav class="navbar navbar-default navbar-elgeka">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ URL('/') }}">Elgeka</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        @if (Auth::check())
        <ul class="nav navbar-nav">
          <li class="active"><a href="{{ URL('/') }}">Halaman utama</a></li>
          <li><a href="#">Transaksi</a></li>
          <li><a href="#">Artikel</a></li>
        </ul>
        @endif

        <ul class="nav navbar-nav navbar-right">
          @if (!Auth::check())
          <li><a href="{{ URL('login') }}">Login</a></li>
          <li><a href="{{ URL('register') }}">Register</a></li>
          @else
        <li><a href="{{ URL('logout') }}">Logout</a></li>
          @endif
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div class="header">
    <div class="container">
      <div class="row">
        <div class="col-sm-4" style="text-align: center;">
          <img src="images/logo.png">
        </div>
        <div class="col-sm-8">
          <h3>Selamat Datang di Website</h3>
          <h1>HIMPUNAN ELGEKA</h1>
        </div>
      </div>
    </div>
  </div>
  
  <div class="content">
    <div class="container">
      <div class="col-sm-8 col-sm-offset-2">
        <div class="login-panel" style="padding-bottom: 0;">
          <form class="form-horizontal" action="{{URL('doRegister')}}" method="post">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <h3>Data Akun</h3>
            <div class="form-group @if ($errors->has('username')) has-error @endif">
              <label class="col-sm-4 control-label">Username: </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="username" value="{{ Input::old('username') }}">
                @if ($errors->has('username')) <p class="help-block">{{ $errors->first('username') }}</p> @endif
              </div>
            </div>
            <div class="form-group @if ($errors->has('email')) has-error @endif">
              <label class="col-sm-4 control-label">Email: </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="email" value="{{ Input::old('email') }}">
                @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
              </div>
            </div>
            <div class="form-group @if ($errors->has('password')) has-error @endif">
              <label class="col-sm-4 control-label">Password:</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" name="password">
                @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
              </div>
            </div>
            <div class="form-group @if ($errors->has('password2')) has-error @endif">
              <label class="col-sm-4 control-label">Ulangi password:</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" name="password2">
                @if ($errors->has('password2')) <p class="help-block">{{ $errors->first('password2') }}</p> @endif
              </div>
            </div>
            <hr>
            <h3>Data Diri</h3>
            <div class="form-group @if ($errors->has('nama')) has-error @endif">
              <label class="col-sm-4 control-label">Nama: </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="nama" value="{{ Input::old('nama') }}">
                @if ($errors->has('nama')) <p class="help-block">{{ $errors->first('nama') }}</p> @endif
              </div>
            </div>
            <div class="form-group @if ($errors->has('ttl_t')) has-error @endif">
              <label class="col-sm-4 control-label">Tempat lahir: </label>
              <div class="col-sm-8">
                <textarea class="form-control" name="ttl_t"></textarea>
                @if ($errors->has('ttl_t')) <p class="help-block">{{ $errors->first('ttl_t') }}</p> @endif
              </div>
            </div>
            <div class="form-group @if ($errors->has('ttl_tl')) has-error @endif">
              <label class="col-sm-4 control-label">Tanggal lahir: </label>
              <div class="col-sm-8">
                <input class="form-control" name="ttl_tl" data-mask="99/99/9999" type="text" placeholder="ex: 31/12/1995">
                @if ($errors->has('ttl_tl')) <p class="help-block">{{ $errors->first('ttl_tl') }}</p> @endif
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Jenis kelamin: </label>
              <div class="col-sm-8">
                <label class="radio-inline radio-success">
                  <input type="radio" name="jk" class="styled" checked="checked" value="l">
                  Laki - laki
                </label>
                <label class="radio-inline radio-success">
                  <input type="radio" name="jk" class="styled" value="p">
                  Perempuan
                </label>
              </div>
            </div>
            <div class="form-group @if ($errors->has('alamat')) has-error @endif">
              <label class="col-sm-4 control-label">Alamat: </label>
              <div class="col-sm-8">
                <textarea class="form-control" name="alamat"></textarea>
                @if ($errors->has('alamat')) <p class="help-block">{{ $errors->first('alamat') }}</p> @endif
              </div>
            </div>
            <div class="form-group @if ($errors->has('hp1')) has-error @endif">
              <label class="col-sm-4 control-label">Nomor telepon 1: </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="hp1"value="{{ Input::old('hp1') }}">
                @if ($errors->has('hp1')) <p class="help-block">{{ $errors->first('hp1') }}</p> @endif
              </div>
            </div>
            <div class="form-group @if ($errors->has('hp2')) has-error @endif">
              <label class="col-sm-4 control-label">Nomor telepon 2: </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="hp2" value="{{ Input::old('hp2') }}">
                @if ($errors->has('hp2')) <p class="help-block">{{ $errors->first('hp2') }}</p> @endif
              </div>
            </div>
            <div class="form-group @if ($errors->has('telp_rumah')) has-error @endif">
              <label class="col-sm-4 control-label">Telepon Rumah: </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="telp_rumah" value="{{ Input::old('telp_rumah') }}">
                @if ($errors->has('telp_rumah')) <p class="help-block">{{ $errors->first('telp_rumah') }}</p> @endif
              </div>
            </div>
            <hr>
            <div class="form-group">
              <div class="col-sm-4">

              </div>
              <div class="col-sm-8">
                <button type="submit" class="btn btn-success pull-right">Daftar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
  </html>
