<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UsersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertUser()
    {
//        $this->assertTrue(true);
        $user = new User;
        $user->name = 'Dhaval Khatri';
        $user->email = 'dhaval@njit.edu';
        $user->password = '1234';
        $user->save();
        $this->assertTrue($user->forceDelete());
    }

    public function testUpdateUser()
    {
        $user = User::inRandomOrder()->first();
        $user->name = "Steve Smith";
        $user->save();
        $this->assertEquals("Steve Smith", $user->name);
    }
}