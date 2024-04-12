<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;

class EmpleadoRouteCreateTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_empleados_create_route()
    {
        // Realiza una solicitud GET a la ruta empleados/create
        $response = $this->get(route('empleados.create'));

        // Verifica que la respuesta tenga el código 200 (OK)
        $response->assertStatus(200);

        // Verifica que la vista retorne la cadena "Crear Empleado"
        $response->assertSeeText('Crear Empleado');
    }
}
