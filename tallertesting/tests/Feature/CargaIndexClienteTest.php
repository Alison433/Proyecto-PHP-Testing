<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CargaIndexClienteTest extends TestCase
{
    /**
     * Test para verificar que la página de clientes se carga correctamente.
     *
     * @return void
     */
    public function test_clientes_index_loads_successfully()
    {
        // Simula la solicitud GET a la ruta clientes.index
        $response = $this->get(route('clientes.index'));

        // Verifica que la respuesta tenga un código de estado 200 (OK) y contenga el texto "Clientes"
        $response->assertStatus(302)
                 ->assertSee('Clientes');
    }
}
