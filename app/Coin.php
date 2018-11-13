<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    //
	protected $fillable = array('name', 'slug');

	protected $table = 'coins';

	// DEFINE RELATIONSHIPS --------------------------------------------------
	// define a many to many relationship
	// also call the linking table
	public function affiliates() {
		return $this->belongsToMany('App\Affiliate', 'affiliate_coins', 'coin_id', 'affiliate_id');
	}    

}

