@extends('front.base')

@section('extraStyle')
<title>ELGEKA - Halaman Utama</title>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script src="js/lokasi.js"></script>
<style type="text/css">
svg > text{
  display: none;
}
.highcharts-button{
  visibility: hidden;
}
</style>
@stop

@section('headerExtraScript')

@stop


@section('body')
<div class="container main">
  <div class="row">

    <div class="col-md-3">
    </div>

    <div class="col-md-6">
      <div class="konten">
        <form action="{{ URL('doRegister') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <h2>Data akun</h2>
          <hr>
          <div class="form-group @if ($errors->has('username')) has-error @endif">
            <label class="col-sm-2 control-label">Username: </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="username" value="{{ Input::old('username') }}" autocomplete="off">
              @if ($errors->has('username')) <p class="help-block">{{ $errors->first('username') }}</p> @endif
            </div>
          </div>
          &nbsp;
          <div class="form-group @if ($errors->has('password')) has-error @endif">
            <label class="col-sm-2 control-label">Password:</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password" autocomplete="off">
              @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
            </div>
          </div>
          &nbsp;
          <div class="form-group @if ($errors->has('password2')) has-error @endif">
            <label class="col-sm-2 control-label">Ulangi password:</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password2">
              @if ($errors->has('password2')) <p class="help-block">{{ $errors->first('password2') }}</p> @endif
            </div>
          </div>
          &nbsp;
          <div class="form-group @if ($errors->has('email')) has-error @endif">
            <label class="col-sm-2 control-label">Email: </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="email" value="{{ Input::old('email') }}">
              @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
            </div>
          </div>
          <br>
          <br>
          <h2>Data diri</h2>
          <hr>
          <div class="form-group @if ($errors->has('nama')) has-error @endif">
            <label class="col-sm-2 control-label">Nama: </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama" value="{{ Input::old('nama') }}">
              @if ($errors->has('nama')) <p class="help-block">{{ $errors->first('nama') }}</p> @endif
            </div>
          </div>
          &nbsp;
          <div class="form-group @if ($errors->has('ttl_t')) has-error @endif">
            <label class="col-sm-2 control-label">Tempat lahir: </label>
            <div class="col-sm-10">
              <textarea class="form-control" name="ttl_t"></textarea>
              @if ($errors->has('ttl_t')) <p class="help-block">{{ $errors->first('ttl_t') }}</p> @endif
            </div>
          </div>
          &nbsp;
          <div class="form-group @if ($errors->has('ttl_tl')) has-error @endif">
            <label class="col-sm-2 control-label">Tanggal lahir: </label>
            <div class="col-sm-10">
              <input class="form-control" name="ttl_tl" data-mask="99/99/9999" type="text" placeholder="ex: 31/12/1995">
              @if ($errors->has('ttl_tl')) <p class="help-block">{{ $errors->first('ttl_tl') }}</p> @endif
            </div>
          </div>
          &nbsp;
          <div class="form-group @if ($errors->has('hp1')) has-error @endif">
            <label class="col-sm-4 control-label">Nomor telepon 1: </label>
            <div class="col-sm-8">
              <input type="number" class="form-control" name="hp1" value="{{ Input::old('hp1') }}">
              @if ($errors->has('hp1')) <p class="help-block">{{ $errors->first('hp1') }}</p> @endif
            </div>
          </div>
          &nbsp;
          <div class="form-group @if ($errors->has('hp2')) has-error @endif">
            <label class="col-sm-4 control-label">Nomor telepon 2: </label>
            <div class="col-sm-8">
              <input type="number" class="form-control" name="hp2" value="{{ Input::old('hp2') }}">
              @if ($errors->has('hp2')) <p class="help-block">{{ $errors->first('hp2') }}</p> @endif
            </div>
          </div>
          &nbsp;
          <div class="form-group @if ($errors->has('telp_rumah')) has-error @endif">
            <label class="col-sm-4 control-label">Telepon Rumah: </label>
            <div class="col-sm-8">
              <input type="number" class="form-control" name="telp_rumah" value="{{ Input::old('telp_rumah') }}">
              @if ($errors->has('telp_rumah')) <p class="help-block">{{ $errors->first('telp_rumah') }}</p> @endif
            </div>
          </div>
          &nbsp;
          <div class="form-group">
            <label class="col-sm-3 control-label">Jenis kelamin: </label>
            <div class="col-sm-9">
              <label class="radio-inline radio-success">
              <input type="radio" name="jk" class="styled" checked="checked" value="l">
              Laki - laki</label>
              <label class="radio-inline radio-success">
                <input type="radio" name="jk" class="styled" value="p">
                Perempuan
              </label>
            </div>
          </div>
          &nbsp;
            <div class="form-group @if ($errors->has('alamat')) has-error @endif">
              <label class="col-sm-3 control-label">Alamat: </label>
              <div class="col-sm-9">
                <textarea class="form-control" name="alamat"></textarea>
                @if ($errors->has('alamat')) <p class="help-block">{{ $errors->first('alamat') }}</p> @endif
              </div>
            </div>
            &nbsp;
            <div class="form-group @if ($errors->has('s_provinsi')) has-error @endif">
              <label class="col-md-3 control-label">Provinsi </label>
              <div class="col-md-9">
                <select name="s_provinsi" class="form-control" onchange="onProvinsiChange(this.value)" id="s_provinsi">
                  <option value="">- Pilih provinsi -</option>
                  @foreach($provinsis as $value)
                  <option value="{{ $value->id }}">{{ $value->nama_provinsi }}</option>
                  @endforeach
                </select>
                @if ($errors->has('s_provinsi')) <p class="help-block">{{ $errors->first('s_provinsi') }}</p> @endif
              </div>
            </div>
            &nbsp;
            <div class="form-group @if ($errors->has('s_kotakab')) has-error @endif">
              <label class="col-md-3 control-label">Kota / Kabupaten </label>
              <div class="col-md-9">
                <select name="s_kotakab" class="form-control" onchange="onKotakabChange(this.value)" id="s_kotakab">
                  <option value="">- Pilih provinsi terlebih dahulu -</option>
                </select>
                @if ($errors->has('s_kotakab')) <p class="help-block">{{ $errors->first('s_kotakab') }}</p> @endif
              </div>
            </div>
            &nbsp;
            <div class="form-group @if ($errors->has('s_kecamatan')) has-error @endif">
              <label class="col-md-3 control-label">Kecamatan</label>
              <div class="col-md-9">
                <select name="s_kecamatan" class="form-control" onchange="onKecamatanChange(this.value)" id="s_kecamatan">
                  <option value="">- Pilih kota / kabupaten terlebih dahulu -</option>
                </select>
                @if ($errors->has('s_kecamatan')) <p class="help-block">{{ $errors->first('s_kecamatan') }}</p> @endif
              </div>
            </div>
            &nbsp;
            <div class="form-group @if ($errors->has('s_kelurahan')) has-error @endif">
              <label class="col-md-3 control-label">Kelurahan</label>
              <div class="col-md-9">
                <select name="s_kelurahan" class="form-control" id="s_kelurahan">
                  <option value="">- Pilih kecamatan terlebih dahulu -</option>
                </select>
                @if ($errors->has('s_kelurahan')) <p class="help-block">{{ $errors->first('s_kelurahan') }}</p> @endif
              </div>
            </div>
            <br>
            <hr>
            <br>
            <div class="form-group text-center">
              <div class="row">
                <div class="col-md-6 col-md-offset-3">
                <button class="btn btn-primary btn-block" type="submit" value="Import" id="form-overview"><i class="icon-user-plus2"></i> Daftar</button>
              </div>
              </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @stop

  @section('footerExtraScript')

  @stop