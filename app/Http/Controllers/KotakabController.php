<?php namespace App\Http\Controllers;

use App\Kotakab;
use App\Provinsi;

use Hash;
use Validator;
use Input;

class KotakabController extends Controller {

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
		return view('admin.kotakab');
	}

	public function main()
	{
		$kotakabs = Kotakab::paginate(25);
		$kotakabs->setPath('');

		$provinsis = Provinsi::all();
		return view('admin.kotakab')->with('kotakabs', $kotakabs)->with('provinsis', $provinsis);
	}

	public function create()
	{
		$validate = Validator::make(Input::all(), array(
			'nama_kotakab' 	=> 'required||unique:kotakab',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'nama_kotakab' 	=> 'required||unique:kotakab',
				'create' => 'required',
				));
			return redirect('kotakab')->withErrors($validate)->withInput();
		}
		else{		
	    //
			$kotakab = new Kotakab();
			$kotakab->nama_kotakab = Input::get('nama_kotakab');
			$kotakab->save();
			return redirect('kotakab');
		}
	}

	public function getAjax($id){
		$kotakab = Kotakab::find($id);
		//dd($user);
		return $kotakab;
	}

	public function update()
	{
		$validate = Validator::make(Input::all(), array(
			'edit_nama_kotakab' 	=> 'required||min:3',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'edit_nama_kotakab' 	=> 'required||min:3',
				'update' => 'required',
				));
			return redirect('kotakab')->withErrors($validate)->withInput();
		}
		else{	
			$kotakab = Kotakab::find(Input::get('edit_id'));
			$kotakab->nama_kotakab = Input::get('edit_nama_kotakab');

			$kotakab->save();
			return redirect('kotakab');
		}
	}

	public function delete($id){
		$kotakab = Kotakab::find($id);
		$kotakab->delete();
		return redirect('kotakab');
	}

}
