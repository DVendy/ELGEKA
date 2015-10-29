<?php namespace App\Http\Controllers;

use App\User;
use App\Penyakit;
use App\Rs;
use App\Asuransi;
use App\Obat;
use App\Dokter;

use Hash;
use Validator;
use Input;
use DateTime;

class PasienController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function dashboard()
	{
		return view('admin.pasien');
	}

	public function main()
	{
		$users = User::where('role', '=', 'pasien')->paginate(25);
		$users->setPath('');
		return view('admin.pasien')->with('users', $users);
	}

	public function detail($id)
	{
		$pasien = User::find($id);
		$penyakits = Penyakit::all();
		$rss = Rs::all();
		$dokters = Dokter::all();
		$obats = Obat::all();
		$asuransis = Asuransi::all();

		//dd($pasien->rs);

		return view('admin.pasien-detail')->with('pasien', $pasien)->with('penyakits', $penyakits)->with('rss', $rss)->with('obats', $obats)->with('dokters', $dokters)->with('asuransis', $asuransis);
	}

	public function create()
	{
		$validate = Validator::make(Input::all(), array(
			'username' 	=> 'required||unique:users',
			'nama' 	=> 'required||min:3',
			'password' 		=> 'required||min:5',
			'password2' => 'same:password',
			'email'	=> 'required||min:3',
			'jk'	=> 'required',
			'alamat'	=> 'required',
			'ttl_tl'	=> 'required',
			'ttl_t'	=> 'required',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'username' 	=> 'required||unique:users',
				'nama' 	=> 'required||min:3',
				'password' 		=> 'required||min:5',
				'password2' => 'same:password',
				'email'	=> 'required||min:3',
				'jk'	=> 'required',
				'alamat'	=> 'required',
				'ttl_tl'	=> 'required',
				'ttl_t'	=> 'required',
				'create' => 'required',
				));
			return redirect('pasien')->withErrors($validate)->withInput();
		}
		else{		
	    //
			$user = new User();
			$user->username = Input::get('username');
			$user->nama_pasien = Input::get('nama');
			$user->password = Hash::make(Input::get('password'));
			$user->email = Input::get('email');
			$user->jk = Input::get('jk');
			$user->ttl_tl = DateTime::createFromFormat('d/m/Y', Input::get('ttl_tl'));
			$user->ttl_t = Input::get('ttl_t');
			$user->alamat = Input::get('alamat');

			if (Input::has('hp1'))
				$user->hp1 = Input::get('hp1');
			else				
				$user->hp1 = '';

			if (Input::has('hp2'))
				$user->hp2 = Input::get('hp2');
			else				
				$user->hp2 = '';

			if (Input::has('telp_rumah'))
				$user->telp_rumah = Input::get('telp_rumah');
			else				
				$user->telp_rumah = '';

			if (Input::has('status'))
				$user->status = Input::get('status');
			else				
				$user->status = '';


			$user->role = 'pasien';
			$user->save();
			return redirect('pasien');
		}
	}

	public function getAjax($id){
		$user = User::find($id);
		//dd($user);
		$user->ttl_tl = date_format(DateTime::createFromFormat('Y-m-d H:i:s', $user->ttl_tl),"d/m/Y");
		return $user;
	}

	public function update()
	{
		$validate = Validator::make(Input::all(), array(
			'edit_name' 	=> 'required||min:3',
			'edit_email'	=> 'required||min:3',
			'edit_jk'	=> 'required',
			'edit_ttl_t'	=> 'required',
			'edit_alamat'	=> 'required',
			'edit_ttl_tl'	=> 'required',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'edit_name' 	=> 'required||min:3',
				'edit_email'	=> 'required||min:3',
				'edit_jk'	=> 'required',
				'edit_ttl_t'	=> 'required',
				'edit_alamat'	=> 'required',
				'edit_ttl_tl'	=> 'required',
				'update' => 'required',
				));
			return redirect('pasien')->withErrors($validate)->withInput();
		}
		else{	
			$user = User::find(Input::get('edit_id'));
			$user->nama_pasien = Input::get('edit_name');
			if (strlen(Input::get('edit_password') > 0))
				$user->password = Hash::make(Input::get('edit_password'));
			$user->email = Input::get('edit_email');
			$user->jk = Input::get('edit_jk');

			$user->ttl_t = Input::get('edit_ttl_t');

			$user->ttl_tl = DateTime::createFromFormat('d/m/Y', Input::get('edit_ttl_tl'));

			$user->alamat = Input::get('edit_alamat');

			if (Input::has('edit_hp1'))
				$user->hp1 = Input::get('edit_hp1');
			else				
				$user->hp1 = '';

			if (Input::has('edit_hp2'))
				$user->hp2 = Input::get('edit_hp2');
			else				
				$user->hp2 = '';

			if (Input::has('edit_telp_rumah'))
				$user->telp_rumah = Input::get('edit_telp_rumah');
			else				
				$user->telp_rumah = '';

			if (Input::has('edit_status'))
				$user->status = Input::get('edit_status');
			else				
				$user->status = '';


			$user->save();
			return redirect('pasien');
		}
	}

	public function delete($id){
		$user = User::find($id);
		$user->delete();
		return redirect('pasien');
	}

	public function setPenyakit(){
		$validate = Validator::make(Input::all(), array(
			'penyakit' 	=> 'required',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'penyakit' 	=> 'required',
				'update_penyakit' => 'required',
				));
			return redirect('pasien/detail/'.Input::get('edit_id'))->withErrors($validate)->withInput();
		}
		else{
			$pasien = User::find(Input::get('edit_id'));
			$pasien->penyakit_id = Input::get('penyakit');
			$pasien->save();
			return redirect('pasien/detail/'.Input::get('edit_id'))->withErrors($validate)->withInput();
		}
	}

	public function setRs(){
		$validate = Validator::make(Input::all(), array(
			'rs' 	=> 'required',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'rs' 	=> 'required',
				'update_rs' => 'required',
				));
			return redirect('pasien/detail/'.Input::get('edit_id'))->withErrors($validate)->withInput();
		}
		else{
			$pasien = User::find(Input::get('edit_id'));
			$pasien->rumah_sakit_id = Input::get('rs');
			$pasien->save();
			return redirect('pasien/detail/'.Input::get('edit_id'))->withErrors($validate)->withInput();
		}
	}

	public function setDokter(){
		$validate = Validator::make(Input::all(), array(
			'dokter' 	=> 'required',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'dokter' 	=> 'required',
				'update_dokter' => 'required',
				));
			return redirect('pasien/detail/'.Input::get('edit_id'))->withErrors($validate)->withInput();
		}
		else{
			$pasien = User::find(Input::get('edit_id'));
			$pasien->penyakit_id = Input::get('dokter');
			$pasien->save();
			return redirect('pasien/detail/'.Input::get('edit_id'))->withErrors($validate)->withInput();
		}
	}

	public function setObat(){
		$validate = Validator::make(Input::all(), array(
			'obat' 	=> 'required',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'obat' 	=> 'required',
				'update_obat' => 'required',
				));
			return redirect('pasien/detail/'.Input::get('edit_id'))->withErrors($validate)->withInput();
		}
		else{
			$pasien = User::find(Input::get('edit_id'));
			$pasien->penyakit_id = Input::get('obat');
			$pasien->save();
			return redirect('pasien/detail/'.Input::get('edit_id'))->withErrors($validate)->withInput();
		}
	}

	public function setAsuransi(){
		$validate = Validator::make(Input::all(), array(
			'asuransi' 	=> 'required',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'asuransi' 	=> 'required',
				'update_penyakit' => 'required',
				));
			return redirect('pasien/detail/'.Input::get('edit_id'))->withErrors($validate)->withInput();
		}
		else{
			$pasien = User::find(Input::get('edit_id'));
			$pasien->penyakit_id = Input::get('asuransi');
			$pasien->save();
			return redirect('pasien/detail/'.Input::get('edit_id'))->withErrors($validate)->withInput();
		}
	}

}
