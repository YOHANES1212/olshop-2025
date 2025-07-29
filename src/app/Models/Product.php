<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'stock'];

    public function orders()
    {
        return $this->belongsTo(Order::class);
    }

    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }
}
