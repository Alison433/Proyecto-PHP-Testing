<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\ClienteController;
use App\Models\Cliente;
use Illuminate\Http\Request;

class DeleteClienteTest extends TestCase
{
    public function test_delete_cliente()
    {
        // Creamos un cliente ficticio en la base de datos
        $cliente = Cliente::create([
            'nombrec' => 'Juan',
            'apellidoc' => 'Perez',
            'edadc' => 30,
            'correo_electronicoc' => 'juan@example.com',
            'telefonoc' => '1234567890',
            'fecha_nacimientoc' => '1992-05-10'
        ]);

        // Creamos una instancia del controlador
        $controller = new ClienteController();

        // Creamos una solicitud de eliminación para el cliente creado
        $request = new Request();

        // Ejecutamos el método destroy para eliminar el cliente
        $response = $controller->destroy($cliente->id);

        // Verificamos si se redirige a la página de índice de clientes
        $this->assertEquals(route('clientes.index'), $response->getTargetUrl());

        // Verificamos si el cliente ya no existe en la base de datos
        $this->assertDatabaseMissing('clientes', [
            'id' => $cliente->id,
        ]);
    }
}
