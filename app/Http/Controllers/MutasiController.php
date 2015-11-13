<?php namespace App\Http\Controllers;

use App\User;
use App\Penyakit;
use App\Penyakit_history;
use App\Rs_history;
use App\Dokter_history;
use App\Asuransi_history;
use App\Obat_history;

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

		$sql = "SELECT h.id, u.id AS id_pasien, u.nama_pasien, pp.nama_rs AS asal, p.nama_rs AS tujuan, h.tgl FROM rs_history as h, rs as p, users as u,(SELECT u.id, p.nama_rs FROM rs AS p, users AS u WHERE u.rs_id = p.id) AS pp WHERE h.users_id = u.id AND h.rs_id = p.id AND h.status = 0 AND u.id = pp.id";
		$rs_history = DB::select(DB::raw($sql));
		
		$sql = "SELECT h.id, u.id AS id_pasien, u.nama_pasien, pp.nama_asuransi AS asal, p.nama_asuransi AS tujuan, h.tgl FROM asuransi_history as h, asuransi as p, users as u,(SELECT u.id, p.nama_asuransi FROM asuransi AS p, users AS u WHERE u.asuransi_id = p.id) AS pp WHERE h.users_id = u.id AND h.asuransi_id = p.id AND h.status = 0 AND u.id = pp.id";
		$asuransi_history = DB::select(DB::raw($sql));
		
		$sql = "SELECT h.id, u.id AS id_pasien, u.nama_pasien, pp.nama_dokter AS asal, p.nama_dokter AS tujuan, h.tgl FROM dokter_history as h, dokter as p, users as u,(SELECT u.id, p.nama_dokter FROM dokter AS p, users AS u WHERE u.dokter_id = p.id) AS pp WHERE h.users_id = u.id AND h.dokter_id = p.id AND h.status = 0 AND u.id = pp.id";
		$dokter_history = DB::select(DB::raw($sql));
		
		$sql = "SELECT o_h.id, u.nama_pasien, o.nama_obat, o_h.tgl FROM obat_history AS o_h, obat AS o, users AS u WHERE o_h.users_id = u.id AND o_h.obat_id = o.id AND o_h.status = 0";
		$obat_history = DB::select(DB::raw($sql));

		//dd(count($rows));

		return view('admin.mutasi')->with('penyakit_history', $penyakit_history)->with('rs_history', $rs_history)->with('dokter_history', $dokter_history)->with('asuransi_history', $asuransi_history)->with('obat_history', $obat_history);
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
				return redirect('pasien/detail/'.Input::get('edit_id'))->with('success', true);
			}else{
				//force
				$pasien = User::find(Input::get('edit_id'));
				$pasien->penyakit_id = Input::get('penyakit');
				$pasien->save();
				return redirect('pasien/detail/'.Input::get('edit_id'));
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

	public function mutasiRs(){
		$validate = Validator::make(Input::all(), array(
			'rs' 	=> 'required',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'rs' 	=> 'required',
				'update_rs' => 'required',
				));
			return redirect('pasien/detail/'.Input::get('edit_id'))->withErrors($validate)->withInput();
		}
		else{
			if (Input::has('history_rs')){
				//insert history
				$history = Rs_history::where('users_id', Input::get('edit_id'))->where('status', 0)->first();
				if ($history == null)
					$history = new Rs_history();

				$history->users_id = Input::get('edit_id');
				$history->rs_id = Input::get('rs');
				$now = new DateTime();
				$history->tgl = $now->format('Y-m-d H:i:s');
				$history->login = 0;
				$history->status = 0;
				$history->save();
				return redirect('pasien/detail/'.Input::get('edit_id'))->with('success', true);
			}else{
				//force
				$pasien = User::find(Input::get('edit_id'));
				$pasien->rs_id = Input::get('rs');
				$pasien->save();
				return redirect('pasien/detail/'.Input::get('edit_id'));
			}
		}
	}

	public function setRs($id){
		$history = Rs_history::find($id);
		//dd($history);
		$pasien = User::find($history->users_id);
		$temp = $pasien->rs_id;

		$pasien->rs_id = $history->rs_id;
		$history->rs_id = $temp;

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
			if (Input::has('history_dokter')){
				//insert history
				$history = Dokter_history::where('users_id', Input::get('edit_id'))->where('status', 0)->first();
				if ($history == null)
					$history = new Dokter_history();

				$history->users_id = Input::get('edit_id');
				$history->dokter_id = Input::get('dokter');
				$now = new DateTime();
				$history->tgl = $now->format('Y-m-d H:i:s');
				$history->login = 0;
				$history->status = 0;
				$history->save();
				return redirect('pasien/detail/'.Input::get('edit_id'))->with('success', true);
			}else{
				//force
				$pasien = User::find(Input::get('edit_id'));
				$pasien->dokter_id = Input::get('dokter');
				$pasien->save();
				return redirect('pasien/detail/'.Input::get('edit_id'));
			}
		}
	}

	public function setDokter($id){
		$history = Dokter_history::find($id);
		//dd($history);
		$pasien = User::find($history->users_id);
		$temp = $pasien->dokter_id;

		$pasien->dokter_id = $history->dokter_id;
		$history->dokter_id = $temp;

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

	public function mutasiAsuransi(){
		$validate = Validator::make(Input::all(), array(
			'asuransi' 	=> 'required',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'asuransi' 	=> 'required',
				'update_asuransi' => 'required',
				));
			return redirect('pasien/detail/'.Input::get('edit_id'))->withErrors($validate)->withInput();
		}
		else{
			if (Input::has('history_asuransi')){
				//insert history
				$history = Asuransi_history::where('users_id', Input::get('edit_id'))->where('status', 0)->first();
				if ($history == null)
					$history = new Asuransi_history();

				$history->users_id = Input::get('edit_id');
				$history->asuransi_id = Input::get('asuransi');
				$now = new DateTime();
				$history->tgl = $now->format('Y-m-d H:i:s');
				$history->login = 0;
				$history->status = 0;
				$history->save();
				return redirect('pasien/detail/'.Input::get('edit_id'))->with('success', true);
			}else{
				//force
				$pasien = User::find(Input::get('edit_id'));
				$pasien->asuransi_id = Input::get('asuransi');
				$pasien->save();
				return redirect('pasien/detail/'.Input::get('edit_id'));
			}
		}
	}

	public function setAsuransi($id){
		$history = Asuransi_history::find($id);
		//dd($history);
		$pasien = User::find($history->users_id);
		$temp = $pasien->asuransi_id;

		$pasien->asuransi_id = $history->asuransi_id;
		$history->asuransi_id = $temp;

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

			return redirect('pasien/detail/'.Input::get('edit_id'))->withInput()->with('obat', true);
		}
	}

	public function hapusObat(){
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
			if (Input::has('history_obat')){
				//insert history
				$history = Obat_history::where('users_id', Input::get('edit_id'))->where('status', 0)->first();
				if ($history == null)
					$history = new Obat_history();

				$history->users_id = Input::get('edit_id');
				$history->obat_id = Input::get('obat');
				$now = new DateTime();
				$history->tgl = $now->format('Y-m-d H:i:s');
				$history->login = 0;
				$history->status = 0;
				$history->save();
				return redirect('pasien/detail/'.Input::get('edit_id'))->with('success', true);
			}else{
				//force
				$pasien = User::find(Input::get('edit_id'));
				$pasien->obats()->detach(Input::get('obat'));

				return redirect('pasien/detail/'.Input::get('edit_id'));
			}
		}
	}

	public function setObat($id){
		$history = Obat_history::find($id);
		//dd($history);

		$pasien = User::find($history->users_id);
		$pasien->obats()->detach($history->obat_id);
		$pasien->save();

		$now = new DateTime();
		$history->tgl = $now->format('Y-m-d H:i:s');
		$history->status = 1;

		if(Auth::check()){
			$history->login = Auth::user()->id;
		}

		$history->save();

		return redirect('mutasi')->with('success', true);
	}
}