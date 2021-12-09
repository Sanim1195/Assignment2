<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTypes extends Model
{
    //Protecting the user input and making it fillable for input.This should match the required section in controllers
    use HasFactory;
    protected $fillable = ['userTypeName', 'userTypeDiscription'];
    public function users() {
    return $this->hasMany(User::class);
    }
}
