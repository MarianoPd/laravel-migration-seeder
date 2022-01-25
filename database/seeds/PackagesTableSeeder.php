<?php


use Faker\Generator as Faker;
use App\Package;
use Illuminate\Database\Seeder;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i< 100; $i++){
            $new_package = new Package();
            $new_package->name = $faker->text(20);
            $new_package->destination = $faker->country;
            $new_package->departure_from = $faker->country;
            $new_package->description = $faker->text(50);
            $new_package->start_date = $faker->date();
            $new_package->end_date = $faker->date();
            $new_package->full_price = $faker->numberBetween(500, 32000);
            $new_package->minors_price = $faker->numberBetween(500, 32000);
            $new_package->save();
        }
    }
}
