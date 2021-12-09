<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
   //Joining tables users and user_types on user_types.Id
    public function index()
    {
        return User::join('user_types', 'users.userTypeId', '=', 'user_types.id')
        ->get([
            'users.name', 
            'users.address',
            'users.email',
            'user_types.userTypeName',
            'user_types.userTypeDiscription'
        ]);
    }

    ///A function equivalent to insert into users with validation that makes the user to enter the required fields to proceed
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'password' => 'required'
            
        ]);
        return User::create($request->all());
    
    }

     //A function to select all from users where $id=id(column)
    public function show($id)
    {
        return User::find($id);
    }

    //A function to updte  from users where $id=id
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return $user;
    }

     //A function to delete  from users where $id(User input id in url)=id(column)
    public function destroy($id)
    {
        return User::destroy($id);
    }
}
