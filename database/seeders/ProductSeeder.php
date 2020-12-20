<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'LG Mobile',
                'price' => '200',
                'description' => 'g rthrh ty wrthwrt hrthrh wrthr rthwrth wrth  ',
                'category' => 'Mobile',
                'gallery' => ' https://images.unsplash.com/photo-1607753724987-7277196eac5d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=667&q=80',

            ],
            [
                'name' => 'LG Mobile',
                'price' => '200',
                'description' => 'g rthrh ty wrthwrt hrthrh wrthr rthwrth wrth  ',
                'category' => 'Mobile',
                'gallery' => ' https://images.unsplash.com/photo-1607753724987-7277196eac5d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=667&q=80',

            ],
            [
                'name' => 'LG Mobile',
                'price' => '200',
                'description' => 'g rthrh ty wrthwrt hrthrh wrthr rthwrth wrth  ',
                'category' => 'Mobile',
                'gallery' => ' https://images.unsplash.com/photo-1607753724987-7277196eac5d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=667&q=80',

            ],
            [
                'name' => 'LG Mobile',
                'price' => '200',
                'description' => 'g rthrh ty wrthwrt hrthrh wrthr rthwrth wrth  ',
                'category' => 'Mobile',
                'gallery' => ' https://images.unsplash.com/photo-1607753724987-7277196eac5d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=667&q=80',

            ]
        ]);
    }
}
