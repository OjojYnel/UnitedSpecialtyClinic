<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vaccine;
use DB;

class VaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vaccines = DB::table('vaccine_types')
        ->join('vaccine_types','vaccine_types.id', '=', 'vaccine_lists.type_id')
        ->select('vaccine_lists.vaccine_type_id','vaccine_types.vaccine_type_description','vaccine_types.vaccine_type_name','vaccine_lists.vaccine_name','vaccine_lists.vaccine_serial','vaccine_lists.vaccine_expiration_date')
        ->get();
        return view('pages.vaccine', compact ('vaccines'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $vaccines = Vaccine::all();
        return view('pages.vaccine')->with('vaccines', $vaccines);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'vaccine_quantity' => 'required|unique:vaccines||not_in:0',
            //'serial' => 'required|exists:Vaccines,serial',
        ]);
        //$exists = DB::table('roles')->where('name', 'Moderator')->first();
        $vaccine = new Vaccine;
        $vaccine->serial = $request->input('serial');
        $vaccine->vaccine_name = $request->input('vaccine_name');
        $vaccine->vaccine_type = $request->input('vaccine_type');
        $vaccine->vaccine_quantity = $request->input('vaccine_quantity');
        $vaccine->expiration_date = $request->input('expiration_date');
        $vaccine->save();

        return redirect('/createvaccine');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
