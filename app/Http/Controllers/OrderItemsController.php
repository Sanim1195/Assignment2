<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderItems;

class OrderItemsController extends Controller
{
    //Joining tables order_items and orders on orders.Id
    public function index()
    {
        return OrderItems::join('orders', 'order_items.orderId', '=', 'orders.id')
        ->join('foods', 'order_items.foodId', '=', 'foods.id')
        ->get([
            'orders.userId', 
            'orders.orderDate', 
            'foods.foodName',
            'foods.foodPrice',
            'order_items.quantity'            
        ]);
    }

    ///A function equivalent to insert into order_items with validation that makes the user to enter the required fields to proceed
    public function store(Request $request)
    {
        
        $request->validate([
            'orderId' => 'required',
            'foodId' => 'required',
            'quantity' => 'required'
            
            
        ]);
        return OrderItems::create($request->all());
    }

     //A function to select all from order_items where $id=id(column)
    public function show($id)
    {
        return OrderItems::find($id);
    }

    //A function to updte  from order_items where $id=id
    public function update(Request $request, $id)
    {
       
        $orderitems = OrderItems::find($id);
        $orderitems->update($request->all());
        return $orderitems;
    }

      //A function to delete  from order_items where $id(User input id in url)=id(column)
    public function destroy($id)
    {
        return OrderItems::destroy($id);
    }
}
