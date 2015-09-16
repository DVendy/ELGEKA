<?php namespace App\Http\Controllers;

use App\Asuransi;

use Hash;
use Validator;
use Input;
use DateTime;

class AsuransiController extends Controller {

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
		return view('admin.asuransi');
	}

	public function main()
	{
		$asuransis = Asuransi::paginate(25);
		$asuransis->setPath('');
		return view('admin.asuransi')->with('asuransis', $asuransis);
	}

	public function create()
	{
		$validate = Validator::make(Input::all(), array(
			'nama_asuransi' 	=> 'required||unique:asuransi',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'nama_asuransi' 	=> 'required||unique:asuransi',
				'create' => 'required',
				));
			return redirect('asuransi')->withErrors($validate)->withInput();
		}
		else{		
	    //
			$asuransi = new Asuransi();
			$asuransi->nama_asuransi = Input::get('nama_asuransi');
			$asuransi->save();
			return redirect('asuransi');
		}
	}

	public function getAjax($id){
		$asuransi = Asuransi::find($id);
		//dd($user);
		return $asuransi;
	}

	public function update()
	{
		$validate = Validator::make(Input::all(), array(
			'edit_nama_asuransi' 	=> 'required||min:3',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'edit_nama_asuransi' 	=> 'required||min:3',
				'update' => 'required',
				));
			return redirect('asuransi')->withErrors($validate)->withInput();
		}
		else{	
			$asuransi = Asuransi::find(Input::get('edit_id'));
			$asuransi->nama_asuransi = Input::get('edit_nama_asuransi');

			$asuransi->save();
			return redirect('asuransi');
		}
	}

	public function delete($id){
		$asuransi = Asuransi::find($id);
		$asuransi->delete();
		return redirect('asuransi');
	}

}
