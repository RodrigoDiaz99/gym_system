<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Super-Admin  administrador maestro*/
        User::create([
            'name' => 'Rodrigo Enrique',
            'surnames'=>'Diaz Serviran',
            'username'=>'Rodrigo.Diaz',
            'code_user' => '0001',
            'email' => 'it@domain.com',
            'phone' => '9999708319',
            'password' => Hash::make('administradorrod'),
        ])->assignRole(1)->givePermissionTo(14);






            /**administrador  */
        User::create([
            'name' => 'David',
            'surnames'=>'May',
            'username'=>'David.May',
            'code_user' => '0004',
            'email' => 'administrador@domain.com',
            'phone' => '9992389045',
            'password' => Hash::make('administradordavid'),
        ])->assignRole(2);

    }
}
