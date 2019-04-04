<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InsertUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertUserTest()
    {
        $user= new User();

        $user->password='aaaaaaaa';
        $user->name='Ayushi';
        $user->email='test@gmail.com';

        $this->assertTrue($user->save());


    }
}
