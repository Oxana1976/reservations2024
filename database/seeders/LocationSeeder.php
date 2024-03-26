<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Location;
use App\Models\Locality;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //Empty the table first
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Location::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $locations = [
            [
                'slug'=>null,
                'designation'=>'Espace Delvaux / La Vénerie',
                'address'=>'3 rue Gratès',
                'locality_postal_code'=>'1000',
                'website'=>'https://www.lavenerie.be',
                'phone'=>'+32 (0)2/663.85.50',
            ],
            [
                'slug'=>null,
                'designation'=>'Dexia Art Center',
                'address'=>'50 rue de l\'Ecuyer',
                'locality_postal_code'=>'1000',
                'website'=>null,
                'phone'=>null,
            ],
            [
                'slug'=>null,
                'designation'=>'La Samaritaine',
                'address'=>'16 rue de la samaritaine',
                'locality_postal_code'=>'1000',
                'website'=>'http://www.lasamaritaine.be/',
                'phone'=>null,
            ],
            [
                'slug'=>null,
                'designation'=>'Espace Magh',
                'address'=>'17 rue du Poinçon',
                'locality_postal_code'=>'1000',
                'website'=>'http://www.espacemagh.be',
                'phone'=>'+32 (0)2/274.05.10',
            ],

            [
                'slug'=>null,
                'designation'=>'Arenberg',
                'address'=>'28 Arenbergstraat ',
                'locality_postal_code'=>'2180',
                'website'=>'https://www.arenberg.be/nl/',
                'phone'=>'+32 (0)3 202 46 46',
            ],

            [
                'slug'=>null,
                'designation'=>'De Singel',
                'address'=>'25 Desguinlei',
                'locality_postal_code'=>'2180',
                'website'=>'https://desingel.be',
                'phone'=>'+32 (0)3 248 28 28',
            ],

            [
                'slug'=>null,
                'designation'=>'Opéra de Flandre Gand',
                'address'=>'3 Schouwburgstraat',
                'locality_postal_code'=>'9052',
                'website'=>'https://www.operaballet.be/',
                'phone'=>'+32 9 268 10 57',
            ],

            [
                'slug'=>null,
                'designation'=>'Le Delta',
                'address'=>'18 Avenue Fernand Golenvaux',
                'locality_postal_code'=>'5020',
                'website'=>'https://www.ledelta.be/',
                'phone'=>' 081 77 67 73',
            ],

            [
                'slug'=>null,
                'designation'=>'Kulturfabrik',
                'address'=>'116 rue de Luxembourg',
                'locality_postal_code'=>'1111',
                'website'=>'https://www.kulturfabrik.lu/',
                'phone'=>'+352 55 44 93 1',
            ],

            [
                'slug'=>null,
                'designation'=>'360 Paris Music Factory',
                'address'=>'32 rue Myrha',
                'locality_postal_code'=>'75001',
                'website'=>'https://le360paris.com/',
                'phone'=>'01 47 53 62 57',
            ],

            [
                'slug'=>null,
                'designation'=>'Accor Arena',
                'address'=>'8 boulevard de Bercy',
                'locality_postal_code'=>'75001',
                'website'=>'https://www.accorarena.com/fr',
                'phone'=>'08.92.39.04.90',
            ],

        ];
          //Insert data in the table
          foreach ($locations as &$data) {
            //Recherche de la localité correspondant au code postal
             $locality = Locality::firstWhere('postal_code',$data['locality_postal_code']);
             unset($data['locality_postal_code']);
 
             $data['slug'] = Str::slug($data['designation'],'-');
             $data['locality_id'] = $locality->id;	//Référence à la table localities
         }
 
         DB::table('locations')->insert($locations);
    }
}
