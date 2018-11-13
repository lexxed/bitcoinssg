<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    
    protected $fillable = ['name','url','affurl','status','description','payout'];

    protected $table = 'affiliate';

	// each affiliate BELONGS to a coin
	public function coins() {
		return $this->belongsToMany('App\Coin', 'affiliate_coins', 'affiliate_id', 'coin_id');
	}

}
