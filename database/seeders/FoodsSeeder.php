<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Foods;
class FoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_file = File::get('database/data/foods-data.json'); // Get foods-data.json 
        DB::table('foods')->delete(); // Delete all records from the foodss database table 
        $data = json_decode($json_file); // Convert the array of JSON objects in foods-data.json to a PHP variable
        foreach ($data as $obj) { // For each object (contains key/value pairs) in the PHP variable, create a new record in the foodss database table 
        Foods::create(array( // Remember an foods has 5 values - . Make 
                                       // sure your JSON file matches the schema of your database table
                'foodName' => $obj->foodName,
                'foodPrice' => $obj->foodPrice, 
                'foodCategory' => $obj->foodCategory,
                'foodDescription' => $obj->foodDescription,
                'discountStatus' => $obj->discountStatus        
            ));
        }
    }
}
