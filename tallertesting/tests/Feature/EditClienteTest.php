<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Cliente;

class EditClienteTest extends TestCase
{
    use RefreshDatabase;

    public function test_edit_cliente()
    {
        // Crear un cliente en la base de datos para probar la edición
        $cliente = Cliente::create([
            'nombrec' => 'John',
            'apellidoc' => 'Doe',
            'edadc' => 30,
            'correo_electronicoc' => 'john@example.com',
            'telefonoc' => '1234567890',
            'fecha_nacimientoc' => '1990-01-01',
        ]);

        // Simular una solicitud HTTP GET a la ruta de edición del cliente
        $response = $this->get(route('clientes.edit', $cliente->id));

        // Asegurarse de que la respuesta tenga un código de éxito (200)
        $response->assertStatus(200);

        // Asegurarse de que la vista de edición contenga los datos del cliente
        $response->assertSee($cliente->nombrec)
                 ->assertSee($cliente->apellidoc)
                 ->assertSee((string) $cliente->edadc)
                 ->assertSee($cliente->correo_electronicoc)
                 ->assertSee($cliente->telefonoc)
                 ->assertSee($cliente->fecha_nacimientoc);
    }
}
