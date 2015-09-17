<?php namespace App\Http\Controllers;

use App\Dokter;

use Hash;
use Validator;
use Input;

class DokterController extends Controller {

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
		return view('admin.dokter');
	}

	public function main()
	{
		$dokters = Dokter::paginate(25);
		$dokters->setPath('');
		return view('admin.dokter')->with('dokters', $dokters);
	}

	public function create()
	{
		$validate = Validator::make(Input::all(), array(
			'nama_dokter' 	=> 'required||unique:dokter',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'nama_dokter' 	=> 'required||unique:dokter',
				'create' => 'required',
				));
			return redirect('dokter')->withErrors($validate)->withInput();
		}
		else{		
	    //
			$dokter = new Dokter();
			$dokter->nama_dokter = Input::get('nama_dokter');
			$dokter->save();
			return redirect('dokter');
		}
	}

	public function getAjax($id){
		$dokter = Dokter::find($id);
		//dd($user);
		return $dokter;
	}

	public function update()
	{
		$validate = Validator::make(Input::all(), array(
			'edit_nama_dokter' 	=> 'required||min:3',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'edit_nama_dokter' 	=> 'required||min:3',
				'update' => 'required',
				));
			return redirect('dokter')->withErrors($validate)->withInput();
		}
		else{	
			$dokter = Dokter::find(Input::get('edit_id'));
			$dokter->nama_dokter = Input::get('edit_nama_dokter');

			$dokter->save();
			return redirect('dokter');
		}
	}

	public function delete($id){
		$dokter = Dokter::find($id);
		$dokter->delete();
		return redirect('dokter');
	}

}
