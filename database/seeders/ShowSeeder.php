<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Location;
use App\Models\Show;

class ShowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //Empty the table first
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Show::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

                //Define data
                $shows = [
                    [
                        'slug'=>null,
                        'title'=>'Ayiti',
                        'description'=>'Un homme est bloqué à l\'aéroport'
                            . 'Questionné par les douaniers, il doit alors justifier son identité, '
                            . 'et surtout prouver qu\'il est haïtien  qu\'est-ce qu\'être haïtien ?',
                        'poster_url'=>'ayiti.jpg',
                        'location_slug'=>'espace-delvaux-la-venerie',
                        'bookable'=>true,
                        'price'=>8.50,
                    ],
                   [
                        'slug'=>null,
                        'title'=>'Cible mouvante',
                        'description'=>'Dans ce « thriller d\'anticipation », des adultes semblent alimenter '
                            . 'et véhiculer une crainte féroce envers les enfants âgés entre 10 et 12 ans.',
                        'poster_url'=>'cible.jpg',
                        'location_slug'=>'dexia-art-center',
                        'bookable'=>true,
                        'price'=>9.00,
                    ],
                    [
                        'slug'=>null,
                        'title'=>'Ceci n\'est pas un chanteur belge',
                        'description'=>"Non peut-être ?!\nEntre Magritte (pour le surréalisme comique) "
                            . 'et Maigret (pour le réalisme mélancolique), ce dixième opus semalien propose '
                            . 'quatorze nouvelles chansons mêlées à de petits textes humoristiques et '
                            . 'à quelques fortes images poétiques.',
                        'poster_url'=>'claudebelgesaison220.jpg',
                        'location_slug'=>null,
                        'bookable'=>false,
                        'price'=>5.50,
                    ],
                    [
                        'slug'=>null,
                        'title'=>'Manneke…!',
                        'description'=>'A tour de rôle, Pierre se joue de ses oncles, '
                            . 'tantes, grands-parents et surtout de sa mère.',
                        'poster_url'=>'wayburn.jpg',
                        'location_slug'=>'la-samaritaine',
                        'bookable'=>true,
                        'price'=>10.50,
                    ],

                    [
                        'slug'=>null,
                        'title'=>'Lost Words',
                        'description'=>'As the name suggests, "Lostwords" is a place to share and listen to lost words '
                            . 'that are never shared or heard. Sharing can be in the form of slam, poetry,'
                            .'recitation, music, etc.',
                        'poster_url'=>'lostwords.jpg',
                        'location_slug'=>'arenberg',
                        'bookable'=>true,
                        'price'=>20.50,
                    ],
                    [
                        'slug'=>null,
                        'title'=>'Voice Noise',
                        'description'=>'VOICE NOISE donne l\'impression de faire partie d\'un événement beaucoup plus vaste, dans lequel '
                            . 'danseur·ses et voix vont et viennent, dans un déploiement sans fin de trésors musicaux cachés ou'
                            .'oubliés : plus de cent ans de voix de femmes de l\'histoire de la musique qui chantent, fredonnent,',
                        'poster_url'=>'voisenoise.jpg',
                        'location_slug'=>'de-singel',
                        'bookable'=>true,
                        'price'=>15.50,
                    ],

                    [
                        'slug'=>null,
                        'title'=>'Ombra',
                        'description'=>'Alain Platel brings together choir members, dancers '
                            . 'and orchestral musicians for a new performance that'
                            .'puts encounters at centre stage..',
                        'poster_url'=>'ombra.jpg',
                        'location_slug'=>'opera-de-flandre-Gand',
                        'bookable'=>true,
                        'price'=>32.50,
                    ],
                    [
                        'slug'=>null,
                        'title'=>'Récréation',
                        'description'=>'Le temps d\'un week-end, le Delta met en lumière les pratiques artistiques spontanées et '
                            . 'amateurs issues du territoire, et invite le public à s\'initier en toute décontraction à une'
                            .'multitude de disciplines artistiques et créatives.',
                        'poster_url'=>'recreation.jpg',
                        'location_slug'=>'le-delta',
                        'bookable'=>true,
                        'price'=>30.00,
                    ],

                    [
                        'slug'=>null,
                        'title'=>'EXPOSITION DE L\'ORDRE BIZARRE',
                        'description'=>'L\'Ordre Bizarre, c\'est un binôme de dessinateurs presque siamois, né sur les bases solides d\'une amitié de '
                            . 'vingt ans bâtie autour de l\'amour du skate, du punk et de la bamboche.',
                            
                        'poster_url'=>'ordrebizarre.jpg',
                        'location_slug'=>'kulturfabrik',
                        'bookable'=>true,
                        'price'=>18.00,
                    ],

                    [
                        'slug'=>null,
                        'title'=>'METEOR AIRLINES',
                        'description'=>'Meteor Airlines est un groupe de rock Amazigh Marocain originaire de la région de Tinghir, dans le sud-est '
                            . 'du Maroc. Leur musique peut prendre plusieurs formes, allant de mélodies acoustiques calmes à des sons'
                            . 'plus lourds, et pourrait être catégorisée sous ce qu\'ils ont créé et appelé le Rock Amazigh..',
                           
                        'poster_url'=>'meteor.jpg',
                        'location_slug'=>'360-Paris-Music-Factory',
                        'bookable'=>true,
                        'price'=>45.00,
                    ],

                    [
                        'slug'=>null,
                        'title'=>'JokAir',
                        'description'=>'Le rappeur français Jok\'Air sera sur la scène de l\'Accor Arena le 18 février 2025. '
                            . 'Depuis le lancement de sa carrière en solo, Jok\'Air multiplie les projets à succès :'
                            . 'les certifications s\'accumulent, les salles se remplissent.',
                          
                        'poster_url'=>'jokair.jpg',
                        'location_slug'=>'accor-arena',
                        'price'=>45.00,
                    ],
                ];

                   //Prepare the data
                // foreach ($shows as &$data) {
                //     //Search the location for a given location's slug
                //     $location = Location::firstWhere('slug',$data['location_slug']);
                //     unset($data['location_slug']);

                //     $data['slug'] = Str::slug($data['title'],'-');
                //     $data['location_id'] = $location->id ?? null;
                // }
                // unset($data);

                // //Insert data in the table
                // DB::table('shows')->insert($shows);
                foreach ($shows as $data) {
                    $location = Location::firstWhere('slug', $data['location_slug']);
                    $data['location_id'] = $location->id ?? null;
                    unset($data['location_slug']);
                    $data['slug'] = Str::slug($data['title'], '-');
                
                    Show::create($data);
                }
    }
}
