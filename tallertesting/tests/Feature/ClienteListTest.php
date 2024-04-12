<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClienteListTest extends TestCase
{
    /**
     * Test para verificar que la página que lista los clientes se carga correctamente.
     *
     * @return void
     */
    public function test_cliente_list_page_loads_successfully()
    {
        // Simula la solicitud GET a la ruta que lista los clientes
        $response = $this->get(route('clientes.index'));

        // Verifica que la respuesta tenga un código de estado 200 (OK)
        $response->assertStatus(200);

        // Verifica que la respuesta contenga los elementos esperados en la vista
        $response->assertSee('Clientes');
        $response->assertSee('Crear Cliente');
        $response->assertSee('ID');
        $response->assertSee('Nombre');
        $response->assertSee('Apellido');
        $response->assertSee('Edad');
        $response->assertSee('Correo Electrónico');
        $response->assertSee('Teléfono');
        $response->assertSee('Fecha Nacimiento');
    }
}

