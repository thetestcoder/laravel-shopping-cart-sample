<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $appends = ['amount_with_currency'];

    //custom property
    public function getAmountWithCurrencyAttribute()
    {
        return '₹'.$this->price;
    }

}
