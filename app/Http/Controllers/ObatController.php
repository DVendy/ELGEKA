<?php namespace App\Http\Controllers;

use App\Obat;

use Hash;
use Validator;
use Input;
use DateTime;

class ObatController extends Controller {

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
		return view('admin.obat');
	}

	public function main()
	{
		$obats = Obat::paginate(25);
		$obats->setPath('');
		return view('admin.obat')->with('obats', $obats);
	}

	public function create()
	{
		$validate = Validator::make(Input::all(), array(
			'nama_obat' 	=> 'required||unique:obat',
			'jumlah' 	=> 'required',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'nama_obat' 	=> 'required||unique:obat',
				'jumlah' 	=> 'required',
				'create' => 'required',
				));
			return redirect('obat')->withErrors($validate)->withInput();
		}
		else{		
	    //
			$obat = new Obat();
			$obat->nama_obat = Input::get('nama_obat');
			$obat->jumlah = Input::get('jumlah');
			$obat->save();
			return redirect('obat');
		}
	}

	public function getAjax($id){
		$user = Obat::find($id);
		return $user;
	}

	public function update()
	{
		$validate = Validator::make(Input::all(), array(
			'edit_nama_obat' 	=> 'required||min:3',
			'edit_jumlah'	=> 'required',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'edit_nama_obat' 	=> 'required||min:3',
				'edit_jumlah'	=> 'required',
				'update' => 'required',
				));
			return redirect('obat')->withErrors($validate)->withInput();
		}
		else{	
			$obat = Obat::find(Input::get('edit_id'));
			$obat->nama_obat = Input::get('edit_nama_obat');
			$obat->jumlah = Input::get('edit_jumlah');


			$obat->save();
			return redirect('obat');
		}
	}

	public function delete($id){
		$user = Obat::find($id);
		$user->delete();
		return redirect('obat');
	}

}
