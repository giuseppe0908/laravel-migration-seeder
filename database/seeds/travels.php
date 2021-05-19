<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Travel;

class travels extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(faker $faker)
    {
      // $travel = new Travel();
      // $travel->location = 'Londra';
      // $travel->day = '2021-05-04';
      // $travel->price = '1090.00';
      // $travel->name_hotel = 'Salazar';
      // $travel->updated_at ='2021-05-01';
      // $travel->created_at ='2021-05-31';
      // $travel->save();
      for ($i=0; $i < 10 ; $i++) {
        $travel = new Travel();
        $travel->location = $faker->country();
        $travel->day = $faker->date();
        $travel->name_hotel = $faker->country();
        $travel->price = $faker->randomFloat(2,100,5000);
        $travel->name_hotel = $faker->state();
        // $travel->update_at= $faker->dateTime($max = 'now', $timezone = null);
        // $travel->created_at= $faker->dateTime($max = 'now', $timezone = null);
        $travel->save();
      }
    }
}
