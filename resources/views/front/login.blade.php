<!DOCTYPE html>
<html lang="en">
<head>
  <title>Elgeka - Login</title>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href="{{ URL::asset('css/site.css')}}" rel="stylesheet" type="text/css">
  
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
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Halaman utama</a></li>
        <li><a href="#">Transaksi</a></li>
        <li><a href="#">Artikel</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Login</a></li>
        <li><a href="#">Register</a></li>
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
      <div class="col-md-6 col-md-offset-3">
        <div class="login-panel">
          <form class="form-horizontal" method="post" action="{{ URL('doLogin') }}">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">Akun Pengguna</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Akun Pengguna">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-4 control-label">Kata Kunci</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Kata Kunci">
              </div>
            </div>
            &nbsp
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-4 control-label"><a href="#">lupa kata kunci</a></label>
              <div class="col-sm-8">
                <button type="submit" class="btn btn-default pull-right">Sign in</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
