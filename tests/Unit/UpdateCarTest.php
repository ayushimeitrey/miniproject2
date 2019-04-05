<?php

namespace Tests\Unit;

use App\User;
use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateCarTest()
    {
        $car= Car::find(50);
        $car->Year='2000';
        $this->assertTrue($car->save());

    }
}
