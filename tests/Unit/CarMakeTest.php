<?php

namespace Tests\Unit;

use App\User;
use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarMakeTest()
    {
        $car= Car::inrandomorder()->first();
        $make=$car->Make;
        $this->assertContains($make , ['ford','honda','toyota']);
    }
}
