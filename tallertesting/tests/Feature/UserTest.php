<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;

class UserTest extends TestCase
{
public function test_register(){
    artisan::call('migrate');

    //El formulario carga correctamente
    $carga = $this->get(route('register'));
    $carga->assertStatus(200)->assertSee('Registrarse');

}
}
