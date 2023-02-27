<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offer extends Model
{
    use HasFactory;

   protected $fillable=['name','price','status','details','image','created_at','updated_at'];
    protected $hidden=['created_at','updated'];

    const ACTIVE="1" ;
    const UNACTIVE="0" ;

    public function scopeUNACTIVE($query)
    {
        return $query->where('status',"0");
    }
}
