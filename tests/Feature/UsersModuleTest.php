<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /** @test */
    function loads_user_list_page()
    {
        $this->get('/usuarios')
             ->assertStatus(200)
             ->assertSee('Usuarios');
    }

    /** @test */
    function loads_user_details_page()
    {
        $this->get('/usuarios/5')
             ->assertStatus(200)
             ->assertSee("Mostrando detalle del usuario: 5");
    }

    /** @test */
    function loads_new_user_users_page()
    {
       //withoutExceptionHandling Permite ver .log en consola
        $this->withoutExceptionHandling();
        $this->get('/usuarios/nuevo')
             ->assertStatus(200)
             ->assertSee("Creando usuario");
    }
}
