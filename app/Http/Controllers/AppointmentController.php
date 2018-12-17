<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Service;
use App\Appointment;
use DB;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use Carbon\Carbon;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $patients = Patient::all();
        $data = DB::table('appointments')
        ->join('patients','appointments.patient_id', '=', 'patients.id')
        ->join('services','services.id', '=', 'appointments.service_id')
        ->select('patients.patient_lname','patients.patient_fname','services.service_name','appointments.id','appointments.appointment_date','appointments.from','appointments.to')
        ->get();
        $appointments = [];
        //$data = Event::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                //$date = $value->appointment_date.$value->from;
                /*$dt = Carbon::now('Asia/Manila');
                $ex = Carbon::now($value->appointment_date,'Asia/Manila');
                $exfo = Carbon::now($value->from,'Asia/Manila');
                $exto = Carbon::now($value->to,'Asia/Manila');*/
                $appointments[] = \Calendar::event(
                    $value->service_name,
                    ''.$value->appointment_date.'T'.$value->from.'',
                    ''.$value->appointment_date.'T'.$value->to.'',
                    null

                    

                );
            }
        }
        $calendar = \Calendar::addEvents($appointments)
        ->setOptions([
            'firstDay' => 1
        ])->setCallbacks ([

        ]);
        return view('pages.appointment', array('calendar'=>$calendar));
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
        /*$this->validate($request,[
            'patient_fname' => 'required',
            'patient_lname' => 'required',
            'service_name' => 'required',
            'appointment_date' => 'required',
            'from' => 'required',
            'to' => 'required',
        ]);*/

        $patientId = Patient::where('patient_fname', $request->input('firstname'))
        ->where('patient_lname', $request->input('lastname'))->first()->id;
        $serviceId = Service::where('service_name', $request->input('service_name'))->first()->id;
        $appointment = new Appointment;
        $appointment -> patient_id = $patientId;
        $appointment -> service_id = $serviceId;
        $appointment -> appointment_date = $request->input('appointment_date');
        $appointment -> from = $request->input('from');
        $appointment -> to = $request->input('to');
        $appointment -> save();

        return redirect('/appointment');
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
