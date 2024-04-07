<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ReservationRepresentation;
use App\Models\Reservation;
use App\Models\Representation;
use App\Models\Price;
use App\Models\Show;




class ReservationRepresentationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
          //Empty the table first
          DB::statement('SET FOREIGN_KEY_CHECKS=0');
          DB::table('reservation_representation')->truncate();
          DB::statement('SET FOREIGN_KEY_CHECKS=1');

          $data = [
            ['status'=>'Payée',
            'show_slug'=>'lost-words',
            'price'=>20.00,
            'quantity'=>'2'
            ],
            ['status'=>'Annulée',
            'show_slug'=>'voice-noise',
            'price'=>8.00,
            'quantity' => '4',
            ],
            ['status'=>'Failed',
            'show_slug'=>'ombra',
            'price'=>10.00,
            'quantity' => '1',
            
            ],
            ['status'=>'En attente',
            'show_slug'=>'recreation',
            'price'=>12.00,
            'quantity' => '2',
            ],
            ['status'=>'Payée',
            'show_slug'=>'exposition-de-lordre-bizarre',
            'price'=>15.00,
            'quantity' => '3',
            ],
            ['status'=>'En attente',
            'show_slug'=>'meteor-airlines',
            'price'=>20.00,
            'quantity' => '5',
            ],
            ['status'=>'Payée',
            'show_slug'=>'jokair',
            'price'=>8.00,
            'quantity' => '1',
            ],
            ['status'=>'Payée',
            'show_slug'=>'ayiti',
            'price'=>15.00,
            'quantity' => '3',
            ],
            ['status'=>'En attente',
            'show_slug'=>'cible-mouvante',
            'price'=>10.00,
            'quantity' => '4',
            ],
            ['status'=>'En attente',
            'show_slug'=>'ceci-nest-pas-un-chanteur-belge',
            'price'=>12.00,
            'quantity' => '3',
            ],
    ];

            
        foreach ($data as $item) {
            // Trouver la représentation basée sur show_slug
            $show = Show::where('slug', $item['show_slug'])->first();

            $representation = Representation::where('show_id', $show->id)->first();
            // $representation = Representation::whereHas('show_slug', function ($query) use ($item) {
            //     $query->where('slug', $item['show_slug']);
            // })->first();

            // Trouver le prix correspondant
            //$price = Price::where('price', $item['price'])->first();
            $price = Price::where(
                'price','=',$item['price'],  
            )->first();
            $item['price_id'] = $price->id;
            unset($item['price']);
            

            // Trouver ou créer une réservation (exemple simple)
            $reservation = Reservation::firstOrCreate([
                'status' => $item['status'],
                // Ajoutez d'autres champs nécessaires pour la création
            ]);

            // Insérer dans la table intermédiaire
            DB::table('reservation_representation')->insert([
                'reservation_id' => $reservation->id,
                'representation_id' => $representation ? $representation->id : null,
               
                'price_id' => $price->id,
                'quantity' => $item['quantity'],
            ]);
        } 
          
           
       
    }
}
