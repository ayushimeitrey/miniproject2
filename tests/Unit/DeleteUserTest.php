<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeleteUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertUserTest()
    {   $user= User::find(20);
       $this->assertTrue($user->delete());
    }
}
