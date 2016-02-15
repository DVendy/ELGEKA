<?php namespace App\Http\Controllers;

use DB;

class LaporanController extends Controller {

	public function index(){
		return view('admin.laporan.laporan');
	}

	public function laporan($id){
		switch ($id) {
			case 1:
				$sql = "SELECT pr.nama_provinsi, IFNULL(kt.nama_kotakab, '-') AS nama_kotakab, p.nama_penyakit, COUNT(*) AS jumlah FROM users AS u LEFT JOIN kotakab AS kt ON u.kotakab_id = kt.id LEFT JOIN provinsi as pr ON u.provinsi_id = pr.id LEFT JOIN penyakit_user as p_u ON u.id = p_u.users_id LEFT JOIN penyakit as p ON p.id = p_u.penyakit_id GROUP BY pr.nama_provinsi, nama_kotakab";
				$rows = DB::select(DB::raw($sql));
				//dd($rows);
				return view('admin.laporan.'.$id)->with('rows', $rows);
				break;
			
			case 2:
				$sql = "SELECT pr.nama_provinsi, IFNULL(kt.nama_kotakab, '-') AS nama_kotakab, p.nama_obat, COUNT(*) AS jumlah FROM users AS u LEFT JOIN kotakab AS kt ON u.kotakab_id = kt.id LEFT JOIN provinsi as pr ON u.provinsi_id = pr.id LEFT JOIN obat_user as p_u ON u.id = p_u.users_id LEFT JOIN obat as p ON p.id = p_u.obat_id GROUP BY pr.nama_provinsi, nama_kotakab";
				$rows = DB::select(DB::raw($sql));
				//dd($rows);
				return view('admin.laporan.'.$id)->with('rows', $rows);
				break;
			
			case 3:
				$sql = "SELECT u.nama_pasien, COUNT(*) AS jumlah, u.id FROM users AS u, obat AS o, obat_user AS o_u WHERE o.id = o_u.obat_id AND u.id = o_u.users_id GROUP BY u.nama_pasien";
				$rows = DB::select(DB::raw($sql));
				//dd($rows);
				return view('admin.laporan.'.$id)->with('rows', $rows);
				break;
			
			case 4:
				$sql = "SELECT pr.nama_provinsi, IFNULL(kt.nama_kotakab, '-') AS nama_kotakab, rs.nama_rs, COUNT(*) AS jumlah FROM users AS u LEFT JOIN kotakab AS kt ON u.kotakab_id = kt.id LEFT JOIN provinsi as pr ON u.provinsi_id = pr.id LEFT JOIN rs ON u.rs_id = rs.id GROUP BY pr.nama_provinsi, nama_kotakab, rs.nama_rs";
				$rows = DB::select(DB::raw($sql));
				//dd($rows);
				return view('admin.laporan.'.$id)->with('rows', $rows);
				break;
			
			case 5:
				$sql = "SELECT u.id, u.nama_pasien, rs.nama_rs FROM users AS u, rs WHERE u.rs_id = rs.id ORDER BY u.id";
				$rows = DB::select(DB::raw($sql));
				//dd($rows);
				return view('admin.laporan.'.$id)->with('rows', $rows);
				break;
			
			case 6:
				$sql = "SELECT rs.nama_rs, o.nama_obat, COUNT(*) AS jumlah FROM users AS u, obat AS o, rs, obat_user AS o_u WHERE u.rs_id = rs.id AND u.id = o_u.users_id AND o.id = o_u.obat_id GROUP BY rs.nama_rs, o.nama_obat";
				$rows = DB::select(DB::raw($sql));
				//dd($rows);
				return view('admin.laporan.'.$id)->with('rows', $rows);
				break;
			
			case 7:
				$sql = "SELECT d.nama_dokter, COUNT(*) AS jumlah FROM users AS u, dokter AS d WHERE d.id = u.dokter_id GROUP BY d.nama_dokter";
				$rows = DB::select(DB::raw($sql));
				//dd($rows);
				return view('admin.laporan.'.$id)->with('rows', $rows);
				break;
			
			case 8:
				$sql = "SELECT u.id, u.nama_pasien, COUNT(*) AS jumlah FROM users AS u, dokter AS d, dokter_user AS d_u WHERE u.id = d_u.users_id AND d.id = d_u.dokter_id GROUP BY u.nama_pasien";
				$rows = DB::select(DB::raw($sql));
				//dd($rows);
				return view('admin.laporan.'.$id)->with('rows', $rows);
				break;
			
			case 9:
				$sql = "SELECT a.nama_asuransi, IFNULL(COUNT(u.id), 0) AS jumlah FROM asuransi AS a LEFT JOIN users AS u ON u.asuransi_id = a.id GROUP BY a.nama_asuransi";
				$rows = DB::select(DB::raw($sql));
				//dd($rows);
				return view('admin.laporan.'.$id)->with('rows', $rows);
				break;

			
			case 10:
				$sql = "SELECT pr.nama_provinsi, IFNULL(kt.nama_kotakab, '-') AS nama_kotakab, COUNT(*) AS jumlah FROM users AS u LEFT JOIN kotakab AS kt ON u.kotakab_id = kt.id LEFT JOIN provinsi as pr ON u.provinsi_id = pr.id GROUP BY pr.nama_provinsi, nama_kotakab";
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
