<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Patient_records;
use App\Medical_records;
use DB;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function hwgraph($id){
        $data = Patient::find($id);
        $data = DB::table('patients')
        ->join('medical_records','medical_records.patient_id','=','patients.id')
        ->join('patient_records','patient_records.patient_id','=','patients.id')
        ->where('patients.id','=',$id)
        ->select('patients.patient_bday','patient_records.birth_length','patient_records.birth_weight','medical_records.height','medical_records.weight','medical_records.date', DB::raw("CONCAT(FLOOR(DATEDIFF(medical_records.date, patients.patient_bday)*(12.0/365.25)+.02),' mos') AS age"))
        ->get();
        return response()->json($data);           
        
    }
}
