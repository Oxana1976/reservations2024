<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Reservation;
use Carbon\Carbon;


class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         // //Empty the table first
         DB::statement('SET FOREIGN_KEY_CHECKS=0');
         Reservation::truncate();
         DB::statement('SET FOREIGN_KEY_CHECKS=1');

         $userIds = DB::table('users')->pluck('id')->toArray();

        $statuses = ['Payée', 'Annulée', 'Failed', 'En attente'];
        $reservations = [];

        foreach ($userIds as $userId) {
            foreach ($statuses as $status) {
                $reservations[] = [
                    'user_id' => $userId,
                    'booking_date' => Carbon::now()->addDays(rand(-30, 30))->format('Y-m-d H:i:s'),
                    'status' => $status,
                    
                ];
            }
        }

        //Insert data in the table
        DB::table('reservations')->insert($reservations);
   

  
    }
}
