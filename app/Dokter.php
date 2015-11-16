<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model {

	protected $table = 'dokter';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nama_dokter'];

    public function pasiens() {
        return $this->hasMany('App\User');
    }

}
