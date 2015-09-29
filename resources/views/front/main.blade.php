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
          <div class="pull-left"><a href="{{ URL('login') }}"><h4>Masuk</h4></a></div>
          <div class="pull-right"><a href="#"><h4>Daftar</h4></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="recent-post">
            << recent post >>
          </div>
        </div>
        <div class="col-md-4">
          <div class="side-content">
            << content >>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
