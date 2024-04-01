<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Show;
class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Review::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        $reviews = [
            [
                'user_firstname'=>'Bob',
                'user_lastname'=>'Sull', // Assurez-vous que cet ID existe dans votre table `users`
                'show_slug'=>'lost-words', // Assurez-vous que cet ID existe dans votre table `shows`
                'review' => 'Un spectacle fantastique!',
                'stars' => 5,
                'validated' => 1, // 1 pour vrai, 0 pour faux
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'user_firstname'=>'Anna',
                'user_lastname'=>'Lyse', // Assurez-vous que cet ID existe dans votre table `users`
                'show_slug'=>'voice-noise', // Assurez-vous que cet ID existe dans votre table `shows`
                'review' => 'Bonne soirée, mais l\'acoustique de la salle laissait à désirer',
                'stars' => 4,
                'validated' => 1, // 1 pour vrai, 0 pour faux
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'user_firstname'=>'Oxana',
                'user_lastname'=>'Eremeeva', // Assurez-vous que cet ID existe dans votre table `users`
                'show_slug'=>'ombra', // Assurez-vous que cet ID existe dans votre table `shows`
                'review' => 'Service client exceptionnel, et le spectacle était tout simplement magique',
                'stars' => 5,
                'validated' => 1, // 1 pour vrai, 0 pour faux
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'user_firstname'=>'John',
                'user_lastname'=>'Smit', // Assurez-vous que cet ID existe dans votre table `users`
                'show_slug'=>'recreation', // Assurez-vous que cet ID existe dans votre table `shows`
                'review' => 'Le concept était intéressant, mais l\'exécution a laissé à désirer',
                'stars' => 3,
                'validated' => 1, // 1 pour vrai, 0 pour faux
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Ajoutez plus d'avis ici selon le même modèle
        ];
        foreach ($reviews as &$data) {
            //Search the artist for a given artist's firstname and lastname
            $user = User::where([
                ['firstname','=',$data['user_firstname'] ],
                ['lastname','=',$data['user_lastname'] ]
            ])->first();

            //Search the show for a given show's slug
            $show = Show::firstWhere('slug',$data['show_slug']);
            unset($data['show_slug']);
            unset($data['user_firstname']);
            unset($data['user_lastname']);

            $data['user_id'] = $user->id;
            $data['show_id'] = $show->id;
        }

        unset($data);
        //Insert data in the table
        DB::table('reviews')->insert($reviews);
    }
}
