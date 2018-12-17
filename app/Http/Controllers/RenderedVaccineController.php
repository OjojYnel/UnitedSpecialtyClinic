<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostVaccineType;
use App\Vaccines;
use App\VaccineType;
use DB;

class RenderedVaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
      
        //Available Count
       
        $vaccine_types = VaccineType::all();
        $vaccine_list = Vaccines::all();
        $vaccines = DB::table('vaccine_types')
        ->Join('vaccine_lists','vaccine_lists.vaccine_types_id','=','vaccine_types.id')
        ->select('vaccine_types.id','vaccine_types.vaccine_type_name'
            ,DB::raw('COUNT(CASE WHEN status="Available" THEN 1 END) AS vaccine_count')
            ,DB::raw('COUNT(CASE WHEN status="Expired" THEN 1 END) AS vaccine_count2')
            ,DB::raw('COUNT(CASE WHEN status="Returned" THEN 1 END) AS vaccine_count3')
            ,DB::raw('COUNT(CASE WHEN status="Damaged" THEN 1 END) AS vaccine_count4')
            ,DB::raw('COUNT(CASE WHEN status="Consumed" THEN 1 END) AS vaccine_count5'))
        ->groupBy('vaccine_types.id')
        ->get();
        
        return view('pages.renderedvaccine',compact('vaccines'));

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
        //
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
