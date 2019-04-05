<?php

namespace Tests\Unit;

use App\User;
use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CountCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCountCarTest()
    {
        $car= Car::all();
        $this->assertCount(50,$car);
    }
}
