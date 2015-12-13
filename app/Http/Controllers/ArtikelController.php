<?php namespace App\Http\Controllers;

use App\Artikel;

use Hash;
use Validator;
use Input;
use DateTime;

class ArtikelController extends Controller {

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

	public function main()
	{
		$users = Artikel::all();
		return view('admin.artikel')->with('artikels', $users);
	}

	public function create()
	{
		$validate = Validator::make(Input::all(), array(
			'judul' 	=> 'required||min:5',
			'isi' 		=> 'required||min:5',
			));

		if ($validate -> fails()){
			return redirect('artikel-admin-create')->withErrors($validate);
		}else{
			$artikel = new Artikel();
			$artikel->judul = Input::get('judul');
			$artikel->isi = Input::get('isi');
			$artikel->user_id = \Session::get('mimin')->id;
			$artikel->from = 1;
			$artikel->save();

			return redirect('artikel-admin');
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
