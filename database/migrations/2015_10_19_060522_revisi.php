<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Revisi extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function($table)
		{
		    $table->dropColumn('rt');
		    $table->dropColumn('rw');
		    $table->integer('rumah_sakit_id');
		    $table->integer('asuransi_id');
		    $table->integer('penyakit_id');
		});

		Schema::create('obat_user', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('obat_id');
			$table->integer('users_id');
			$table->integer('jumlah');
			$table->timestamps();
		});

		Schema::create('dokter_user', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('dokter_id');
			$table->integer('users_id');
			$table->timestamps();
		});

		Schema::create('penyakit', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('nama_penyakit');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
