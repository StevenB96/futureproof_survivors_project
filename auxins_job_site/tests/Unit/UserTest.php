<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->call('POST', '/user/create', ['forename' => 'Steven', 'surname' => 'Berrisford', 'email' => 'stevenberrisford@gmail.com', 'password' => 'Qwerty12', 'password_confirm' => 'Qwerty12']);

        $this->assertEquals(200, $response->status());
    }
}
