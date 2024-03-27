<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         //Empty the table first
         Role::truncate();
        
         //Define data
        $roles = [
             ['role'=>'admin'],
             ['role'=>'member'],
             ['role'=>'affiliate'],
         ];
         
         //Insert data in the table
         DB::table('roles')->insert($roles);
    }
}
