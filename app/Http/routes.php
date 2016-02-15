<?php

use Akeneo\Component\SpreadsheetParser\SpreadsheetParser;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//GUEST
Route::get('/asdf', function(){
    Mail::send('emails.password',['key' => 'value'], function($message)
    {
        $message->to('d.vendy@yahoo.co.id', 'DVendy')->subject('Noob!');
    });
    return ('sent maybe...');
});
Route::get('/', 'WelcomeController@index');
Route::get('berita', 'WelcomeController@news');
Route::get('berita/{id}-{judul}', 'WelcomeController@berita');
Route::get('login', 'WelcomeController@login');
Route::get('register', 'WelcomeController@register');
Route::post('doLogin', 'WelcomeController@doLogin');
Route::post('doRegister', 'WelcomeController@doRegister');
Route::get('logout', 'WelcomeController@logout');

Route::get('artikel', 'WelcomeController@artikel');
Route::get('createArtikel', 'WelcomeController@createArtikel');
Route::get('editArtikel/{id}', 'WelcomeController@editArtikel');
Route::get('deleteArtikel/{id}', 'WelcomeController@deleteArtikel');
Route::post('doCreateArtikel', 'WelcomeController@doCreateArtikel');
Route::post('doEditArtikel/{id}', 'WelcomeController@doEditArtikel');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	]);

Route::get('home', 'HomeController@index');

Route::get('admin-login', 'AdminController@login');
Route::post('admin-DoLogin', 'AdminController@doLogin');

