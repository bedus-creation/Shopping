<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    protected $fillable=[
        'name','condition','negotiable','expiry_date','price_id','user_id','category_id','details'
    ];

    protected $dates = ['created_at', 'updated_at', 'expiry_date'];

    public function medias(){
        return $this->belongsToMany('App\Models\Media');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function price(){
        return $this->belongsTo('App\Models\Price');
    }
}
