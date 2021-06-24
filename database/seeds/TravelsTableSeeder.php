<?php

use App\Travel;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_travel = new Travel();
        $new_travel->destination = "Londra";
        $new_travel->accomodation = "Hotel";
        $new_travel->people = "2";
        $new_travel->rooms = "1";
        $new_travel->price = "1400";
        $new_travel->save();
    }
}
