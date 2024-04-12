<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
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
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados'));
        //return view('empleados.index')->with('empleados',$empleados);
        //return view('empleados.index'), ['empleados'=>$empleados];
    }
    public function create()
    {
        return view('empleados.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|min:5|max:100',
        'apellido' => 'required|string|min:5|max:100',
        'edad' => 'required|integer|min:1|max:999', 
        'correo_electronico' => 'required|string|min:5|max:100',
        'telefono' => 'required|string|min:10|max:10', 
    ]);

    Empleado::create($request->all());

    return redirect()->route('empleados.index');
}

public function edit($id)
{
    $empleado = Empleado::findOrFail($id);
    return view('empleados.edit', compact('empleado'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nombre' => 'required|string|min:5|max:100',
        'apellido' => 'required|string|min:5|max:100',
        'edad' => 'required|integer|min:1|max:999', 
        'correo_electronico' => 'required|string|min:5|max:100',
        'telefono' => 'required|string|min:10|max:10', 
    ]);

    $empleado = Empleado::findOrFail($id);
    $empleado->update($request->all());

    return redirect()->route('empleados.index');
}

public function destroy($id)
{
    $empleado = Empleado::findOrFail($id);
    $empleado->delete();
    return redirect()->route('empleados.index');
}

}
