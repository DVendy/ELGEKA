<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Revisi2 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function($table)
		{
		    $table->integer('kelurahan_id');
		});

		Schema::create('asuransi_history', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('users_id');
			$table->integer('asuransi_id');
			$table->datetime('tgl');
			$table->integer('login');
			$table->integer('status');
			$table->timestamps();
		});

		Schema::create('dokter_history', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('users_id');
			$table->integer('dokter_id');
			$table->datetime('tgl');
			$table->integer('login');
			$table->integer('status');
			$table->timestamps();
		});

		Schema::create('obat_history', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('users_id');
			$table->integer('obat_id');
			$table->datetime('tgl');
			$table->integer('login');
			$table->integer('status');
			$table->timestamps();
		});

		Schema::create('penyakit_history', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('users_id');
			$table->integer('penyakit_id');
			$table->datetime('tgl');
			$table->integer('login');
			$table->integer('status');
			$table->timestamps();
		});

		Schema::create('rs_history', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('users_id');
			$table->integer('rs_id');
			$table->datetime('tgl');
			$table->integer('login');
			$table->integer('status');
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
