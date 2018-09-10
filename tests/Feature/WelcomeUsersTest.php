<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
  /** @test */
  function welcome_users_with_nickname()
  {
      $this->get('/saludo/Paola/Pao')
           ->assertStatus(200)
           ->assertSee('Bienvenido(a) Paola, tu apodo es Pao');
  }

  /** @test */
  function welcome_users_without_nickname()
  {
    $this->get('/saludo/Paola')
         ->assertStatus(200)
         ->assertSee('Bienvenido(a) Paola');
  }
}
