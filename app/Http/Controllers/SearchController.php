<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Vaccine;
use App\Patient;
use App\Delivery;
use App\Service;
use App\Appointment;
use App\Payment;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $searches = Patient::where('patient_fname', 'like', '%' . $request->input('searchInput') . '%')
        ->orWhere('patient_lname', 'like', '%' . $request->input('searchInput') . '%')
        ->orWhere('patient_gender', 'like', '%' . $request->input('searchInput') . '%')
        ->orWhere('patient_bday', 'like', '%' . $request->input('searchInput') . '%')
        ->orWhere('patient_address', 'like', '%' . $request->input('searchInput') . '%')
        ->orWhere('father_name', 'like', '%' . $request->input('searchInput') . '%')
        ->orWhere('mother_name', 'like', '%' . $request->input('searchInput') . '%')
        ->orWhere('father_occupation', 'like', '%' . $request->input('searchInput') . '%')
        ->orWhere('mother_occupation', 'like', '%' . $request->input('searchInput') . '%')
        ->orWhere('contact_number', 'like', '%' . $request->input('searchInput') . '%')
        ->orWhere('type_of_delivery', 'like', '%' . $request->input('searchInput') . '%')
        ->get();
        return view('pages.patientlist', compact ('searches'));
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
