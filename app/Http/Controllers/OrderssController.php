<?php

namespace App\Http\Controllers;
use App\Models\Orders;
use Illuminate\Http\Request;

class OrderssController extends Controller
{
    //Joining tables users and user_types on user_types.Id
    public function index()
    {
        return Orders::join('users', 'orders.userId', '=', 'users.id')
        ->get([
            'users.name', 
            'users.address',
            'users.email',
            'orders.orderDate'
            
        ]);
    }

    ///A function equivalent to insert into users with validation that makes the user to enter the required fields to proceed
    public function store(Request $request)
    {
        
        $request->validate([
            'userId' => 'required',
            'orderDate' => 'required',
            'paymentId' => 'required'
            
            
        ]);
        return Orders::create($request->all());
    }

    //A function to select all from orders where $id=id(column)
    public function show($id)
    {
        return Orders::find($id);

    }

    //A function to updte  from orders where $id=id
    public function update(Request $request, $id)
    {
        $orders = Orders::find($id);
        $orders->update($request->all());
        return $orders;
    }

    //A function to delete  from orders where $id(User input id in url)=id(column)
    public function destroy($id)
    {
        return Orders::destroy($id);
    }
}
