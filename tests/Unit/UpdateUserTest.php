<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateUserTest()
    {
        $user= User::find(1);
        $user->name='Steve Smith';
        $this->assertTrue($user->save());

    }
}
