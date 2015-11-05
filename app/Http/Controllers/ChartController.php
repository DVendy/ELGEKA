<?php namespace App\Http\Controllers;

use DB;

class ChartController extends Controller {
	public function dashboard(){
		$sql = "SELECT a.nama_asuransi AS name, IFNULL(COUNT(u.id), 0) AS value FROM asuransi AS a LEFT JOIN users AS u ON u.asuransi_id = a.id GROUP BY a.nama_asuransi";
		$rows = DB::select(DB::raw($sql));
		//dd($rows);
		return view('admin.dashboard')->with('rows', $rows);
	}
}
