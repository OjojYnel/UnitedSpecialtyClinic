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
use App\Vaccines;
use DB;

class dashboardcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        $patients = Patient::all();
        $vaccines = Vaccines::all();
        return view('pages.dashboard', compact ('patients', 'employees','vaccines'));
            //->with('employees', $employees)
            //->with('patients', $patients);

        
        //return view('pages.dashboard')->with('patients', $patients);
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
        //return ('DACS IS HANDSOME');
        $patientId = Patient::where('patient_fname', $request->input('firstname'))->first()->id;
        $serviceId = Service::where('service_name', $request->input('TypeOfService'))->first()->id;
        //$patient = Patient::find($request);
        $payment = new Payment;
        $payment->status = $request->input('status');
        $payment->discount = "0";
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
        $discount = Service::find($id);
        return view('pages.addPayment', compact('discount'));
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
        //$discounts = Payment::find($id);
        //return view('pages.addPayment', compact('discounts'));
        $discount = Service::find($id);
        return view('pages.addPayment', compact('discount'));
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
        $payId = $request->get('servId');
        /*DB::table('payments')
            ->where('id', $payId)
            ->update(['discount' => 1]);*/
            $payId = $request->get('servId');
            $payment = Payment::find($payId);
            $payment->discount = $request->input('discount');
            $payment->status = 'done';
            $payment->save();
            return redirect('/dashboard');
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
