<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ListarEmpleadosTest extends TestCase
{
    /**
     * Test para verificar que la página que lista los empleados se carga correctamente.
     *
     * @return void
     */
    public function test_empleado_list_page_loads_successfully()
    {
        // Simula la solicitud GET a la ruta que lista los empleados
        $response = $this->get(route('empleados.index'));

        // Verifica que la respuesta tenga un código de estado 200 (OK) y contenga el texto "Empleados"
        $response->assertStatus(200)
                 ->assertSee('Empleados');
    }
}
