<!DOCTYPE html>
<html lang="en">
<head>
  <title>Elgeka - Artikel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href="{{ URL::asset('css/site.css')}}" rel="stylesheet" type="text/css">

  <script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
  <script type="text/javascript">
    tinymce.init({
      selector: "textarea",
      height: 500,
      theme: "modern",
      skin: 'light',
      menubar : false,
      plugins: [
      "advlist autolink lists charmap preview anchor",
      "searchreplace visualblocks code fullscreen",
      "insertdatetime media table contextmenu paste"
      ],

      toolbar: "undo redo | styleselect | bold italic underline strikethrough | bullist numlist | preview"
    });
  </script>
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
          <li><a href="{{ URL('/') }}">Halaman utama</a></li>
          <li><a href="#">Transaksi</a></li>
          <li class="active"><a href="{{ URL('artikel') }}">Artikel</a></li>
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
        <div class="col-md-2" style="text-align: center;">
          <img src="images/logo.png">
        </div>
        <div class="col-md-10">
          <h3>Selamat Datang di Website</h3>
          <h1>HIMPUNAN ELGEKA</h1>
        </div>
      </div>
    </div>
  </div>
  
  <div class="content">
    <div class="container">
    @if (session()->has('create'))
      <div class="alert alert-success fade in block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <i class="icon-info"></i> Artikel berhasil dibuat.
      </div>
    @endif
    @if (session()->has('edit'))
      <div class="alert alert-success fade in block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <i class="icon-info"></i> Artikel berhasil diubah.
      </div>
    @endif
    <h2>Daftar Artikel</h2>
    <a href="{{ URL('createArtikel') }}" class="btn btn-success">New Artikel</a>
    @foreach($artikels as $key)
      <div class="panel panel-default">
        <div class="panel-heading">
          <h6 class="panel-title"><i class="icon-bubble4"></i> {{ $key->judul }}
          <div class="pull-right">
            <a href="{{ URL('editArtikel/'.$key->id) }}" title="Edit">ubah</a>
            <a href="{{ URL('deleteArtikel/'.$key->id) }}" title="Edit">hapus</a>
          </div>
          <br><small> {{ $key->created_at }}</small>
          </h6>
        </div>
        <div class="panel-body" style="max-height: 300px;overflow-y: scroll;">
          {!! $key->isi !!}
        </div>
      </div>
      @endforeach
    </div>
  </div>
</body>
</html>
