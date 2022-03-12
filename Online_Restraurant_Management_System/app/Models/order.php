<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Orderdetail;
use App\Models\Customer;

class order extends Model
{
    use HasFactory;
    public $timestamps   = false;

    public function orderdetails(){
        return $this->hasMany(Orderdetail::class,'o_id');
        //general syntax hasMany(model, foreignkey,primarykey)
    }
    public function customer(){
        return $this->belongsTo(Customer::class,'c_id','c_id');
    }
}
