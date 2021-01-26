<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Table\User;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        parent::setUp();
        $user = new User();
        //$response = $this->get('/');
        $response = $user->selectUser();
        $this->assertSame('tanaka', $response['email']);

        //$response->assertStatus(200);
    }
}
