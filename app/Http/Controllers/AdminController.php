<?php namespace App\Http\Controllers;

use App\Admin;

use Hash;
use Validator;
use Input;
use DateTime;

class AdminController extends Controller {

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
		return view('admin.dashboard');
	}

	public function login()
	{
		return view('admin.login');
	}

	public function doLogin()
	{
		//dd(Input::all());
		$validate = Validator::make(Input::all(), array(
			'username' 	=> 'required|min:3',
			'password' 	=> 'required|min:3',
			));

		if ($validate -> fails()){
			return redirect('admin-login')->withErrors($validate)->withInput();
		}
		else{
			$admin = Admin::where('username', Input::get('username'))->first();
			if ($admin == null){
				return redirect('admin-login')->with('fail', 1);
			}
			if ($admin->password == md5(Input::get('password'))){
				\Session::put('mimin', $admin);
				return redirect('dashboard');
			}
			return redirect('admin-login')->with('fail', 1);
		}
	}

	public function doLogout()
	{
		\Session::forget('mimin');
		return redirect('admin-login');
	}

	public function main()
	{
		$admin = Admin::all();
		return view('admin.main')->with('admin', $admin);
	}

	public function create()
	{
		$validate = Validator::make(Input::all(), array(
			'username' 	=> 'required||min:3||unique:admin',
			'nama' 	=> 'required||min:3',
			'password' 		=> 'required||min:5',
			'password2' => 'same:password',
			'email'	=> 'required||min:3||unique:admin',
			'alamat'	=> 'required||min:3',
			'telepon'	=> 'required||min:3',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'username' 	=> 'required||min:3||unique:admin',
				'nama' 	=> 'required||min:3',
				'password' 		=> 'required||min:5',
				'password2' => 'same:password',
				'email'	=> 'required||min:3||unique:admin',
				'alamat'	=> 'required||min:3',
				'telepon'	=> 'required||min:3',
				'create' => 'required',
				));
			return redirect('admin')->withErrors($validate)->withInput();
		}
		else{		
	    //
			$user = new Admin();
			$user->username = Input::get('username');
			$user->nama = Input::get('nama');
			$user->password = md5(Input::get('password'));
			$user->email = Input::get('email');
			$user->alamat = Input::get('alamat');
			$user->telepon = Input::get('telepon');

			if (Input::has('a_super')){
				$user->a_super = 1;
				$user->a_laporan = 1;
				$user->a_data = 1;
				$user->a_konfirmasi = 1;
			}
			else{
				$user->a_super = 0;
				$user->a_laporan = 0;
				$user->a_data = 0;
				$user->a_konfirmasi = 0;
			}

			if (Input::has('a_laporan'))
				$user->a_laporan = 1;

			if (Input::has('a_data'))
				$user->a_data = 1;

			if (Input::has('a_konfirmasi'))
				$user->a_konfirmasi = 1;

			$user->save();

			return redirect('admin');
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
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'edit_name' 	=> 'required||min:3',
				'edit_email'	=> 'required||min:3',
				'edit_jk'	=> 'required',
				'update' => 'required',
				));
			return redirect('admin')->withErrors($validate)->withInput();
		}
		else{	
			$user = User::find(Input::get('edit_id'));
			$user->nama_pasien = Input::get('edit_name');
			if (strlen(Input::get('edit_password') > 0))
				$user->password = Hash::make(Input::get('edit_password'));
			$user->email = Input::get('edit_email');
			$user->jk = Input::get('edit_jk');

			if (Input::has('edit_ttl_t'))
				$user->ttl_t = Input::get('edit_ttl_t');
			else				
				$user->ttl_t = '';

			if (Input::has('edit_ttl_tl'))
				$user->ttl_tl = DateTime::createFromFormat('d/m/Y', Input::get('edit_ttl_tl'));
			else				
				$user->ttl_tl = '';

			if (Input::has('edit_alamat'))
				$user->alamat = Input::get('edit_alamat');
			else				
				$user->alamat = '';

			if (Input::has('edit_hp1'))
				$user->hp1 = Input::get('edit_hp1');
			else				
				$user->hp1 = '';

			if (Input::has('edit_hp2'))
				$user->hp2 = Input::get('edit_hp2');
			else				
				$user->hp2 = '';

			$user->save();
			return redirect('admin');
		}
	}

	public function delete($id){
		$user = User::find($id);
		$user->delete();
		return redirect('admin');
	}

}
