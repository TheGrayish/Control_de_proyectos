<?php

namespace App\Http\Controllers;

use App\Models\Main;
use Illuminate\Http\Request;

use App\Models\User;
use Spatie\Permission\Models\Role;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $archivos = Main::all();

        // Verifica si el rol 'admin' ya existe para el guard 'web'
        if (!Role::where('name', 'admin')->where('guard_name', 'web')->exists()) {
            // Si el rol no existe, créalo
            $role_admin = Role::create(['name' => 'admin', 'guard_name' => 'web']);
        }

        // Verifica si el rol 'cliente' ya existe para el guard 'web'
        if (!Role::where('name', 'cliente')->where('guard_name', 'web')->exists()) {
            // Si el rol no existe, créalo
            $role_cliente = Role::create(['name' => 'cliente', 'guard_name' => 'web']);
        }

        // Encuentra al usuario por su ID (puedes ajustar esto según tu lógica)
        $user_kevin = User::find(1);

        // Asigna el rol 'cliente' al usuario
        $user_kevin->assignRole('admin');
        
        return view('Main_index', ['archivos' => $archivos]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Create_Main');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'archivo' => 'required|file',
            'horario' => 'required|string',
            'materia' => 'required|string',
            'profesor' => 'required|string',
            'descripcion' => 'required|string',
        ]);

        // Obtener la imagen del formulario
        $imagen = $request->file('archivo');
        $nombreImagen = time() . '_' . $imagen->getClientOriginalName();

        // Guardar la imagen en la carpeta "storage/app/public/images"
        $imagen->storeAs('public/images', $nombreImagen);

   

        // Crea una nueva instancia de Main con los datos del formulario
        $main = new Main([
            'nombre' => $request->nombre,
            'archivo' => $nombreImagen,
            'horario' => $request->horario,
            'materia' => $request->materia,
            'profesor' => $request->profesor,
            'descripcion' => $request->descripcion,
        ]);

        // Guarda el objeto Main en la base de datos
        $main->save();

        return redirect()->route('main.index')->with('success', 'Archivo creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Main $main)
    {
        return view('Show_Main',['main' => $main]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Main $main)
    {
        return view('Edit_Main',['main' => $main]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Main $main)
    {
        $request->validate([
            'archivo' => 'required|string',
            'horario' => 'required|string',
            'materia' => 'required|string',
            'profesor' => 'required|string',
            'descripcion' => 'required|string',
        ]);

        $main->update($request->all());
        return redirect()->route('main.index')->with('success', 'Archivo actualizado correctamente.');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Main $main)
    {
        $main->delete();
        return redirect()->route('main.index')->with('success', 'Archivo eliminado correctamente.');
   
    }

}
