<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /** @test */
    function show_list()
    {
        $this->get('/usuarios')
             ->assertStatus(200)
             ->assertSee('Listado de usuarios')
             ->assertSee('Max');
    }

    /** @test */
    function show_list_empty()
    {
      $this->get('/usuarios?empty')
           ->assertStatus(200)
           ->assertSee('No hay usuarios registrados.');
    }

    /** @test */
    function load_page_detail()
    {
        $this->get('/usuarios/5')
             ->assertStatus(200)
             ->assertSee("Mostrando detalle del usuario: 5");
    }

    /** @test */
    function loads_page_new()
    {
       //withoutExceptionHandling Permite ver .log en consola
        $this->withoutExceptionHandling();
        $this->get('/usuarios/nuevo')
             ->assertStatus(200)
             ->assertSee("Creando usuario");
    }
}
