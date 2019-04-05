<?php

namespace Tests\Unit;

use App\User;
use App\Car;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeleteCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteCarTest()
    {   $car= Car::find(48);
        $this->assertTrue($car->delete());
    }
}
