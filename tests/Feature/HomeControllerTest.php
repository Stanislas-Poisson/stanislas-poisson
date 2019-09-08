<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    public function testHomeDisplayable()
    {
        $response = $this->get(route('home.index'));
        $response->assertStatus(200);
    }

    public function testContact()
    {
        $response = $this->post(
            route('home.store'),
            [
                'name'  => 'nom de test',
                'email' => 'test@gmail.com',
                'msg'   => 'message de test',
            ]
        );
        $response->assertStatus(302);
    }
}
