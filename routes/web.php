<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('auth.login');
});
// Route::get('/acceso/usuarios', function () {
//     return view('auth.login');
// });

Auth::routes(['register' => false, 'login' => true, 'password/confirm' => false, 'password/reset' => false]);

/*
 * Home Routes
 */

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('perfil/actualizar', ['as' => 'perfil.edit', 'uses' => 'UserController@edit_user']);
    Route::patch('perfil/actualizar', ['as' => 'perfil.update', 'uses' => 'UserController@update_user']);

    // Route::middleware(['auth', 'permission:editar publicación'])->group(function () {
    //     // Tus rutas protegidas por permiso van aquí
    // });
    Route::group(['middleware' => ['permission:venta']], function () {
        Route::get('/punto/venta', [App\Http\Controllers\HomeController::class, 'index'])->name('sales.point');
        Route::get('/punto/venta/2', [App\Http\Controllers\HomeController::class, 'index2'])->name('sales.point2');
    });

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

    Route::controller('ProviderController')
        ->prefix('Proveedores')
        ->group(function () {
            Route::middleware(['permission:proveedores'])->get('lista', 'index')->name('provider.index');
            Route::middleware(['permission:crear'])->post('registro', 'store')->name('provider.store');
            Route::middleware(['permission:editar'])->put('modificar/{id}', 'update')->name('provider.update');
            Route::middleware(['permission:eliminar'])->delete('eliminar/{id}', 'destroy')->name('provider.destroy');
            Route::middleware(['permission:restaurar'])->get('restaurar/{id}', 'restore')->name('provider.restore');
        });

    Route::controller('UserController')
        ->prefix('Clientes')
        ->group(function () {
            Route::middleware(['permission:clientes'])->get('lista', 'index')->name('user.index');
            Route::middleware(['permission:crear'])->post('registro', 'store')->name('user.store');
            Route::middleware(['permission:editar'])->put('modificar/{id}', 'update')->name('user.update');
            Route::middleware(['permission:eliminar'])->delete('eliminar/{id}', 'destroy')->name('user.destroy');
            Route::middleware(['permission:restaurar'])->get('restaurar/{id}', 'restore')->name('user.restore');
        });

    Route::controller('EstadisticasController')

        ->prefix('Estadisticas')
        ->group(function () {
            Route::get('lista', 'index')->name('bestSellers.index');
            // Route::post('registro', 'store')->name('user.store');
            // Route::put('modificar/{id}', 'update')->name('user.update');
            // Route::delete('eliminar/{id}', 'destroy')->name('user.destroy');
        });

    Route::controller('RecordController')
        ->prefix('Expediente')
        ->group(function () {
            Route::middleware(['permission:expedientes'])->get('lista', 'index')->name('record.index');
            Route::middleware(['permission:crear'])->get('crear', 'create')->name('record.create');
            Route::middleware(['permission:crear'])->post('registro', 'store')->name('record.store');
            Route::middleware(['permission:editar'])->get('vista/modificar/{id}', 'edit')->name('record.edit');
            Route::middleware(['permission:editar'])->put('modificar/{id}', 'update')->name('record.update');
            Route::middleware(['permission:eliminar'])->delete('eliminar/{id}', 'destroy')->name('record.destroy');
        });
    /**Rutas AJAX */

    Route::middleware(['permission:tipo_membresias'])->resource('Membership-type', MembershipTypeController::class);
    Route::middleware(['permission:ver_membresias'])->resource('Membership', MembershipController::class);

    Route::middleware(['permission:ver_productos'])->resource('products', ProductController::class);
    Route::middleware(['permission:restaurar'])->get('product/restaurar/{id}', 'ProductController@restore')->name('product.restore');
    Route::middleware(['permission:unidades'])->resource('product-units', ProductUnitController::class);
    Route::middleware(['permission:categorias'])->resource('product-categories', ProductCategoryController::class);
    Route::middleware(['permission:restaurar'])->get('product-categories/restaurar/{id}', 'ProductCategoryController@restore')->name('product-categories.restore');

    Route::middleware(['permission:editar'])->put('inventory/updateStatus/{id}', 'InventoryController@updateStatus')->name('inventario.status');
    Route::middleware(['permission:inventario'])->resource('inventario', InventoryController::class);

    Route::middleware(['permission:colaboradores'])->resource('colaboradores', CollaboratorsController::class);
    Route::post('colaboradores/permisos','CollaboratorsController@asignarPermisos')->name('asginarPermisos');

    Route::middleware(['permission:bitacoras_cancelacion'])->get('bitacora/cancelacion', 'BitacoraCancelacionController@index')->name('bitacora.cancelacion');
    Route::middleware(['permission:bitacoras_ventas'])->get('bitacora/ventas', 'BitacoraCancelacionController@indexVentas')->name('bitacora.ventas');
    Route::post('corte/caja/inicial', 'CorteCajaController@store')->name('corte.inicial');
    Route::middleware(['permission:corte_caja'])->get('corte/caja', 'CorteCajaController@index')->name('corte.caja');
    Route::middleware(['permission:bitacoras_acceso'])->get('index/acceso', 'BitacoraAccesoController@index')->name('index.acceso');

    require __DIR__ . '/ajax/rutas.php';
});
