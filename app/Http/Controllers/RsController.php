<?php namespace App\Http\Controllers;

use App\Rs;
use App\Provinsi;

use Hash;
use Validator;
use Input;

class RsController extends Controller {

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
		return view('admin.rs');
	}

	public function main()
	{
		$rss = Rs::paginate(25);
		$rss->setPath('');

		$provinsis = Provinsi::all();

		return view('admin.rs')->with('rss', $rss)->with('provinsis', $provinsis);
	}

	public function create()
	{
		$validate = Validator::make(Input::all(), array(
			'nama_rs' 	=> 'required||unique:rumah_sakit',
			's_kelurahan' 	=> 'required',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'nama_rs' 	=> 'required||unique:rumah_sakit',
				's_kelurahan' 	=> 'required',
				'create' => 'required',
				));
			return redirect('rs')->withErrors($validate)->withInput();
		}
		else{		
	    //
			$rs = new Rs();
			$rs->nama_rs = Input::get('nama_rs');
			$rs->kelurahan_id = Input::get('s_kelurahan');
			$rs->save();
			return redirect('rs');
		}
	}

	public function getAjax($id){
		$rs = Rs::find($id);
		//dd($user);
		return $rs;
	}

	public function update()
	{
		$validate = Validator::make(Input::all(), array(
			'edit_nama_rs' 	=> 'required||min:3',
			'edit_s_kelurahan' 	=> 'required',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'edit_nama_rs' 	=> 'required||min:3',
				'edit_s_kelurahan' 	=> 'required',
				'update' => 'required',
				));
			return redirect('rs')->withErrors($validate)->withInput();
		}
		else{	
			$rs = Rs::find(Input::get('edit_id'));
			$rs->nama_rs = Input::get('edit_nama_rs');
			$rs->kelurahan_id = Input::get('edit_s_kelurahan');

			$rs->save();
			return redirect('rs');
		}
	}

	public function delete($id){
		$rs = Rs::find($id);
		$rs->delete();
		return redirect('rs');
	}

}
