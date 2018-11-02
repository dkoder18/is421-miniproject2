<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRegisterTest()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }
    public function testLoginTest()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
    public function testAboutTest()
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
    }
    public function testContactTest()
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
    }
}
