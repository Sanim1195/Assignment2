<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_file = File::get('database/data/users-data.json'); // Get users-data.json 
        DB::table('users')->delete(); // Delete all records from the userss database table 
        $data = json_decode($json_file); // Convert the array of JSON objects in users-data.json to a PHP variable
        foreach ($data as $obj) { // For each object (contains key/value pairs) in the PHP variable, create a new record in the userss database table 
        User::create(array( // Remember an users has 6 values - . Make 
                                       // sure your JSON file matches the schema of your database table
                'userTypeId' => $obj->userTypeId,
                'name' => $obj->name, 
                'lastName' => $obj->lastName,                
                'address' => $obj->address,
                'email' => $obj->email,
                'password' => $obj->password
                
            ));
        }
    }
}
