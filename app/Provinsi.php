<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model {

	protected $table = 'provinsi';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nama_provinsi'];

    public function kotakabs() {
        return $this->hasMany('App\Kotakab');
    }
}
