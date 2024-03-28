<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::create(['name' => 'admin']);
        $role_cliente = Role::create(['name' => 'cliente']);

        Permission::create(['name' => 'ver:role']);
        Permission::create(['name' => 'crear:role']);
        Permission::create(['name' => 'editar:role']);
        Permission::create(['name' => 'eliminar:role']);

        Permission::create(['name' => 'ver:permiso']);


        Permission::create(['name' => 'ver:usuario']);
        Permission::create(['name' => 'crear:usuario']);
        Permission::create(['name' => 'editar:usuario']);
        Permission::create(['name' => 'eliminar:usuario']);

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    $user->assignRole($role_admin);

        $user = User::create([
            'name' => 'Invitado',
            'email' => 'cliente@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $user->assignRole($role_cliente);
    }
}