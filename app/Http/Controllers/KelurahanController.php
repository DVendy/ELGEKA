<?php namespace App\Http\Controllers;

use App\Kelurahan;
use App\Provinsi;

use Hash;
use Validator;
use Input;

class KelurahanController extends Controller {

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
		return view('admin.kelurahan');
	}

	public function main()
	{
		$kelurahans = Kelurahan::paginate(25);
		$kelurahans->setPath('');

		$provinsis = Provinsi::all();

		return view('admin.kelurahan')->with('kelurahans', $kelurahans)->with('provinsis', $provinsis);
	}

	public function create()
	{
		$validate = Validator::make(Input::all(), array(
			'nama_kelurahan' 	=> 'required||unique:kelurahan',
			's_kecamatan' 	=> 'required',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'nama_kelurahan' 	=> 'required||unique:kelurahan',
			's_kecamatan' 	=> 'required',
				'create' => 'required',
				));
			return redirect('kelurahan')->withErrors($validate)->withInput();
		}
		else{		
	    //
			$kelurahan = new Kelurahan();
			$kelurahan->nama_kelurahan = Input::get('nama_kelurahan');
			$kelurahan->kecamatan_id = Input::get('s_kecamatan');
			$kelurahan->save();
			return redirect('kelurahan');
		}
	}

	public function getAjax($id){
		$kelurahan = Kelurahan::find($id);
		//dd($user);
		return $kelurahan;
	}

	public function getChild($id){
		$kelurahan = Kelurahan::find($id);
		//dd($user);
		return $kelurahan->rss;
	}

	public function update()
	{
		$validate = Validator::make(Input::all(), array(
			'edit_nama_kelurahan' 	=> 'required||min:3',
			'edit_s_kecamatan' 	=> 'required',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'edit_nama_kelurahan' 	=> 'required||min:3',
				'edit_s_kecamatan' 	=> 'required',
				'update' => 'required',
				));
			return redirect('kelurahan')->withErrors($validate)->withInput();
		}
		else{	
			$kelurahan = Kelurahan::find(Input::get('edit_id'));
			$kelurahan->nama_kelurahan = Input::get('edit_nama_kelurahan');
			$kelurahan->kecamatan_id = Input::get('edit_s_kecamatan');

			$kelurahan->save();
			return redirect('kelurahan');
		}
	}

	public function delete($id){
		$kelurahan = Kelurahan::find($id);
		$kelurahan->delete();
		return redirect('kelurahan');
	}

}
