<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ArtistType;
use App\Models\Artist;
use App\Models\Type;
class ArtistTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        ArtistType::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        $dataset = [
            ['firstname'=>'Daniel',
            'lastname'=>'Marcelin',
            'type'=>'auteur',
            ],
            ['firstname'=>'Daniel',
            'lastname'=>'Marcelin',
            'type'=>'scénographe',
            ],
            ['firstname'=>'Daniel',
            'lastname'=>'Marcelin',
            'type'=>'comédien',
            ],
            ['firstname'=>'Philippe',
            'lastname'=>'Laurent',
            'type'=>'comédien',
            ],

            [
            'firstname'=>'Philippe',
            'lastname'=>'Laurent',
            'type'=>'scénographe',
            ],

            [
            'firstname'=>'Marius',
            'lastname'=>'Von Mayenburg',
            'type'=>'auteur',
            ],
            [
            'firstname'=>'Olivier',
            'lastname'=>'Boudon',
            'type'=>'scénographe',
            ],
            [
            'firstname'=>'Anne Marie',
            'lastname'=>'Loop',
            'type'=>'comédien',
            ],
            [
            'firstname'=>'Pietro',
            'lastname'=>'Varasso',
            'type'=>'comédien',
            ],
            [
            'firstname'=>'Laurent',
            'lastname'=>'Caron',
            'type'=>'comédien',
            ],
            [
            'firstname'=>'Élena',
            'lastname'=>'Perez',
            'type'=>'comédien',
            ],
            [
            'firstname'=>'Guillaume',
            'lastname'=>'Alexandre',
            'type'=>'comédien',
            ],
            [
            'firstname'=>'Claude',
            'lastname'=>'Semal',
            'type'=>'auteur',
            ],
            [
            'firstname'=>'Laurence',
            'lastname'=>'Warin',
            'type'=>'scénographe',
            ],
            [
            'firstname'=>'Claude',
            'lastname'=>'Semal',
            'type'=>'comédien',
            ],
          
            
           
            
           
            
        ];
        foreach ($dataset as &$record) {
        $artist = Artist::where([
            ['firstname','=',$record['firstname']],
            ['lastname','=',$record['lastname']],
        ])->first();

        $type = Type::where(
            'type','=',$record['type'],
        )->first();
        $record['artist_id'] = $artist->id;
        $record['type_id'] = $type->id;
        unset($record['firstname']);
        unset($record['lastname']);
        unset($record['type']);
        }
        //Insert data in the table
        DB::table('artist_type')->insert($dataset);
    }
}
