<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Price;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        //Empty the table first
        Price::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $prices = [

            [
                'type' => 'Standard',
                'price' => 20.00,
                'start_date' => Carbon::now()->format('Y-m-d'),
                'end_date' => Carbon::now()->addMonth(1)->format('Y-m-d'),
            ],
            [
                'type' => 'Étudiant',
                'price' => 15.00,
                'start_date' => Carbon::now()->format('Y-m-d'),
                'end_date' => Carbon::now()->addMonth(1)->format('Y-m-d'),
            ],
            [
                'type' => 'Senior',
                'price' => 10.00,
                'start_date' => Carbon::now()->format('Y-m-d'),
                'end_date' => Carbon::now()->addMonth(1)->format('Y-m-d'),

            ],
            [
                'type' => 'Enfant',
                'price' => 8.00,
                'start_date' => Carbon::now()->format('Y-m-d'),
                'end_date' => Carbon::now()->addMonth(1)->format('Y-m-d'),
                
            ],
            [
                'type' => 'Groupe',
                'price' => 12.00,
                'start_date' => Carbon::now()->format('Y-m-d'),
                'end_date' => Carbon::now()->addMonth(1)->format('Y-m-d'),
                
            ],
          
        ];
        
        //Insert data in the table
        DB::table('prices')->insert($prices);

    }
}
