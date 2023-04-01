<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CollaboratorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collaborators = User::whereHas("roles", function ($q) {
            $q->where("name", '!=', "clientes");
        })->paginate(15);

        $roles = Role::where('name', '!=', 'cliente')->get();
        $permissions = Permission::get();

        return view('Collaborators.index', compact('collaborators', 'roles', 'permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'string',
                'max:255',
                'surnames' => 'required',
                'string',
                'max:255',
                'email' => 'required|unique:users|string',
                'phone' => 'required|max:10',
                'contact_phone' => 'required|max:10',
                'ocupation' => 'required',
                'born' => 'required',
            ],
            [
                'name.required' => 'El campo de nombre es obligatorio',
                'name.string' => 'El campo de nombre debe ser texto',
                'surnames.required' => 'El campo de apellidos es obligatorio',
                'email.required' => 'El campo de email es obligatorio',
                'email.unique' => 'El campo de email es unico',
                'phone.required' => 'El campo de telefono es obligatorio',
                'contact_phone.required' => 'El campo de número de contacto es obligatorio',
                'ocupation.required' => 'El campo de ocupacion es obligatorio',
                'born.required' => 'El campo de fecha de nacimiento es obligatorio',
            ],
        );
        if ($validator->fails()) {
            $error = $validator->errors()->all();

            foreach ($error as $validador) {
                return redirect()
                    ->back()
                    ->with('error', $validador)
                    ->withInput();
            }
        } else {
            try {

                $name = explode(' ', $request->name);
                $surnames = explode(' ', $request->surnames);
                $user = User::create([
                    'name' => $request->get('name'),
                    'surnames' => $request->get('surnames'),
                    'username' => $name[0] . '.' . $surnames[0] . "." . $surnames[1],
                    'code_user' => 0,
                    'email' => $request->get('email'),
                    'phone' => $request->get('phone'),

                    'cargo' => $request->get('cargo'),

                    'password' => Hash::make('123456'),
                ]);

                $user->assignRole('cliente');
                $user_code = User::where('id', $user->id)->first();

                $us = User::where('id', $user_code->id)->update([
                    'code_user' => '000' . $user_code->id,
                ]);

                return back()->with('success', '¡Se agrego el usuario de forma exitosa!');
            } catch (\Throwable $th) {
                return redirect()
                    ->back()
                    ->with('error', $th->getMessage())
                    ->withInput();
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function asignarPermisos(Request $request)
    {
try {
    $user = User::where('id',$request->id_user)->first();

    foreach($request->permissions as $permisos){

        $user->givePermissionTo($permisos);
    }
    return back()->with('success','Se agregaron los permisos al usuario '. $user->name.' de manera correcta');
} catch (\Throwable $th) {
    return back()->with('error','hubo algun problema al agregar los permisos');
}



        // Obtener los identificadores de los nodos seleccionados


        // Realizar operaciones con los nodos seleccionados
    }
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
