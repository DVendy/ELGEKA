<?php namespace App\Http\Controllers;

use App\Kecamatan;

use Hash;
use Validator;
use Input;

class KecamatanController extends Controller {

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
		return view('admin.kecamatan');
	}

	public function main()
	{
		$kecamatans = Kecamatan::paginate(25);
		$kecamatans->setPath('');
		return view('admin.kecamatan')->with('kecamatans', $kecamatans);
	}

	public function create()
	{
		$validate = Validator::make(Input::all(), array(
			'nama_kecamatan' 	=> 'required||unique:kecamatan',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'nama_kecamatan' 	=> 'required||unique:kecamatan',
				'create' => 'required',
				));
			return redirect('kecamatan')->withErrors($validate)->withInput();
		}
		else{		
	    //
			$kecamatan = new Kecamatan();
			$kecamatan->nama_kecamatan = Input::get('nama_kecamatan');
			$kecamatan->save();
			return redirect('kecamatan');
		}
	}

	public function getAjax($id){
		$kecamatan = Kecamatan::find($id);
		//dd($user);
		return $kecamatan;
	}

	public function update()
	{
		$validate = Validator::make(Input::all(), array(
			'edit_nama_kecamatan' 	=> 'required||min:3',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'edit_nama_kecamatan' 	=> 'required||min:3',
				'update' => 'required',
				));
			return redirect('kecamatan')->withErrors($validate)->withInput();
		}
		else{	
			$kecamatan = Kecamatan::find(Input::get('edit_id'));
			$kecamatan->nama_kecamatan = Input::get('edit_nama_kecamatan');

			$kecamatan->save();
			return redirect('kecamatan');
		}
	}

	public function delete($id){
		$kecamatan = Kecamatan::find($id);
		$kecamatan->delete();
		return redirect('kecamatan');
	}

}
