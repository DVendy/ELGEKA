<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
		for ($i=1; $i < 201; $i++) { 
			$user = App\User::create([
				'username' => 'pasien'.$i,
				'password' => Hash::make('111111'),
				'email' => 'pasien'.$i.'@elgeka.com',
				'jk' => 'l',
				'nama_pasien' => 'Pasien '.$i,
				'status' => 1,
				'alamat' => 'Alamat rumah',
				'rs_id' => mt_rand(1, 6),
				'asuransi_id' => mt_rand(4, 6),
				'penyakit_id' => mt_rand(2, 4),
				'kelurahan_id' => mt_rand(1, 5),
				'dokter_id' => mt_rand(1, 4)
			]);
			for ($j=0; $j < mt_rand(1, 5); $j++) { 
				App\Obat_user::create([
					'obat_id' => mt_rand(1, 6),
					'users_id' => $user->id,
					'jumlah' => 1
				]);
			}
		}
	}

}
