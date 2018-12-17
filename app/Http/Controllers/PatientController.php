<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Patient_records;
use App\Medical_records;
use App\Immunization;
use App\VaccineType;
use App\Diagnoses;
use App\Service;
use App\Payment;
use App\Service_use;
use App\Vaccine_used;
use App\Vaccine_list;
use Carbon\Carbon;
use DB;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.1
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();
        return view('pages.patient-records')->with('patients', $patients);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.patient-records');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient = new Patient;
        $patient->patient_lname = $request->input('lname');
        $patient->patient_fname = $request->input('fname');
        $patient->patient_mname = $request->input('mname');
        $patient->patient_bday = $request->input('dofbirth');
        $patient->patient_address = $request->input('address');
        $patient->patient_gender = $request->input('sex');
        $patient->father_name = $request->input('fathername');
        $patient->mother_name = $request->input('mothername');
        $patient->father_occupation = $request->input('foccu');
        $patient->mother_occupation = $request->input('moccu');
        $patient->contact_number = $request->input('connum');
        $patient->type_of_delivery = $request->input('typeofdelivery');
        $patient->age = $request->input('age');
        $patient->save();

        //$patientId = Patient::where('patient_fname', $request->input('firstname'))->first()->id;
        $patientId = Patient::all()->last()->id;

        $patient_record = new Patient_records;
        $patient_record->patient_id = $patientId;
        $patient_record->blood_type = $request->input('btype');
        $patient_record->birth_weight = $request->input('bw');
        $patient_record->birth_length = $request->input('bl');
        $patient_record->head_cire = $request->input('headcirc');
        $patient_record->chest_cire = $request->input('chestcirc');
        $patient_record->abdominal_cire = $request->input('abdocirc');
        $patient_record->save();

        //get current date
        $current = new Carbon();
        $current = Carbon::now();

        $service_use = new Service_use;
        //getting latest patient on the list
        $patientId = DB::table('patients')->orderBy('id', 'DESC')->first()->id;
        //if chosen service are check up and vaccination
        $both = 'both';
        if ($request->input('TypeOfService') == $both) {
            //getting both service from database
            $serviceId1 = Service::where('service_name', 'Check Up')->first()->id;
            $serviceId2 = Service::where('service_name', 'Vaccine')->first()->id;
            $serviceId3 = Service::where('service_name', 'Check Up and Vaccine')->first()->id;
            //inserting first service
            $service_use1 = new Service_use;
            $service_use1->service_use_date = $current;
            $service_use1->service_id = $serviceId1;
            $service_use1->patient_id = $patientId;
            $service_use1->save();
            $service_use2 = new Service_use;
            //inserting second service
            $service_use2->service_use_date = $current;
            $service_use2->service_id = $serviceId2;
            $service_use2->patient_id = $patientId;
            $service_use2->save();
            $service_use3 = new Service_use;
            $service_use3->service_use_date = $current;
            $service_use3->service_id = $serviceId3;
            $service_use3->patient_id = $patientId;
            $service_use3->save();
            $origin = $request->input('origin');
            return redirect('/'.$origin);
        } else {
            $serviceId = Service::where('service_name', $request->input('TypeOfService'))->first()->id;
            $service_use->service_use_date = $current;
            $service_use->service_id = $serviceId;
            $service_use->patient_id = $patientId;
            $service_use->save();
            $origin = $request->input('origin');
            return redirect('/'.$origin);
        }
        
    }
    
    public function vitalsign(Request $request)
    {
        $patientId = Patient::where('id',  $request->input('patId'))->first()->id;
        $medical_record = new Medical_records;
        $medical_record->patient_id = $patientId;
        $medical_record->date = $request->input('visitDate');
        $medical_record->height = $request->input('newHeight');
        $medical_record->weight = $request->input('NewWeight');
        $medical_record->pulse_rate = $request->input('pulseRate');
        $medical_record->respiration = $request->input('respiration');
        $medical_record->temperature = $request->input('temperature');
        $medical_record->save();
        return redirect('create/' . $patientId);
    }

    public function diagnoses(Request $request){
        $patientId = Patient::where('id', $request->input('patId'))->first()->id;
        $service = Service::where('id', 1)->first()->id;
        $diagnose = new Diagnoses;
        $diagnose->diagnosisNotes = $request->input('diagnosis');
        $diagnose->allergies = $request->input('allergies');
        $diagnose->save();

        //$patient = Diagnoses::all()->last()->id;
        
        
        $latestRec = Medical_records::where('patient_id', $request->input('patId'))
        ->get()->last();
        $latestRec->diagnoses_id = $latestRec->id;
        $latestRec->save();

        return redirect('create/' . $patientId);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $patient = Patient::find($id);

        $vaccine_type = VaccineType::all();

        $immunizationGroup = DB::table('immunizations')
        ->join('vaccine_types','immunizations.vaccine_type_id', '=', 'vaccine_types.id')
        ->join('medical_records','medical_records.immunization_id', '=', 'immunizations.id')
        ->where('medical_records.patient_id', '=', $id)
        ->select('vaccine_types.vaccine_type_name', 'immunizations.id')
        ->get();

        /*$immunizationShots = DB::table('vaccines_used')
                    ->join( 'vaccine_lists', 'vaccines_used.vaccine_list_id', '=', 'vaccine_lists.id')
                    ->join( 'immunizations', 'vaccines_used.immunization_id', '=', 'immunizations.id')
                    ->join('vaccine_types', "vaccine_types.id", '=', 'immunizations.vaccine_type_id')
                    ->join('medical_records', 'medical_records.immunization_id', '=', 'immunizations.id')
                    ->where('medical_records.patient_id','=',$id)
                    ->select('vaccines_used.date_administered','vaccines_used.immunization_id')
                    ->get();
                    */
        /*
        SELECT @rownum:=@rownum+1 AS number, vaccines_used.date_administered FROM `vaccines_used` 
        JOIN immunizations ON vaccines_used.immunization_id = immunizations.id
        JOIN vaccine_types ON vaccine_types.id = immunizations.vaccine_type_id
        JOIN medical_records ON medical_records.immunization_id = immunizations.id, (SELECT @rownum:=0) r
        WHERE medical_records.patient_id = 1
        */

        $vitals = Medical_records::where('patient_id', $id)
        ->get()->last();
        
        $patient = DB::table('patient_records')
        ->join('patients','patients.id','=','patient_records.patient_id')
        ->where('patient_id','=',$id)
        ->select('patients.id','patients.patient_mname','patients.id','patient_records.blood_type','patient_records.birth_weight',
         'patient_records.birth_length','patient_records.head_cire','patient_records.chest_cire','patient_records.abdominal_cire',
         'patients.patient_lname','patients.patient_fname','patients.patient_bday','patients.patient_address',
         'patients.patient_gender','patients.father_name','patients.mother_name','patients.mother_occupation','patients.father_occupation',
         'patients.contact_number','patients.type_of_delivery','patients.age')
        ->get()
        ->first();

        return view('pages.patient-profile', compact('patient', 'vaccine_type', 'immunizationList', 'immunizationGroup', 'vitals'));
    }


    public function vaccine_type(Request $request)
    {
        
        $patientVacId = Patient::where('id',  $request->input('patVacId'))->first()->id;
        $vaccineId = VaccineType::where('vaccine_type_name', $request->input('vaccinetype'))->first()->id;
        $numberOfShot = VaccineType::where('vaccine_type_name', $request->input('vaccinetype'))->first()->number_of_shots;
        $immunization_type = new immunization;
        $immunization_type->vaccine_type_id = $vaccineId;
        $immunization_type->save();
        $latest_immunization_record = DB::table('immunizations')->orderBy('id', 'DESC')->first()->id;
        $latest_medical_record = DB::table('medical_records')->where('patient_id','=',$patientVacId)->orderBy('id', 'DESC')->first()->id;
        $latest_medical_record_check = DB::table('medical_records')->where('patient_id','=',$patientVacId)->orderBy('id', 'DESC')->first()->immunization_id;
        $count = 0;
        while ($count != $numberOfShot) {
            $count++;
            $vaccine_shot = new Vaccine_used;
            $vaccine_shot->immunization_id = $latest_immunization_record;
            $vaccine_shot->save();
        }
        if($latest_medical_record_check == null) {
            $up_med_immunization = Medical_records::find($latest_medical_record);
            $up_med_immunization->immunization_id = $latest_immunization_record;
            $up_med_immunization->save();
            return redirect('create/' . $patientVacId);
        } else {
            
            return redirect('create/' . $patientVacId);
        }

        
        //return redirect('/create/{{$patientVacId}}');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::find($id);
        $patient = DB::table('patient_records')
        ->join('patients','patients.id','=','patient_records.patient_id')
        ->where('patient_id','=',$id)
        ->select('patients.patient_mname','patients.id','patient_records.blood_type','patient_records.birth_weight',
            'patient_records.birth_length','patient_records.head_cire','patient_records.chest_cire','patient_records.abdominal_cire',
            'patients.patient_lname','patients.patient_fname','patients.patient_bday','patients.patient_address',
            'patients.patient_gender','patients.father_name','patients.mother_name','patients.mother_occupation','patients.father_occupation',
            'patients.contact_number','patients.type_of_delivery','patients.age')
        ->get()->first();

        return view('includes.editinfo', compact('patient'));
       // $patients = Patient::find($id);
       // return view('pages.edit')->with('patients', $patients);
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
        $patient = Patient::find($id);
        $patient->patient_lname = $request->input('lname');
        $patient->patient_mname = $request->input('mname');
        $patient->patient_fname = $request->input('fname');
        $patient->patient_bday = $request->input('dofbirth');
        $patient->patient_address = $request->input('address');
        $patient->patient_gender = $request->input('sex');
        $patient->father_name = $request->input('fathername');
        $patient->mother_name = $request->input('mothername');
        $patient->father_occupation = $request->input('foccu');
        $patient->mother_occupation = $request->input('moccu');
        $patient->contact_number = $request->input('connum');
        $patient->type_of_delivery = $request->input('typeofdelivery');
        $patient->age = $request->input('age');
        $patient->save();

        //$patientId = Patient::where('patient_fname', $request->input('firstname'))->first()->id;
        $patientId = Patient::all()->last()->id;

        $patient_record = Patient_records::find($id);
        $patient_record->patient_id = $patientId;
        $patient_record->blood_type = $request->input('btype');
        $patient_record->birth_weight = $request->input('bw');
        $patient_record->birth_length = $request->input('bl');
        $patient_record->head_cire = $request->input('headcirc');
        $patient_record->chest_cire = $request->input('chestcirc');
        $patient_record->abdominal_cire = $request->input('abdocirc');
        $patient_record->save();
        return back();
    }
    public function ChildhoodImmunization(Request $request)
    {

        $patientId = Patient::where('id',  $request->input('patId'))
        ->first()
        ->id;

        $immunizationId = Immunization::where('id',  $request->input('immunizationID'))
        ->first()
        ->id;

        $vaccine_shot = Vaccine_used::where('immunization_id', $immunizationId)
        ->whereNull('date_administered')
        ->first()->id;
        //$patientImmunization = Vaccines_used::find($request->input('id'));
        $vaccine_type = vaccine_type::where('vaccine_type_name', $request->input('vaccine_type'))
        ->first()
        ->id;
        
        $ave_vaccine = DB::table('vaccine_lists')
        ->leftjoin('vaccines_used','vaccine_lists.id', '=', 'vaccines_used.vaccine_list_id')
        ->join('vaccine_types','vaccine_lists.vaccine_types_id', '=', 'vaccine_types.id')
        ->whereNull('vaccines_used.id')
        ->where('vaccine_types.id', $vaccine_type)
        ->select('vaccine_lists.id','vaccine_lists.lot_number')
        ->get()->first();

        $patientImmunization = Vaccine_used::find($vaccine_shot);
        $patientImmunization->date_administered = $request->input('Date');
        $patientImmunization->vaccine_list_id = $ave_vaccine->id;
        $patientImmunization->save();
        return redirect('create/' . $patientId);

    }

    public function Diagnosis(Request $request)
    {
        $patientId = Patient::where('id',  $request->input('patId'))->first()->id;
        $patientImmunization = Immunization::find($request->input('id'));
        $patientImmunization->date_administered = $request->input('Date');
        $patientImmunization->save();
        return redirect('create/' . $patientId);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $immunizationGroup = Immunization::table('immunizations');
        $immunizationGroup->delete();
        return redirect('/remove');
    }
}