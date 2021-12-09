<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //Protecting the user input and making it fillable for input.This should match the required section in controllers
    use HasFactory;
    protected $fillable = ['userId', 'orderDate', 'paymentId'];
    
    //Specifying orders can have many order_items
    public function orderItems() {
    return $this->hasMany(OrderItems::class);
    }
}

