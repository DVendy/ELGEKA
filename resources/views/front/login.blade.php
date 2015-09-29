<!DOCTYPE html>
<html lang="en">
<head>
  <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ URL::asset('css/site.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          logo
        </div>
        <div class="col-md-10">
          <h3>Selamat Datang di Website</h3>
          <h1>HIMPUNAN ELGEKA</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="menu-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">
          <div class="pull-left"><a href="#"><h4>Masuk</h4></a></div>
          <div class="pull-right"><a href="#"><h4>Daftar</h4></a></div>
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
