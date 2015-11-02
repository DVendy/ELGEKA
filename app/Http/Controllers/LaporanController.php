<?php namespace App\Http\Controllers;

use DB;

class LaporanController extends Controller {

	public function index(){
		return view('admin.laporan.laporan');
	}

	public function laporan($id){
		switch ($id) {
			case 1:
				$sql = "SELECT pr.nama_provinsi, kt.nama_kotakab ,p.nama_penyakit, COUNT(*) AS jumlah FROM penyakit AS p, users AS u, rs, kelurahan AS kl, kecamatan AS kc, kotakab AS kt, provinsi AS pr WHERE u.penyakit_id = p.id AND u.rs_id = rs.id AND rs.kelurahan_id = kl.id AND kl.kecamatan_id = kc.id AND kc.kotakab_id = kt.id AND kt.provinsi_id = pr.id GROUP BY pr.nama_provinsi, kt.nama_kotakab ,p.nama_penyakit";
				$rows = DB::select(DB::raw($sql));
				//dd($rows);
				return view('admin.laporan.'.$id)->with('rows', $rows);
				break;
			
			default:
				# code...
				break;
		}
	}


}
