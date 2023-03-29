<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AsignarPermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $estadistica = Permission::create(['name' => 'estadisticas']);
        $productos_vendidos = Permission::create(['name' => 'productos_vendidos']);
        $membresias_vendidas = Permission::create(['name' => 'membresias_vendidas']);
        $mayores_ventas = Permission::create(['name' => 'mayores_ventas']);

        $estadistica->syncPermissions([
            $productos_vendidos,
            $membresias_vendidas,
            $mayores_ventas,
        ]);

        $membresias = Permission::create(['name' => 'membresias']);
        $ver = Permission::create(['name' => 'ver_membresias']);
        $tipo = Permission::create(['name' => 'tipo_membresias']);
        $membresias->syncPermissions([
            $ver,
            $tipo,

        ]);

        $productos = Permission::create(['name' => 'productos']);
        $ver_productos = Permission::create(['name' => 'ver_productos']);
        $categorias = Permission::create(['name' => 'categorias']);
        $unidades = Permission::create(['name' => 'unidades']);
        $proveedores = Permission::create(['name' => 'proveedores']);
        $productos->syncPermissions([
            $ver_productos,
            $categorias,
            $unidades,
            $proveedores,

        ]);

        $bitacoras = Permission::create(['name' => 'bitacoras']);
        $acceso = Permission::create(['name' => 'bitacoras_acceso']);
        $cancelacion = Permission::create(['name' => 'bitacoras_cancelacion']);
        $ventas = Permission::create(['name' => 'bitacoras_ventas']);

        $bitacoras->syncPermissions([
            $acceso,
            $cancelacion,
            $ventas,

        ]);
    }
}
