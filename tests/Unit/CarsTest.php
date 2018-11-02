<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertCar()
    {
        $car = new Car;
        $car->make = 'Ford';
        $car->model = 'Fusion';
        $car->year = 2014;
        $car->save();
//        dd($car);
        $this->assertTrue($car->forceDelete());
    }

    public function testUpdateCar()
    {
        $car = Car::inRandomOrder()->first();
        $car->year = 2000;
        $car->save();
        $this->assertEquals(2000, $car->year);
    }
//
//    public function testDeleteCar()
//    {
//        $car = Car::inRandomOrder()->first();
//        $this->assertTrue($car->forceDelete());
//    }
//
//    public function testCountCar()
//    {
//        $carCount = Car::count();
//        $this->assertEquals(50, $carCount);
//    }
}