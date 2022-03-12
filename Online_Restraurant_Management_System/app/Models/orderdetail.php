<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Product;

class orderdetail extends Model
{
    use HasFactory;
    public $timestamps   = false;
    public function product(){
        return $this->belongsTo(Product::class, 'p_id','id');
    }
    public function order(){
        return $this->belongsTo(Order::class,'o_id');
    }
}
