<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    
    protected $fillable = ['name','url','affurl','status','description','payout'];

    protected $table = 'affiliate';
}
