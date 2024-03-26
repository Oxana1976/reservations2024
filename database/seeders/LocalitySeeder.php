<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Locality;

class LocalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        //Empty the table first
        Locality::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        //Define data
       $localities = [
            ['postal_code'=>'1000','locality'=>'Bruxelles'],
            ['postal_code'=>'2180','locality'=>'Anvers'],
            ['postal_code'=>'9052','locality'=>'Gand'],
            ['postal_code'=>'5020','locality'=>'Namur'],
            ['postal_code'=>'75001','locality'=>'Paris'],
            ['postal_code'=>'1111','locality'=>'Luxemburg'],
           
        ];
        
        //Insert data in the table
        DB::table('localities')->insert($localities);
    }
}
