<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vaccine;
use App\Patient;
use App\Delivery;
use App\Service;
use App\Appointment;
use App\Payment;
use DB;
class QueueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        /*$payments = DB::table('payments')
                ->join('patients','payments.patient_id', '=', 'patients.id')
                ->join('services','services.id', '=', 'payments.service_id')
                ->where('payments.status', '=', 'ongoing')
                ->orWhere('payments.status', '=', 'waiting')
                ->select('patients.patient_lname','patients.patient_fname','services.service_name','payments.status')
                ->get();*/
        //$payments = Payment::all();
        //$patient = Patient::find($payments->patient_id);
        //return view('pages.dashboard')->with('payments', $payments);
        //return view('pages.dashboard', compact ('payments'));
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
        $patientId = Patient::where('id', $request->input('id'))->first()->id;
        $serviceId = Service::where('service_name', $request->input('TypeOfService'))->first()->id;
        //$patient = Patient::find($request);
        $payment = new Payment;
        $payment->status = $request->input('status');
        $payment->patient_id = $patientId;
        $payment->service_id = $serviceId;
        $payment->save();
        return redirect('/dashboard');
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
