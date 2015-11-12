<?php namespace App\Http\Controllers;

use App\User;
use App\Penyakit;
use App\Penyakit_history;

use Hash;
use Validator;
use Input;
use DateTime;
use DB;
use Auth;

class MutasiController extends Controller {

	public function index(){
		$sql = "SELECT h.id, u.id AS id_pasien, u.nama_pasien, pp.nama_penyakit AS asal, p.nama_penyakit AS tujuan, h.tgl FROM penyakit_history as h, penyakit as p, users as u,(SELECT u.id, p.nama_penyakit FROM penyakit AS p, users AS u WHERE u.penyakit_id = p.id) AS pp WHERE h.users_id = u.id AND h.penyakit_id = p.id AND h.status = 0 AND u.id = pp.id";
		$penyakit_history = DB::select(DB::raw($sql));

		//dd(count($rows));

		return view('admin.mutasi')->with('penyakit_history', $penyakit_history);
	}

	public function mutasiPenyakit(){
		$validate = Validator::make(Input::all(), array(
			'penyakit' 	=> 'required',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'penyakit' 	=> 'required',
				'update_penyakit' => 'required',
				));
			return redirect('pasien/detail/'.Input::get('edit_id'))->withErrors($validate)->withInput();
		}
		else{
			if (Input::has('history_penyakit')){
				//insert history
				$history = Penyakit_history::where('users_id', Input::get('edit_id'))->where('status', 0)->first();
				if ($history == null)
					$history = new Penyakit_history();

				$history->users_id = Input::get('edit_id');
				$history->penyakit_id = Input::get('penyakit');
				$now = new DateTime();
				$history->tgl = $now->format('Y-m-d H:i:s');
				$history->login = 0;
				$history->status = 0;
				$history->save();
				return redirect('pasien/detail/'.Input::get('edit_id'))->withErrors($validate)->withInput()->with('success', true);
			}else{
				//force
				$pasien = User::find(Input::get('edit_id'));
				$pasien->penyakit_id = Input::get('penyakit');
				$pasien->save();
				return redirect('pasien/detail/'.Input::get('edit_id'))->withErrors($validate)->withInput();
			}
		}
	}

	public function setPenyakit($id){
		$history = Penyakit_history::find($id);
		//dd($history);
		$pasien = User::find($history->users_id);
		$temp = $pasien->penyakit_id;

		$pasien->penyakit_id = $history->penyakit_id;
		$history->penyakit_id = $temp;

		$now = new DateTime();
		$history->tgl = $now->format('Y-m-d H:i:s');
		$history->status = 1;

		if(Auth::check()){
			$history->login = Auth::user()->id;
		}

		$pasien->save();
		$history->save();

		return redirect('mutasi')->with('success', true);
	}

	public function mutasiDokter(){
		$validate = Validator::make(Input::all(), array(
			'dokter' 	=> 'required',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'dokter' 	=> 'required',
				'update_dokter' => 'required',
				));
			return redirect('pasien/detail/'.Input::get('edit_id'))->withErrors($validate)->withInput();
		}
		else{
			if (Input::has('history_penyakit')){
				//insert history
				$history = new Penyakit_history();
				$history->users_id = Input::get('edit_id');
				$history->penyakit_id = Input::get('dokter');
				$now = new DateTime();
				$history->tgl = $now->format('Y-m-d H:i:s');
				$history->login = 0;
				$history->status = 0;
				$history->save();
				return redirect('pasien/detail/'.Input::get('edit_id'))->withErrors($validate)->withInput();
			}else{
				//force
				$pasien = User::find(Input::get('edit_id'));
				$pasien->penyakit_id = Input::get('dokter');
				$pasien->save();
				return redirect('pasien/detail/'.Input::get('edit_id'))->withErrors($validate)->withInput();
			}
		}
	}

	public function setDokter($id){
		
	}

	public function mutasiAsuransi(){
		$validate = Validator::make(Input::all(), array(
			'penyakit' 	=> 'required',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'penyakit' 	=> 'required',
				'update_penyakit' => 'required',
				));
			return redirect('pasien/detail/'.Input::get('edit_id'))->withErrors($validate)->withInput();
		}
		else{
			if (Input::has('history_penyakit')){
				//insert history
				$history = new Penyakit_history();
				$history->users_id = Input::get('edit_id');
				$history->penyakit_id = Input::get('penyakit');
				$now = new DateTime();
				$history->tgl = $now->format('Y-m-d H:i:s');
				$history->login = 0;
				$history->status = 0;
				$history->save();
				return redirect('pasien/detail/'.Input::get('edit_id'))->withErrors($validate)->withInput();
			}else{
				//force
				$pasien = User::find(Input::get('edit_id'));
				$pasien->penyakit_id = Input::get('penyakit');
				$pasien->save();
				return redirect('pasien/detail/'.Input::get('edit_id'))->withErrors($validate)->withInput();
			}
		}
	}

	public function setAsuransi($id){
		
	}

	public function mutasiObat(){
		$validate = Validator::make(Input::all(), array(
			'obat' 	=> 'required',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'obat' 	=> 'required',
				'update_obat' => 'required',
				));
			return redirect('pasien/detail/'.Input::get('edit_id'))->withErrors($validate)->withInput();
		}
		else{
			$pasien = User::find(Input::get('edit_id'));
			$pasien->obats()->attach(Input::get('obat'));

			return redirect('pasien/detail/'.Input::get('edit_id'))->withErrors($validate)->withInput();
		}
	}

	public function hapusObat($id){
		
	}

	public function mutasiRs(){
		$validate = Validator::make(Input::all(), array(
			'penyakit' 	=> 'required',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'penyakit' 	=> 'required',
				'update_penyakit' => 'required',
				));
			return redirect('pasien/detail/'.Input::get('edit_id'))->withErrors($validate)->withInput();
		}
		else{
			if (Input::has('history_penyakit')){
				//insert history
				$history = new Penyakit_history();
				$history->users_id = Input::get('edit_id');
				$history->penyakit_id = Input::get('penyakit');
				$now = new DateTime();
				$history->tgl = $now->format('Y-m-d H:i:s');
				$history->login = 0;
				$history->status = 0;
				$history->save();
				return redirect('pasien/detail/'.Input::get('edit_id'))->withErrors($validate)->withInput();
			}else{
				//force
				$pasien = User::find(Input::get('edit_id'));
				$pasien->penyakit_id = Input::get('penyakit');
				$pasien->save();
				return redirect('pasien/detail/'.Input::get('edit_id'))->withErrors($validate)->withInput();
			}
		}
	}

	public function setRs($id){
		
	}
}