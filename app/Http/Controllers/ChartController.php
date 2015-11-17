<?php namespace App\Http\Controllers;

use DB;

class ChartController extends Controller {
	public function dashboard(){
		$sql = "SELECT a.nama_asuransi AS name, IFNULL(COUNT(u.id), 0) AS value FROM asuransi AS a LEFT JOIN users AS u ON u.asuransi_id = a.id GROUP BY a.nama_asuransi";
		$asuransi = DB::select(DB::raw($sql));

		$sql = "SELECT o.nama_obat AS name, IFNULL(COUNT(u.id), 0) AS jumlah FROM obat AS o LEFT JOIN obat_user AS o_u ON o.id = o_u.obat_id LEFT JOIN users AS u ON o_u.users_id = u.id GROUP BY o.nama_obat";
		$obat = DB::select(DB::raw($sql));

		$sql = "SELECT a.nama_penyakit AS name, IFNULL(COUNT(u.id), 0) AS value FROM penyakit AS a LEFT JOIN users AS u ON u.penyakit_id = a.id GROUP BY a.nama_penyakit";
		$penyakit = DB::select(DB::raw($sql));

		//dd($rows);
		return view('admin.dashboard')->with('asuransi', $asuransi)->with('obat', $obat)->with('penyakit', $penyakit);
	}
}
