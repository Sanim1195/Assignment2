<?php

namespace App\Http\Controllers;
use App\Models\UserTypes;
use Illuminate\Http\Request;

class UserTypesController extends Controller
{
    // A function equivalent to SQL select * from user_types;
    public function index()
    {
        return UserTypes::all();
    }

    //A function equivalent to insert into user_types with validation that makes the user to enter the required fields to proceed
    public function store(Request $request)
    {
        $request->validate([
            'userTypeName' => 'required',
            'userTypeDiscription' => 'required'
            
        ]);
    
        return UserTypes::create($request->all());
    }

   //A function to select all from user_types where $id=id(column)
    public function show($id)
    {
        return UserTypes::find($id);

    }

    //A function to updte  from user_types where $id=id
    public function update(Request $request, $id)
    {
        $userTypes = UserTypes::find($id);
        $userTypes->update($request->all());
        return $userTypes;
    }

     //A function to delete  from user_types where $id(User input id in url)=id(column)
    public function destroy($id)
    {
        return UserTypes::destroy($id);
    }
}
