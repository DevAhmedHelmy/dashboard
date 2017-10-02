<?php

namespace App;

use App\Category;
use App\Member;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function category()
    {
    	return $this->belongsTo(Category::class,'cat_id');
    }
    public function member()
    {
    	return $this->belongsTo(Member::class,'member_id');
    }
}
