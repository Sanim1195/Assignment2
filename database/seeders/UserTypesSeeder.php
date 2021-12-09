<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\UserTypes;
class UserTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_file = File::get('database/data/usertypes-data.json'); // Get userTypes-data.json 
        DB::table('user_types')->delete(); // Delete all records from the usertypess database table 
        $data = json_decode($json_file); // Convert the array of JSON objects in usertypes-data.json to a PHP variable
        foreach ($data as $obj) { // For each object (contains key/value pairs) in the PHP variable, create a new record in the usertypess database table 
            UserTypes::create(array( // Remember an usertypes has 2 values - . Make 
                                       // sure your JSON file matches the schema of your database table
                'userTypeName' => $obj->userTypeName,
                'userTypeDiscription' => $obj->userTypeDiscription
                
            ));
    }
} 
}
