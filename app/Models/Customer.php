<?php

namespace App\Models;
use  App\Models\Order;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $primaryKey = 'CID';
    public function orderList()
    {
        return $this->hasMany(Order::class,'CID');
    }

}
