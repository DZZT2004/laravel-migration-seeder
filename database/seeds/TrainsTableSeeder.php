<?php

use Faker\Generator as Faker;
use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 250; $i++) { 
            $train = new Train();
            $train->azienda = $faker->randomElement(['FrecciaRossa', 'Italo', 'Regionale']);
            $train->stazione_di_partenza = $faker->word();
            $train->stazione_di_arrivo = $faker->word();
            $train->orario_di_partenza = $faker->time('H:i:s');
            $train->orario_di_arrivo = $faker->time('H:i:s');
            $train->codice_Treno = rand(43125,2151561);
            $train->numero_Carrozze = rand(8,20);
            $train->in_orario = true;
            $train->cancellato = false;
            $train->data_partenza = date('Y-m-d');
            $train->save();
        }
    }
}
