<?php namespace App\Http\Controllers;

use App\Provinsi;

use Hash;
use Validator;
use Input;

class ProvinsiController extends Controller {

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
		return view('admin.provinsi');
	}

	public function main()
	{
		$provinsis = Provinsi::paginate(25);
		$provinsis->setPath('');
		return view('admin.provinsi')->with('provinsis', $provinsis);
	}

	public function create()
	{
		$validate = Validator::make(Input::all(), array(
			'nama_provinsi' 	=> 'required||unique:provinsi',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'nama_provinsi' 	=> 'required||unique:provinsi',
				'create' => 'required',
				));
			return redirect('provinsi')->withErrors($validate)->withInput();
		}
		else{		
	    //
			$provinsi = new Provinsi();
			$provinsi->nama_provinsi = Input::get('nama_provinsi');
			$provinsi->save();
			return redirect('provinsi');
		}
	}

	public function getAjax($id){
		$provinsi = Provinsi::find($id);
		//dd($user);
		return $provinsi;
	}

	public function getChild($id){
		$provinsi = Provinsi::find($id);
		//dd($user);
		return $provinsi->kotakabs;
	}

	public function update()
	{
		$validate = Validator::make(Input::all(), array(
			'edit_nama_provinsi' 	=> 'required||min:3',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'edit_nama_provinsi' 	=> 'required||min:3',
				'update' => 'required',
				));
			return redirect('provinsi')->withErrors($validate)->withInput();
		}
		else{	
			$provinsi = Provinsi::find(Input::get('edit_id'));
			$provinsi->nama_provinsi = Input::get('edit_nama_provinsi');

			$provinsi->save();
			return redirect('provinsi');
		}
	}

	public function delete($id){
		$provinsi = Provinsi::find($id);
		$provinsi->delete();
		return redirect('provinsi');
	}

}
