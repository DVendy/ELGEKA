<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model {

	protected $table = 'obat';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nama_obat', 'jumlah'];

}
