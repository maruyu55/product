<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //追加

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            'name'=>'トマト',
            'price'=>198,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('items')->insert([
            'name'=>'レタス',
            'price'=>100,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('items')->insert([
            'name'=>'おせち',
            'price'=>30000,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
