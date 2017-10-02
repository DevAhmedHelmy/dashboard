<?php

namespace App;

use App\Item;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{

    protected $fillable = [
   		'id',
   		'user_name',
   		'email',
   		'full_name',
		'group_id',
		'reg_status',
		'trust_status',
		'image',
		'password'
   	];

    public function items()
    {
      return $this->hasMany(Item::class,'member_id');
    }
}
