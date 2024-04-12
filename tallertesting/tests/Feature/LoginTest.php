<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * Test para verificar que la página de inicio de sesión se carga correctamente.
     *
     * @return void
     */
    public function test_login_page_loads_successfully()
    {
        // Simula la solicitud GET a la ruta de inicio de sesión
        $response = $this->get(route('login'));

        // Verifica que la respuesta tenga un código de estado 200 (OK) y contenga el texto "Login"
        $response->assertStatus(200)
                 ->assertSee('Login');
    }
}
