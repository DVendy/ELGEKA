<?php namespace App\Http\Controllers;

use DB;

class ChartController extends Controller {
	public function dashboard(){
		//DB::connection()->enableQueryLog();
		$sql = "SELECT a.nama_asuransi AS name, IFNULL(COUNT(u.id), 0) AS value FROM asuransi AS a LEFT JOIN users AS u ON u.asuransi_id = a.id GROUP BY a.nama_asuransi";
		$asuransi = DB::select(DB::raw($sql));

		$sql = "SELECT o.nama_obat AS name, IFNULL(COUNT(u.id), 0) AS jumlah FROM obat AS o LEFT JOIN obat_user AS o_u ON o.id = o_u.obat_id LEFT JOIN users AS u ON o_u.users_id = u.id GROUP BY o.nama_obat";
		$obat = DB::select(DB::raw($sql));

		$sql = "SELECT o.nama_penyakit AS name, IFNULL(COUNT(u.id), 0) AS jumlah FROM penyakit AS o LEFT JOIN penyakit_user AS o_u ON o.id = o_u.penyakit_id LEFT JOIN users AS u ON o_u.users_id = u.id GROUP BY o.nama_penyakit";
		$penyakit = DB::select(DB::raw($sql));

		//yg ribet
		$sql = "SELECT a.nama_asuransi, p.nama_penyakit, COUNT(u.id) AS value FROM asuransi AS a, penyakit AS p, users AS u, penyakit_user as p_u WHERE a.id = u.asuransi_id AND p.id = p_u.penyakit_id AND u.id = p_u.users_id GROUP BY a.nama_asuransi, p.nama_penyakit";
		$lol = DB::select(DB::raw($sql));

		$data = [];
		$sql = "SELECT a.nama_asuransi AS name FROM asuransi AS a";
		$data['asuransi'] = DB::select(DB::raw($sql));
		$sql = "SELECT a.nama_penyakit AS name FROM penyakit AS a";
		$data['penyakit'] = DB::select(DB::raw($sql));

		$ribet = [];
		foreach ($lol as $key => $value) {
			$ribet[$value->nama_asuransi][$value->nama_penyakit] = $value->value;
		}
		//var_dump(DB::getQueryLog());

		//die();
		//dd($penyakit);
		return view('admin.dashboard')->with('asuransi', $asuransi)->with('obat', $obat)->with('penyakit', $penyakit)->with('data', $data)->with('ribet', $ribet);
	}
}