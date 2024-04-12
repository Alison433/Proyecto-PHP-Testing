<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
        //return view('clientes.index')->with('clientes',$empleados);
        //return view('clientes.index'), ['clientes'=>$empleados];
    }
    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombrec' => 'required|string|min:5|max:100',
            'apellidoc' => 'required|string|min:5|max:100',
            'edadc' => 'required|integer|min:1|max:999', 
            'correo_electronicoc' => 'required|string|min:5|max:100',
            'telefonoc' => 'required|string|min:10|max:10', 
            'fecha_nacimientoc' => 'required|date|min:10|max:10', 
        ]);
    
        Cliente::create($request->all());
    
        return redirect()->route('clientes.index');
    }

    public function edit($id)
{
    $clientes = Cliente::findOrFail($id);
    return view('clientes.edit', compact('clientes'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nombrec' => 'required|string|min:5|max:100',
        'apellidoc' => 'required|string|min:5|max:100',
        'edadc' => 'required|integer|min:1|max:999', 
        'correo_electronicoc' => 'required|string|min:5|max:100',
        'telefonoc' => 'required|string|min:10|max:10', 
        'fecha_nacimientoc' => 'required|date|min:10|max:10', 
    ]);

    $clientes = Cliente::findOrFail($id);
    $clientes->update($request->all());

    return redirect()->route('clientes.index');
}

public function destroy($id)
{
    $clientes = Cliente::findOrFail($id);
    $clientes->delete();
    return redirect()->route('clientes.index');
}

}