Route::group(['middleware' => ['admin']], function()
{
	Route::get('admin-logout', 'AdminController@doLogout');

	Route::get('dashboard', 'ChartController@dashboard');

//LAPORAN
	Route::get('laporan', 'LaporanController@index');
	Route::get('laporan/{id}', 'LaporanController@laporan');

//KONFIRMASI
	Route::get('mutasi', 'MutasiController@index');
	Route::get('mutasi/penyakit/{id}', 'MutasiController@setPenyakit');
	Route::get('mutasi/rs/{id}', 'MutasiController@setRs');
	Route::get('mutasi/dokter/{id}', 'MutasiController@setDokter');
	Route::get('mutasi/asuransi/{id}', 'MutasiController@setAsuransi');
	Route::get('mutasi/obat/{id}', 'MutasiController@setObat');

	Route::post('pasien/setPenyakit', 'MutasiController@mutasiPenyakit');
	Route::post('pasien/setRs', 'MutasiController@mutasiRs');
	Route::post('pasien/setDokter', 'MutasiController@mutasiDokter');
	Route::post('pasien/setAsuransi', 'MutasiController@mutasiAsuransi');
	Route::post('pasien/setObat', 'MutasiController@mutasiObat');
	Route::post('pasien/hapusObat', 'MutasiController@hapusObat');
	Route::post('pasien/hapusPenyakit', 'MutasiController@hapusPenyakit');

	Route::get('mutasi/rejectPenyakit/{id}', 'MutasiController@rejectPenyakit');
	Route::get('mutasi/rejectRs/{id}', 'MutasiController@rejectRs');
	Route::get('mutasi/rejectDokter/{id}', 'MutasiController@rejectDokter');
	Route::get('mutasi/rejectAsuransi/{id}', 'MutasiController@rejectAsuransi');
	Route::get('mutasi/rejectObat/{id}', 'MutasiController@rejectObat');

//ARTIKEL
	Route::get('artikel-admin', 'ArtikelController@main');
	Route::get('artikel-admin-create', 'ArtikelController@create');
	Route::get('artikel-admin-edit/{id}', 'ArtikelController@edit');
	Route::get('artikel-admin-delete/{id}', 'ArtikelController@delete');
	Route::post('artikel-admin-doCreate', 'ArtikelController@doCreate');
	Route::post('artikel-admin-doEdit', 'ArtikelController@doEdit');

//ADMIN
	Route::get('admin', 'AdminController@main');
	Route::post('admin/create', 'AdminController@create');
	Route::post('admin/update', 'AdminController@update');
	Route::get('admin/delete-{id}', 'AdminController@delete');
	Route::get('admin/getAjax/{id}', 'AdminController@getAjax');

//PASIEN
	Route::get('pasien', 'PasienController@main');
	Route::post('pasien/create', 'PasienController@create');
	Route::post('pasien/update', 'PasienController@update');
	Route::get('pasien/delete-{id}', 'PasienController@delete');
	Route::get('pasien/getAjax/{id}', 'PasienController@getAjax');
	Route::get('pasien/detail/{id}', 'PasienController@detail');
	Route::post('pasien/search', 'PasienController@search');

//OBAT
	Route::get('obat', 'ObatController@main');
	Route::post('obat/create', 'ObatController@create');
	Route::post('obat/update', 'ObatController@update');
	Route::get('obat/delete-{id}', 'ObatController@delete');
	Route::get('obat/getAjax/{id}', 'ObatController@getAjax');

//asuransi
	Route::get('asuransi', 'AsuransiController@main');
	Route::post('asuransi/create', 'AsuransiController@create');
	Route::post('asuransi/update', 'AsuransiController@update');
	Route::get('asuransi/delete-{id}', 'AsuransiController@delete');
	Route::get('asuransi/getAjax/{id}', 'AsuransiController@getAjax');

//DOKTER
	Route::get('dokter', 'DokterController@main');
	Route::post('dokter/create', 'DokterController@create');
	Route::post('dokter/update', 'DokterController@update');
	Route::get('dokter/delete-{id}', 'DokterController@delete');
	Route::get('dokter/getAjax/{id}', 'DokterController@getAjax');

//INDIKASI
	Route::get('indikasi', 'IndikasiController@main');
	Route::post('indikasi/create', 'IndikasiController@create');
	Route::post('indikasi/update', 'IndikasiController@update');
	Route::get('indikasi/delete-{id}', 'IndikasiController@delete');
	Route::get('indikasi/getAjax/{id}', 'IndikasiController@getAjax');

//RUMAH_SAKIT
	Route::get('rs', 'RsController@main');
	Route::post('rs/create', 'RsController@create');
	Route::post('rs/update', 'RsController@update');
	Route::get('rs/delete-{id}', 'RsController@delete');
	Route::get('rs/getAjax/{id}', 'RsController@getAjax');

//PROVINSI
	Route::get('provinsi', 'ProvinsiController@main');
	Route::post('provinsi/create', 'ProvinsiController@create');
	Route::post('provinsi/update', 'ProvinsiController@update');
	Route::get('provinsi/delete-{id}', 'ProvinsiController@delete');
	Route::get('provinsi/getAjax/{id}', 'ProvinsiController@getAjax');
	Route::get('provinsi/getChild/{id}', 'ProvinsiController@getChild');

//KOTAKAB
	Route::get('kotakab', 'KotakabController@main');
	Route::post('kotakab/create', 'KotakabController@create');
	Route::post('kotakab/update', 'KotakabController@update');
	Route::get('kotakab/delete-{id}', 'KotakabController@delete');
	Route::get('kotakab/getAjax/{id}', 'KotakabController@getAjax');
	Route::get('kotakab/getChild/{id}', 'KotakabController@getChild');

//KECAMATAN
	Route::get('kecamatan', 'KecamatanController@main');
	Route::post('kecamatan/create', 'KecamatanController@create');
	Route::post('kecamatan/update', 'KecamatanController@update');
	Route::get('kecamatan/delete-{id}', 'KecamatanController@delete');
	Route::get('kecamatan/getAjax/{id}', 'KecamatanController@getAjax');
	Route::get('kecamatan/getChild/{id}', 'KecamatanController@getChild');

//KELURAHAN
	Route::get('kelurahan', 'KelurahanController@main');
	Route::post('kelurahan/create', 'KelurahanController@create');
	Route::post('kelurahan/update', 'KelurahanController@update');
	Route::get('kelurahan/delete-{id}', 'KelurahanController@delete');
	Route::get('kelurahan/getAjax/{id}', 'KelurahanController@getAjax');
	Route::get('kelurahan/getChild/{id}', 'KelurahanController@getChild');

//PENYAKIT
	Route::get('penyakit', 'PenyakitController@main');
	Route::post('penyakit/create', 'PenyakitController@create');
	Route::post('penyakit/update', 'PenyakitController@update');
	Route::get('penyakit/delete-{id}', 'PenyakitController@delete');
	Route::get('penyakit/getAjax/{id}', 'PenyakitController@getAjax');
	Route::get('penyakit/getChild/{id}', 'PenyakitController@getChild');

});

