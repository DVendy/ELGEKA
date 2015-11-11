<?php namespace App\Http\Controllers;

use App\User;
use App\Penyakit;
use App\Penyakit_history;

use Hash;
use Validator;
use Input;
use DateTime;

class MutasiController extends Controller {

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