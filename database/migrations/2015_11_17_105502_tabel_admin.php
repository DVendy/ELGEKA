<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelAdmin extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username')->unique();
			$table->string('password');
			$table->string('email')->unique();
			$table->string('nama');
			$table->text('alamat');
			$table->string('telepon');

			$table->smallInteger('a_super')->default(0);
			$table->smallInteger('a_laporan')->default(0);
			$table->smallInteger('a_data')->default(0);
			$table->smallInteger('a_konfirmasi')->default(0);

			$table->rememberToken();
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