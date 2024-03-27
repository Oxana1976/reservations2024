<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\UserRole;
use App\Models\User;
use App\Models\Role;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // //Empty the table first
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('user_role')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $userRoles=[
            [ 
            'user_firstname'=>'Bob',
            'user_lastname'=>'Sull',
            'role'=>'admin',

            ],
            [ 
            'user_firstname'=>'Anna',
            'user_lastname'=>'Lyse',
            'role'=>'member',
    
            ],
            [ 
            'user_firstname'=>'Oxana',
            'user_lastname'=>'Eremeeva',
            'role'=>'admin',
        
            ],
            [ 
            'user_firstname'=>'Oxana',
            'user_lastname'=>'Eremeeva',
            'role'=>'member',
            
             ],
            [ 
            'user_firstname'=>'John',
            'user_lastname'=>'Smit',
            'role'=>'affiliate',
            
            ],
            [ 
            'user_firstname'=>'John',
            'user_lastname'=>'Smit',
            'role'=>'member',
                
            ],
        ];

            //Prepare the data
            foreach ($userRoles as &$data) {
                //Search the artist for a given artist's firstname and lastname
                $user = User::where([
                    ['firstname','=',$data['user_firstname'] ],
                    ['lastname','=',$data['user_lastname'] ]
                ])->first();
    
                //Search the type for a given type
                $role = Role::firstWhere('role',$data['role']);
                
                unset($data['user_firstname']);
                unset($data['user_lastname']);
                unset($data['role']);
    
                $data['user_id'] = $user->id;
                $data['role_id'] = $role->id;
            }
            unset($data);
    
            //Insert data in the table
            DB::table('user_role')->insert($userRoles);
    }
}
