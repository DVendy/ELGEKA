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
  <div class="col-md-8">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h6 class="panel-title"><i class="icon-paragraph-justify"></i> Daftar rumah sakit berdasarkan pasien</h6>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-bordered" id="example">
          <thead>
            <tr>
              <th>#</th>
              <th>Pasien</th>
              <th>Rumah Sakit</th>
              <th>Detail Pasien</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th></th>
              <th>Pasien</th>
              <th>Rumah Sakit</th>
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
              <td>{{ $key->nama_pasien }}</td>
              <td>{{ $key->nama_rs }}</td>
              <td> 
                <div class="pull-right">
                  <a href="{{ URL('pasien/detail/'.$key->id) }}" title="Detail"><i class="icon-zoom-in text-success"></i></a>  
                </div>
              </td>
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