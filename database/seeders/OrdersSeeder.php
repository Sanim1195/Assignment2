<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Orders;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_file = File::get('database/data/orderss-data.json'); // Get orderss-data.json 
        DB::table('orders')->delete(); // Delete all records from the ordersss database table 
        $data = json_decode($json_file); // Convert the array of JSON objects in orderss-data.json to a PHP variable
        foreach ($data as $obj) { // For each object (contains key/value pairs) in the PHP variable, create a new record in the ordersss database table 
        Orders::create(array( // Remember an orderss has three values -y. Make 
                                       // sure your JSON file matches the schema of your database table
                'userId' => $obj->userId,
                'orderDate' => $obj->orderDate, 
                'paymentId' => $obj->paymentId               
                
            ));
        }
    }
}
