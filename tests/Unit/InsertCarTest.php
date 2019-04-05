<?php

namespace Tests\Unit;

use App\User;
use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InsertCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertCarTest()
    {
        $car= new Car();
        $car->Make='Hyundi';
        $car->Model='I30';
        $car->Year='2000';
        $car->user_id=21;
        $this->assertTrue($car->save());


    }
}
