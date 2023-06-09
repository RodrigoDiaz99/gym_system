<?php

namespace App\Http\Controllers;

use App\Http\Requests\MembershipTypeRequest;
use App\Models\MembershipType;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MembershipTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membershipTypes = MembershipType::paginate('10');

        return view('Membership-type.index', compact('membershipTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // NO IMPLEMENTET
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255'],
            'category' => 'required',
            'days' => 'required',
        ], [
            'name.required' => 'El campo de nombre es obligatorio',
            'name.string' => 'El campo de nombre debe ser texto',
            'price.required' => 'El campo de Precio Membresia es obligatorio',
            'category.required' => 'El campo de categoria es obligatorio',
            'days.required' => 'El campo dias de membresias es obligatorio',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $membership = MembershipType::create($request->only(['name', 'price', 'category', 'days']));

            return redirect()->back()->with('success', 'Registro Éxitoso!');
        } catch (Exception $e) {

            return redirect()->back()->with('error', "Error al guardar el archivo" . $e->getMessage())->withInput();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        // NO IMPLEMENTET
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MembershipTypeRequest $request, $id)
    {
        try {



            $membership = MembershipType::findOrFail($id);
            $membership->update($request->only(['name', 'price', 'category', 'days']));

            return redirect()
                ->back()
                ->with('success', 'Actualizacion Éxitosa!');
        } catch (Exception $e) {

            return redirect()
                ->back()
                ->with('error', "Error al guardar el archivo" . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            MembershipType::find($id)->delete();

            return redirect()
                ->back()
                ->with('success', 'Eliminación Éxitosa!');
        } catch (Exception $e) {
            return redirect()
                ->back()
                ->with('error', $e);
        }
    }
}
