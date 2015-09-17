<?php namespace App\Http\Controllers;

use App\Indikasi;

use Hash;
use Validator;
use Input;

class IndikasiController extends Controller {

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
		return view('admin.indikasi');
	}

	public function main()
	{
		$indikasis = Indikasi::paginate(25);
		$indikasis->setPath('');
		return view('admin.indikasi')->with('indikasis', $indikasis);
	}

	public function create()
	{
		$validate = Validator::make(Input::all(), array(
			'nama_indikasi' 	=> 'required||unique:indikasi',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'nama_indikasi' 	=> 'required||unique:indikasi',
				'create' => 'required',
				));
			return redirect('indikasi')->withErrors($validate)->withInput();
		}
		else{		
	    //
			$indikasi = new Indikasi();
			$indikasi->nama_indikasi = Input::get('nama_indikasi');
			$indikasi->save();
			return redirect('indikasi');
		}
	}

	public function getAjax($id){
		$indikasi = Indikasi::find($id);
		//dd($user);
		return $indikasi;
	}

	public function update()
	{
		$validate = Validator::make(Input::all(), array(
			'edit_nama_indikasi' 	=> 'required||min:3',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'edit_nama_indikasi' 	=> 'required||min:3',
				'update' => 'required',
				));
			return redirect('indikasi')->withErrors($validate)->withInput();
		}
		else{	
			$indikasi = Indikasi::find(Input::get('edit_id'));
			$indikasi->nama_indikasi = Input::get('edit_nama_indikasi');

			$indikasi->save();
			return redirect('indikasi');
		}
	}

	public function delete($id){
		$indikasi = Indikasi::find($id);
		$indikasi->delete();
		return redirect('indikasi');
	}

}
