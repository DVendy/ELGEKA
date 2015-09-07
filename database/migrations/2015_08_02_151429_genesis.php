<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Genesis extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('obat', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_obat');
			$table->integer('jumlah');
			$table->timestamps();
		});

		Schema::create('asuransi', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_asuransi');
			$table->timestamps();
		});

		Schema::create('dokter', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_dokter');
			$table->timestamps();
		});

		Schema::create('indikasi', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_indikasi');
			$table->timestamps();
		});

		Schema::create('rumah_sakit', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_rs');
			$table->timestamps();
		});

		Schema::create('provinsi', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_provinsi');
			$table->timestamps();
		});

		Schema::create('kotakab', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_kotakab');
			$table->timestamps();
		});

		Schema::create('kecamatan', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_kecamatan');
			$table->timestamps();
		});

		Schema::create('kelurahan', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_kelurahan');
			$table->timestamps();
		});

		Schema::create('artikel', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('judul');
			$table->text('alamat');
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
