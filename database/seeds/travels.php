<?php

use Illuminate\Database\Seeder;
use App\Travel;

class travels extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $travel = new Travel();
      $travel->location = 'Londra';
      $travel->day = '2021-05-04';
      $travel->name-hotel = 'Salazar';
      $travel->save();
    }
}
