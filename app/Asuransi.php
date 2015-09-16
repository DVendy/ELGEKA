<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Asuransi extends Model {

	protected $table = 'asuransi';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nama_asuransi'];

}
