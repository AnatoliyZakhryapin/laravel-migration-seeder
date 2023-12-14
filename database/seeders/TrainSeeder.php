<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++){
            $new_train = new Train();
            $new_train->azienda = $faker->company();
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->orario_di_partenza = $faker->dateTimeThisMonth();
            $new_train->orario_di_arrivo = $faker->dateTimeBetween($new_train->orario_di_partenza, '+1 days');
            $new_train->binario_arrivo = $faker->optional()->numberBetween(1, 20);
            $new_train->binario_partenza = $faker->optional()->numberBetween(1, 20);
            $new_train->codice_treno = $faker->randomNumber(4, true);
            $new_train->numero_carrozze = $faker->numberBetween(1, 15);
            $new_train->in_orario = $faker->randomElement([false,true]);
            $new_train->cancellato = $faker->randomElement([false,true]);
            $new_train->ha_fermate = $faker->numberBetween(1, 15);
            $new_train->ha_wifi = $faker->randomElement([false,true]);
            $new_train->ha_bar = $faker->randomElement([false,true]);

            $new_train->save();
        }
    }
}
