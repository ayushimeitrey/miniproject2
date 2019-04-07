<?php

namespace Tests\Unit;

use App\User;
use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarYearTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarYearTest()
    {
        $car= Car::inrandomorder()->first();
        $year=$car->Year;
        $this->assertTrue(is_numeric($year));
    }
}
