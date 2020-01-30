<?php

use Illuminate\Database\Seeder;
use DLG\Customers;

class CustomersTableSeeder extends Seeder
{

    public function run()
    {
        $customer =
        [
        	[
                'lname' => 'Kikelomo', 
                'fname' => 'Meghoma', 
                'mname' => 'Ibukun',
                'email' => 'ibukune45@gmail.com',
                'password' => bcrypt('kikelomo'), 
                'company' => 'Kiksbeautyplace', 
                'address' => 'iba junction', 
                'contact' => '09123456789',
                'token' => str_random(10),
                'remember_token' => str_random(10)
            ],
        
        ];

        foreach($customer as $cust)
        {
        	Customers::create($cust);
        }
    }
}
