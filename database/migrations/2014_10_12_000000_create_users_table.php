<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username')->unique();
			$table->string('password', 60);
			$table->string('email')->unique();
			$table->smallInteger('jk');
			$table->string('nama_pasien');
			$table->dateTime('ttl');
			$table->dateTime('tgl_masuk');
			$table->smallInteger('status');
			$table->text('alamat');
			$table->integer('rt');
			$table->integer('rw');
			$table->string('telp_rumah');
			$table->string('hp1');
			$table->string('hp2');
			$table->string('role');
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
		Schema::drop('users');
	}

}
