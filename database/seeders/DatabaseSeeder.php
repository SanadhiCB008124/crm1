<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $roles = [
            ['name' => 'Admin'],
            ['name' => 'Employee'],
            ['name' => 'Customer'],
        ];

        DB::table('roles')->insert($roles);

        $payments=[
           [ 'payment_method'=>'Cash'],
            ['payment_method'=>'Debit/Credit Card'],
           [ 'payment_method'=>'Voucher'],
            ['payment_method'=>'Paypal'],
            ['payment_method'=>'MasterCard'],
        
        ];
        DB::table('payments')->insert($payments);


    




    }
}
