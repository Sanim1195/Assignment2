<?php

namespace App\Http\Controllers;
use App\Models\Foods;
use Illuminate\Http\Request;

class FoodsController extends Controller
{
    // A function equivalent to SQL select * from foods;
    public function index()
    {
        return Foods::all();
    }

    ///A function equivalent to insert into foods with validation that makes the user to enter the required fields to proceed
    public function store(Request $request)
    {
        return Foods::create($request->all());
    }

    //A function to select all from foods where $id=id(column)
    public function show($id)
    {
        return Foods::find($id);
    }

   //A function to updte  from foods where $id=id
    public function update(Request $request, $id)
    {
        $foods = Foods::find($id);
        $foods->update($request->all());
        return $foods;
    }

    //A function to delete  from foods where $id(User input id in url)=id(column)
    public function destroy($id)
    {
        return Foods::destroy($id);
    }
}
