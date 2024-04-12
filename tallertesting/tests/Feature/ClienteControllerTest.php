<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClienteControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_store_cliente()
    {
        // Simular una solicitud HTTP POST a la ruta de almacenamiento de clientes
        $response = $this->post(route('clientes.store'), [
            'nombrec' => 'John',
            'apellidoc' => 'Doe',
            'edadc' => 30,
            'correo_electronicoc' => 'john@example.com',
            'telefonoc' => '1234567890',
            'fecha_nacimientoc' => '1990-01-01',
        ]);

        // Asegurarse de que la respuesta tiene un código de redirección exitoso (302)
        $response->assertRedirect();

        // Asegurarse de que el cliente fue creado en la base de datos
        $this->assertDatabaseHas('clientes', [
            'nombrec' => 'John',
            'apellidoc' => 'Doe',
            'edadc' => 30,
            'correo_electronicoc' => 'john@example.com',
            'telefonoc' => '1234567890',
            'fecha_nacimientoc' => '1990-01-01',
        ]);
    }
}


