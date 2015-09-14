<?php namespace App\Http\Controllers;

use App\User;

use Hash;
use Validator;
use Input;

class PasienController extends Controller {

	public function __construct()
	{
		//$this->middleware('auth');
	}

	public function main()
	{
		$users = User::where('role', '=', 'pasien')->paginate(25);
		$users->setPath('');
		return view('admin.pasien')->with('users', $users);
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
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'username' 	=> 'required||unique:users',
				'nama' 	=> 'required||min:3',
				'password' 		=> 'required||min:5',
				'password2' => 'same:password',
				'email'	=> 'required||min:3',
				'jk'	=> 'required',
				'create' => 'required',
				));
			return redirect('admin')->withErrors($validate)->withInput();
		}
		else{		
	    //
			$user = new User();
			$user->username = Input::get('username');
			$user->nama_pasien = Input::get('nama');
			$user->password = Hash::make(Input::get('password'));
			$user->email = Input::get('email');
			$user->jk = Input::get('jk');

			if (Input::has('ttl'))
				$user->ttl = Input::get('ttl');
			else				
				$user->ttl = '';

			if (Input::has('alamat'))
				$user->alamat = Input::get('alamat');
			else				
				$user->alamat = '';

			if (Input::has('hp1'))
				$user->hp1 = Input::get('hp1');
			else				
				$user->hp1 = '';

			if (Input::has('hp2'))
				$user->hp2 = Input::get('hp2');
			else				
				$user->hp2 = '';


			$user->role = 'admin';
			$user->save();
			return redirect('admin');
		}
	}

	public function getAjax($id){
		$user = User::find($id);
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

			if (Input::has('edit_ttl'))
				$user->ttl = Input::get('edit_ttl');
			else				
				$user->ttl = '';

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
