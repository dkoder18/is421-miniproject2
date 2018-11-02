<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//        DB::table('cars')->insert([
//            'make' => str_random(10),
//            'model' => str_random(10),
//            'year' => str_random(4),
//        ]);
        factory(App\Car::class, 50)->create()->each(function ($u) {
//            $u->posts()->save(factory(App\Post::class)->make());
        });
    }
}
