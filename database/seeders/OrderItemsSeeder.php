<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\OrderItems;

class OrderItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $json_file = File::get('database/data/orderitems-data.json'); // Get orderitems-data.json 
        DB::table('order_items')->delete(); // Delete all records from the orderitemss database table 
        $data = json_decode($json_file); // Convert the array of JSON objects in orderitems-data.json to a PHP variable
        foreach ($data as $obj) { // For each object (contains key/value pairs) in the PHP variable, create a new record in the orderitemss database table 
        OrderItems::create(array( // Remember an orderitems has three values -  Make 
                                       // sure your JSON file matches the schema of your database table
                'orderId' => $obj->orderId,
                'foodId' => $obj->foodId, 
                'quantity' => $obj->quantity                       
            ));
        }
    }
}
