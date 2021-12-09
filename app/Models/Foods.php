<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{

    //Protecting the user input and making it fillable for input.This should match the required section in controllers
    use HasFactory;
    protected $fillable = ['foodName', 'foodPrice', 'foodCategory','foodDescription','discountStatus'];

        //Specifying that Food can have many  items
    public function orderItems() {
    return $this->hasMany(OrderItems::class);
    }
}
