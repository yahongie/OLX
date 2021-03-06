<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdsProducts extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ads_products';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ads_id', 'product_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function Adsproducts(){

        return $this->belongsTo(Advertising::class,"ads_id");

    }

    public function Products(){

        return $this->belongsTo(Products::class,"product_id");

    }

}
