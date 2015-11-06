@extends('base')

@section('extraStyle')
<title>ELGEKA - Laporan</title>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
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
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h6 class="panel-title"><i class="icon-paragraph-justify"></i> Jumlah pasien berdasarkan penyakit per propinsi-perkota</h6>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-bordered" id="example">
          <thead>
            <tr>
              <th>#</th>
              <th>Provinsi</th>
              <th>Kota</th>
              <th>Penyakit</th>
              <th>Jumlah Pasien</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th></th>
              <th>Provinsi</th>
              <th>Kota</th>
              <th>Penyakit</th>
              <th></th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').dataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "{{ URL('serverDt') }}"
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