Route:: get('tes', function(){
	$user = App\User::find(7);
	//dd($user);
	Session::put('login', $user);
	Session::forget('login');
});

Route:: get('tes2', function(){
	dd(Session::get('login')->id);
});

Route:: get('serverDt', function(){
	$data = array(
		array('Name'=>'parvez', 'Empid'=>11, 'Salary'=>101),
		array('Name'=>'alam', 'Empid'=>1, 'Salary'=>102),
		array('Name'=>'phpflow', 'Empid'=>21, 'Salary'=>103)                            );
	for ($i=0; $i < 50000; $i++) { 
		$data[] = array('Name'=>'parvez', 'Empid'=>$i, 'Salary'=>101);
	}


	$results = array(
		"sEcho" => 1,
		"iTotalRecords" => count($data),
		"iTotalDisplayRecords" => 10,
		"aaData"=>$data);
/*while($row = $result->fetch_array(MYSQLI_ASSOC)){
  $results["data"][] = $row ;
}*/

return json_encode($results);
});

Route::post('excel', function(){
	Input::file('file')->move(storage_path('/'), "noob.".Input::file('file')->getClientOriginalExtension());
	$workbook = SpreadsheetParser::open(storage_path('/')."noob.".Input::file('file')->getClientOriginalExtension());
	$myWorksheetIndex = $workbook->getWorksheetIndex('Sheet1');

	$col = 5;
	foreach ($workbook->createRowIterator($myWorksheetIndex) as $rowIndex => $values) {
		if($rowIndex > 1 && isset($values[$col])){
			if(strlen($values[$col]) > 1){
				$data = App\User::where('nama_pasien', $values[$col])->first();
				if ($data == null){
					$data = new App\User();
					$data->nama_pasien = $values[$col];
					$data->username = "elgeka_".substr(str_replace(' ', '', strtolower($values[$col])), 0, 8).$rowIndex;
					$data->password = Hash::make("elgeka");
					
					if (isset($values[3]) && (strlen($values[3]) > 1)){
						$asdf = App\Provinsi::where('nama_provinsi', $values[3])->first();
						$data->provinsi_id = $asdf->id;
					}

					if (isset($values[4]) && (strlen($values[4]) > 1)){
						$asdf = App\Kotakab::where('nama_kotakab', $values[4])->first();
						$data->kotakab_id = $asdf->id;
					}

					if (isset($values[6]))
						$data->alamat = $values[6];
					if (isset($values[7]))
						$data->telp_rumah = $values[7];
					if (isset($values[8]))
						$data->hp1 = $values[8];
					if (isset($values[9]))
						$data->hp2 = $values[9];
					if (isset($values[10]))
						$data->tgl_masuk = $values[10];
					if (isset($values[13]))
						$data->code = $values[13];

					$data->save();

					if (isset($values[14])){
						$asdf = App\Penyakit::where('nama_penyakit', $values[14])->first();
						if($asdf != null)
						$data->penyakits()->attach($asdf->id);
					}

					if (isset($values[15]) && isset($values[16])){
						$asdf = App\Obat::where('nama_obat', $values[15])->first();
						if($asdf != null)
						$data->obats()->attach($asdf->id, ['dosis' => $values[16]]);
					}

					if (isset($values[17])){
						$asdf = App\Rs::where('nama_rs', $values[17])->first();
						if($asdf != null)
						$data->rs_id = $asdf->id;
					}

					if (isset($values[18])){
						$asdf = App\Dokter::where('nama_dokter', $values[18])->first();
						if($asdf != null)
						$data->dokter_id = $asdf->id;
					}

					if (isset($values[19])){
						$asdf = App\Asuransi::where('nama_asuransi', $values[19])->first();
						if($asdf != null)
						$data->asuransi_id = $asdf->id;
					}

					if (isset($values[22]))
						$data->status = $values[22];

					$data->save();
				}
			}
		}
	}
});