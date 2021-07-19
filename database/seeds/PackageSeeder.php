<?php

use App\Package;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {

            $package = new Package();
            $package->name = $faker->company();
            $package->city = $faker->city();
            $package->address = $faker->address();
            $package->post_code = $faker->postcode();
            $package->type = $faker->randomElement([
                'Hotel *****',
                'Hotel ****',
                'Hotel ***',
                'Hotel **',
                'Hotel *',
                'B&B',
                'Apartment',
                'Three-room apartment',
                'Two-room apartment',
                'Studio flat',
                'Villa',
                'Bungalow'
            ]);
            $package->image_url = $faker->imageUrl(
                640,
                480,
                'Package',
                true,
                $package->address,
                true
            );
            $package->description = $faker->text(400);
            $package->price = $faker->randomFloat(2, 699, 5000);
            $package->treatment = $faker->randomElement([
                'Solo Pernottamento',
                'Formula Tutto Incluso',
                'Pernott./1A Colazione',
                'Mezza Pensione',
                'HB + Bev.'
            ]);
            $package->duration = $faker->randomElement([
                '7 notti',
                '14 notti',
                '21 notti'
            ]);
            $package->save();
        }
    }
}
