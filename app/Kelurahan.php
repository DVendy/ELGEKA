<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model {

	protected $table = 'kelurahan';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nama_kelurahan'];

}
