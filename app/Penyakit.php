<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model {

	protected $table = 'penyakit';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nama_penyakit'];

}
