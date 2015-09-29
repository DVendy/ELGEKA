<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Rs extends Model {

	protected $table = 'rumah_sakit';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nama_rs'];

	public function kelurahan() {
        return $this->belongsTo('Kelurahan');
    }

}
