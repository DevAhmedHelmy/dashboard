<?php

namespace App;

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
}
