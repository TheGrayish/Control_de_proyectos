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
        
        return view('Main_index');
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Main $main)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Main $main)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Main $main)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Main $main)
    {
        //
    }
}
