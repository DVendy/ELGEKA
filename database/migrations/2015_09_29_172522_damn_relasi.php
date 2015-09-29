<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DamnRelasi extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('kotakab', function($table)
		{
		    $table->integer('provinsi_id');
		});
		
		Schema::table('kecamatan', function($table)
		{
		    $table->integer('kotakab_id');
		});
		
		Schema::table('kelurahan', function($table)
		{
		    $table->integer('kecamatan_id');
		});
		
		Schema::table('rumah_sakit', function($table)
		{
		    $table->integer('kelurahan_id');
		});
		
		Schema::table('artikel', function($table)
		{
		    $table->renameColumn('alamat', 'isi');
		});

		Schema::create('tag', function($table)
		{
			$table->increments('id');
			$table->string('nama');
			$table->timestamps();
		});


		Schema::create('artikel_tag', function($table)
		{
			$table->increments('id');
			$table->integer('artikel_id');
			$table->integer('tag_id');
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
