<?php namespace App\Http\Controllers;

use App\Penyakit;

use Hash;
use Validator;
use Input;

class PenyakitController extends Controller {

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
		return view('admin.penyakit');
	}

	public function main()
	{
		$penyakits = Penyakit::paginate(25);
		$penyakits->setPath('');
		return view('admin.penyakit')->with('penyakits', $penyakits);
	}

	public function create()
	{
		//dd(Input::all());
		$validate = Validator::make(Input::all(), array(
			'nama_penyakit' 	=> 'required||unique:penyakit',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'nama_penyakit' 	=> 'required||unique:penyakit',
				'create' => 'required',
				));
			return redirect('penyakit')->withErrors($validate)->withInput();
		}
		else{		
	    //
			$penyakit = new Penyakit();
			$penyakit->nama_penyakit = Input::get('nama_penyakit');
			$penyakit->save();
			return redirect('penyakit');
		}
	}

	public function getAjax($id){
		$penyakit = Penyakit::find($id);
		//dd($user);
		return $penyakit;
	}

	public function update()
	{
		$validate = Validator::make(Input::all(), array(
			'edit_nama_penyakit' 	=> 'required||min:3',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'edit_nama_penyakit' 	=> 'required||min:3',
				'update' => 'required',
				));
			return redirect('penyakit')->withErrors($validate)->withInput();
		}
		else{	
			$penyakit = Penyakit::find(Input::get('edit_id'));
			$penyakit->nama_penyakit = Input::get('edit_nama_penyakit');

			$penyakit->save();
			return redirect('penyakit');
		}
	}

	public function delete($id){
		$penyakit = Penyakit::find($id);
		$penyakit->delete();
		return redirect('penyakit');
	}

}
