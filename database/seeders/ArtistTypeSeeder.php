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
        ArtistType::truncate();
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
