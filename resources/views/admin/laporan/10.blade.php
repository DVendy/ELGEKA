@extends('base')

@section('extraStyle')
<title>ELGEKA - Laporan</title>
@stop

@section('headerExtraScript')
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
@stop

@section('pageTitle')
Laporan
@stop

@section('pageSubtitle')
Manage laporan
@stop

@section('body')
<div class="breadcrumb-line">
  <ul class="breadcrumb">
    <li><a href="{{ URL('/') }}">Home</a></li>
    <li class="active">Laporan</li>
  </ul>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h6 class="panel-title"><i class="icon-paragraph-justify"></i> Jumlah pasien berdasarkan kota</h6>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-bordered" id="example">
          <thead>
            <tr>
              <th>#</th>
              <th>Provinsi</th>
              <th>Kota</th>
              <th>Jumlah Pasien</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th></th>
              <th>Program</th>
              <th></th>
            </tr>
          </tfoot>
          <tbody>
            <?php
            $i = 1;
            ?>
            @foreach($rows as $key)
            <tr>
              <td>{{ $i}}</td>
              <td>{{ $key->nama_provinsi }}</td>
              <td>{{ $key->nama_kotakab }}</td>
              <td>{{ $key->jumlah }}</td>
            </tr>

            <?php
            $i++;
            ?>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
$('#example').dataTable( {
        "sPaginationType": "full_numbers"
      } );
    $('#example').dataTable().columnFilter(
    {
      aoColumns: [
      null,
      {
        type: "text",
        bRegex: true,
        bSmart: true
      },
      {
        type: "text",
        bRegex: true,
        bSmart: true
      },
      null
      ]
    }
    );
  });
</script>
@stop

@section('footerExtraScript')

@stop