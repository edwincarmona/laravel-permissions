<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'users_manage']);

        Permission::create(['guard_name' => 'productos', 'name' => 'lector']);
        Permission::create(['guard_name' => 'productos', 'name' => 'autor']);
        Permission::create(['guard_name' => 'productos', 'name' => 'editor']);
        Permission::create(['guard_name' => 'productos', 'name' => 'gestor']);

        Permission::create(['guard_name' => 'clientes', 'name' => 'lector']);
        Permission::create(['guard_name' => 'clientes', 'name' => 'autor']);
        Permission::create(['guard_name' => 'clientes', 'name' => 'editor']);
        Permission::create(['guard_name' => 'clientes', 'name' => 'gestor']);
        Permission::create(['guard_name' => 'clientes', 'name' => 'credito']);

        Permission::create(['guard_name' => 'usuarios', 'name' => 'lector']);
        Permission::create(['guard_name' => 'usuarios', 'name' => 'autor']);
        Permission::create(['guard_name' => 'usuarios', 'name' => 'editor']);
        Permission::create(['guard_name' => 'usuarios', 'name' => 'gestor']);
    }
}
