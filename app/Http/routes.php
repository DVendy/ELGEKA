<?php

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
Route::get('/', 'WelcomeController@index');
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

//OBAT
Route::get('obat', 'ObatController@main');
Route::post('obat/create', 'ObatController@create');
Route::post('obat/update', 'ObatController@update');
Route::get('obat/delete-{id}', 'ObatController@delete');
Route::get('obat/getAjax/{id}', 'ObatController@getAjax');

//OBAT
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

Route:: get('tes', function(){
	$now = new DateTime();
	dd($now->format('Y-m-d H:i:s'));
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