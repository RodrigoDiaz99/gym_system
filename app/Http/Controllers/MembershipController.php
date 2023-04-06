<?php

namespace App\Http\Controllers;

use App\Http\Requests\MembershipRequest;
use App\Models\Membership;
use App\Models\MemberShipMembershipPay;
use App\Models\MembershipPay;
use App\Models\MembershipType;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB as DB;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Membership = MemberShipMembershipPay::join('memberships as a', 'membership_membership_pays.memberships_id', '=', 'a.id')
            ->join('membership_pays as b', 'membership_membership_pays.membership_pays_id', '=', 'b.id')
            ->join('membership_types as c', 'a.membership_types_id', '=', 'c.id')
            ->join('users as d', 'a.users_id', '=', 'd.id')
            ->select('a.id', 'a.init_date', 'a.expiration_date', 'a.created_at', 'b.reference_line', 'b.estatus', 'd.name as user_name', 'c.name as type_name')
            ->paginate(20);

        $membership_types = MembershipType::all();
        $clients = User::role('Cliente')->get();

        // dd($membership_types);

        return view('Membership.index', compact('Membership', 'membership_types', 'clients'));
    }

    public function validacionMembresia(Request $request)
    {

        try {
            //Usuario1.Apellido31031999
            $validacion = DB::table('membership_membership_pays')
               ->join('membership_pays', 'membership_membership_pays.membership_pays_id', '=', 'membership_pays.id')
                ->join('memberships', 'membership_membership_pays.memberships_id', '=', 'memberships.id')
                ->join('users', 'memberships.users_id', '=', 'users.id')

                ->where('users.username', $request->code_user)
                 ->where('memberships.estatus_membresia', 1)
                 ->where('membership_pays.estatus', "P")
                ->first();

            if (is_null($validacion)) {
                throw new Exception("Usted no cuenta con una membresia o ya esta caducada, compre una nueva");
            }

            return response()->json([
                'lSuccess' => true,
                'validacion' => $validacion,
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                'lSuccess' => false,
                'cMensaje' => $th->getMessage(),
            ]);
        }

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // NO IMPLEMENT
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            $ip = request()->ip();
            $reference = mt_rand(00000000001, 9999999990);

            DB::beginTransaction();

            $membershipType = MembershipType::findOrFail($request->membership_type);

            $membership = Membership::create([
                'users_id' => $request->users_id,
                'init_date' => Carbon::now()->format('Y-m-d'),
                'membership_types_id' => $membershipType->id,
                'carts_id' => '',
                'asigned_by' => Auth::id(),
                'expiration_date' => Carbon::now()->addDays($membershipType->days)->format('Y-m-d'),
            ]);

            $pay = MembershipPay::create([
                'reference_line' => $membership->id . $reference . "M",
            ]);

            $membershipPays = [
                [
                    'memberships_id' => $membership->id,
                    'membership_pays_id' => $pay->id,
                ],
            ];

            MemberShipMembershipPay::insert($membershipPays);

            DB::commit();

            $origenMembresias = true;
            $referenciaMembresia = $pay->reference_line;

            return redirect()->route('sales.point2', compact('origenMembresias', 'referenciaMembresia', 'ip'));

        } catch (Exception $e) {
            DB::rollback();

            return redirect()->back()->with('error', 'Surgio un problema, Intenta de nuevo!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MembershipRequest $request, $id)
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

        try {
            $membership = MemberShipMembershipPay::join('memberships as a', 'membership_membership_pays.memberships_id', '=', 'a.id')
                ->join('membership_pays as b', 'membership_membership_pays.membership_pays_id', '=', 'b.id')
                ->join('membership_types as c', 'a.membership_types_id', '=', 'c.id')

                ->where('a.id', $id)
                ->first();

            MembershipPay::where('id', $membership->membership_pays_id)->update([
                'estatus' => "C",
            ]);
            $membership->update([
                'estatus' => "C",
            ]);
            Membership::where('id', $membership->memberships_id)->update([
                'deleted_at' => Carbon::now(),
                'estatus_membresia' => 1,

            ]);
            return redirect()->back()->with('success', 'Eliminación Éxitosa!');
        } catch (Exception $e) {

            return redirect()->back()->with('error', 'Hubo un problema, porfavor Intente nuevamente!');
        }
    }
}
