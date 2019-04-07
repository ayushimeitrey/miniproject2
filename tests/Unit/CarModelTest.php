<?php

namespace Tests\Unit;

use App\User;
use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarModelTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarModelTest()
    {
        $car= Car::inrandomorder()->first();
        $model=$car->Model;
        $this->assertIsString($model);
    }
}
