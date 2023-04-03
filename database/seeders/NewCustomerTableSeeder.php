<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewCustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('new_customers')->insert([
            'name' => 'Xanlar',
            'surname' => 'Ezizov',
            'birthdate'=>'2003-01-25',
            'gender'=>'Kisi',
            'carbrand'=>'Kia',
            'releaseyear'=>2000,
            'color'=>'black'
        ]);
    }
}
