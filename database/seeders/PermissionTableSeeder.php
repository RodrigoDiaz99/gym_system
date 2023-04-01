<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //estas son rutas
        Permission::create(['name' => 'venta', 'categoria' => 'vender', 'numero_categoria' => 1, 'sub_name' => 'Venta']);
        Permission::create(['name' => 'corte_caja', 'categoria' => 'corte_caja', 'numero_categoria' => 2, 'sub_name' => 'Corte de Caja']);

        Permission::create(['name' => 'productos_vendidos', 'categoria' => 'estadisticas', 'numero_categoria' => 3, 'sub_name' => 'Productos Vendidos']);
        Permission::create(['name' => 'membresias_vendidas', 'categoria' => 'estadisticas', 'numero_categoria' => 3, 'sub_name' => 'Membresias Vendidas']);
        Permission::create(['name' => 'mayores_ventas', 'categoria' => 'estadisticas', 'numero_categoria' => 3, 'sub_name' => 'Mayores Ventas']);

        Permission::create(['name' => 'ver_membresias', 'categoria' => 'membresias', 'numero_categoria' => 4, 'sub_name' => 'Ver Membresias']);
        Permission::create(['name' => 'tipo_membresias', 'categoria' => 'membresias', 'numero_categoria' => 4, 'sub_name' => 'Tipo Membresias']);

        Permission::create(['name' => 'inventario', 'categoria' => 'Inventario', 'numero_categoria' => 5, 'sub_name' => 'Inventario']);

        Permission::create(['name' => 'ver_productos', 'categoria' => 'productos', 'numero_categoria' => 6, 'sub_name' => 'Productos']);
        Permission::create(['name' => 'categorias', 'categoria' => 'productos', 'numero_categoria' => 6, 'sub_name' => 'Categorias']);
        Permission::create(['name' => 'unidades', 'categoria' => 'productos', 'numero_categoria' => 6, 'sub_name' => 'Unidades']);
        Permission::create(['name' => 'proveedores', 'categoria' => 'productos', 'numero_categoria' => 6, 'sub_name' => 'Proveedores']);

        Permission::create(['name' => 'clientes', 'categoria' => 'clientes', 'numero_categoria' => 7, 'sub_name' => 'Clientes']);
        Permission::create(['name' => 'colaboradores', 'categoria' => 'colaboradores', 'numero_categoria' => '8', 'sub_name' => 'Colaboradores']);
        Permission::create(['name' => 'expedientes', 'categoria' => 'expediente', 'numero_categoria' => 9, 'sub_name' => 'Expedientes']);
        Permission::create(['name' => 'bitacoras_acceso', 'categoria' => 'bitacora', 'numero_categoria' => '10', 'sub_name' => 'Bitacora Accesos']);
        Permission::create(['name' => 'bitacoras_cancelacion', 'categoria' => 'bitacora', 'numero_categoria' => '10', 'sub_name' => 'Bitacora Cancelaciones']);
        Permission::create(['name' => 'bitacoras_ventas', 'categoria' => 'bitacora', 'numero_categoria' => '10', 'sub_name' => 'Bitacora Ventas']);
        Permission::create(['name' => 'crear', 'categoria' => 'generales', 'numero_categoria' => '11', 'sub_name' => 'Crear Registros']);
        Permission::create(['name' => 'eliminar', 'categoria' => 'generales', 'numero_categoria' => 11, 'sub_name' => 'Eliminar Registros']);
        Permission::create(['name' => 'editar', 'categoria' => 'generales', 'numero_categoria' => 11, 'sub_name' => 'Editar Registros']);
        Permission::create(['name' => 'restaurar', 'categoria' => 'generales', 'numero_categoria' => 11, 'sub_name' => 'Restaurar Registros']);


    }
}
