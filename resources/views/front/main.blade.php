<!DOCTYPE html>
<html lang="en">
<head>
  <title>Elgeka - Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href="{{ URL::asset('css/site.css')}}" rel="stylesheet" type="text/css">
  
  <link href="{{ URL::asset('css/icons.min.css')}}" rel="stylesheet" type="text/css">
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
          <li><a href="{{ URL('createArtikel') }}">Artikel</a></li>
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
        <div class="col-sm-2" style="text-align: center;">
          <img src="images/logo.png">
        </div>
        <div class="col-sm-10">
          <h3>Selamat Datang di Website</h3>
          <h1>HIMPUNAN ELGEKA</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="container">
      @if (session()->has('logout'))
      <div class="alert alert-info fade in block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <i class="icon-info"></i> Anda telah berhasil logout.
      </div>
      @endif
      <div class="row">
        <div class="col-sm-8">
            @foreach ($artikel as $key)
            <div class="news">
              <h1 class="judul">{{ $key->judul }}</h1>
              <hr>
              <h5><i class="icon-clock"></i> {{ $key->created_at }}</h5>
              <hr>
              <div class="container-fluid isi"> {!! $key->isi !!} </div>
            </div>
            @endforeach
        </div>
        <div class="col-sm-4">
          <div class="side-content">
            << content >>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
