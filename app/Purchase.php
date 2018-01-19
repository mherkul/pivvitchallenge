<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_name', 'offering_id', 'quantity'
    ];

    /**
     * Get the offering of the purchase.
     */
    public function offering()
    {
        return $this->belongsTo('App\Offering');
    }
}
