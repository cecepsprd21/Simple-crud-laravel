<?php

use Illuminate\Database\Seeder;

class TableBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        \DB::table('books')->truncate();

        for ($i=0; $i < 5;$i++) {
            DB::table('books')->insert([
                'title' => $faker-> sentence(1),
                'price' => $faker-> numberBetween(1, 40),
                'page' => $faker-> numberBetween(100,300),
                'description' => $faker->text(20)
            ]);
        }
    }
}
