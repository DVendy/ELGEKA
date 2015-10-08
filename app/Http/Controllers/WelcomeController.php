<?php namespace App\Http\Controllers;

use App\User;
use App\Artikel;

use Hash;
use Validator;
use Input;
use DateTime;
use Auth;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$artikel = Artikel::all();
		return view('front.main')->with('artikel', $artikel);
	}

	public function login()
	{
		return view('front.login');
	}

	public function register()
	{
		return view('front.register');
	}

	public function doRegister()
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
			return redirect('register')->withErrors($validate)->withInput();
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

			if (Input::has('rt'))
				$user->rt = Input::get('rt');
			else				
				$user->rt = '';

			if (Input::has('rw'))
				$user->rw = Input::get('rw');
			else				
				$user->rw = '';

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

			return redirect('login')->with('register', ['some kind of data']);
		}
	}

	public function doLogin()
	{
		$validate = Validator::make(Input::all(), array(
			'username' 	=> 'required',
			'password' 		=> 'required',
			));

		if ($validate -> fails()){
			return redirect('login')->withErrors($validate);
		}else{
			if (Auth::attempt(['username' => Input::get('username'), 'password' => Input::get('password')])){
	            return redirect('/');
	        }else{
	        	return redirect('login')->with('fail', ['some kind of data']);
	        }
    	}
	}

	public function logout()
	{
		Auth::logout();
		return redirect('/')->with('logout', ['some kind of data']);
	}

	public function artikel()
	{
		$artikels = Auth::user()->artikels;
		//dd($artikels);
		return view('front.artikel')->with("artikels" ,$artikels);
	}

	public function deleteArtikel($id)
	{
		$artikels = Artikel::find($id);
		$artikels->delete();
		//dd($artikels);
		return redirect('artikel');
	}

	public function createArtikel()
	{
		return view('front.artikel-create');
	}

	public function editArtikel($id)
	{
		$artikel = Artikel::find($id);
		//dd($artikel);
		return view('front.artikel-edit')->with("artikel", $artikel);
	}

	public function doCreateArtikel()
	{
		if (!Auth::check())
			return redirect('/');

		$validate = Validator::make(Input::all(), array(
			'judul' 	=> 'required||min:5',
			'isi' 		=> 'required||min:5',
			));

		if ($validate -> fails()){
			return redirect('createArtikel')->withErrors($validate);
		}else{
			$artikel = new Artikel();
			$artikel->judul = Input::get('judul');
			$artikel->isi = Input::get('isi');
			$artikel->user_id = Auth::user()->id;
			$artikel->save();

			return redirect('/')->with('create', ['some kind of data']);
    	}
	}

	public function doEditArtikel($id)
	{
		if (!Auth::check())
			return redirect('/');

		$validate = Validator::make(Input::all(), array(
			'judul' 	=> 'required||min:5',
			'isi' 		=> 'required||min:5',
			));

		if ($validate -> fails()){
			return redirect('artikel');
		}else{
			$artikel = Artikel::find($id);
			$artikel->judul = Input::get('judul');
			$artikel->isi = Input::get('isi');
			$artikel->save();

			return redirect('artikel')->with('edit', ['some kind of data']);
    	}
	}

}
