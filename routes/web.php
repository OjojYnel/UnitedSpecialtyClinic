<?php
use App\Patient;
use Illuminate\Support\Facades\Input;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/', function () {
    return redirect(route('login'));
 });

 Route::group(['middleware' => ['auth']], function() {
    

Route::any('/patient-form','PatientFormController@index');
Route::resource('/create','PatientController');
Route::Post('/submit','PatientController@vitalsign');
Route::Post('/vaccine_type','PatientController@vaccine_type');
Route::Post('/done','PatientController@ChildhoodImmunization');
Route::Post('/diagnosisResult','PatientController@diagnoses');
Route::Post('/remove','PatientController@destroy');
Route::get('/create/{id}','PatientController@hwgraph');
Route::get('/create/{id}/graph','ChartController@hwgraph');
Route::get('/UserManagement','EmployeeController@index');
Route::resource('/addUser','EmployeeController');
Route::Post('/addUser','EmployeeController@store');

//Report Generation page Controller
Route::resource('/genReport', 'ReportGenerationController');

//Transaction Inventory Controller
Route::resource('/inventory_transaction','InventoryTransactionController');

//vaccine page Controller
Route::resource('/createvaccine', 'VaccineController');

//Dashboard page Controller
Route::resource('/dashboard' , 'DashboardController');
Route::get('/dashboard' , 'DashboardController@index');

//store walkin patient to queue Controll
Route::post('/addPatient','PatientController@walkin');


//store existing patient to queue Controller
Route::resource('/queue','QueueController');

//store existing patient to appointment Controller
Route::resource('/appointment','AppointmentController');

//search existing patient
Route::any ( '/search', function () {
    $searchInput = Input::get ( 'searchInput' );
    $searches = Patient::where('patient_fname','LIKE','%'.$searchInput.'%')
    ->orWhere('patient_lname','LIKE','%'.$searchInput.'%')
    ->orWhere('patient_gender','LIKE','%'.$searchInput.'%')
    ->orWhere('patient_bday','LIKE','%'.$searchInput.'%')
    ->orWhere('patient_address','LIKE','%'.$searchInput.'%')
    ->orWhere('father_name','LIKE','%'.$searchInput.'%')
    ->orWhere('mother_name','LIKE','%'.$searchInput.'%')
    ->orWhere('father_occupation','LIKE','%'.$searchInput.'%')
    ->orWhere('mother_occupation','LIKE','%'.$searchInput.'%')
    ->orWhere('contact_number','LIKE','%'.$searchInput.'%')
    ->orWhere('type_of_delivery','LIKE','%'.$searchInput.'%')->get();
    return view('pages.patientlist', compact ('searches'));
    
});

//ADD VACCINE TYPES
Route::resource('vaccinetypesnew','PostVaccineTypeController');
Route::POST('store','PostVaccineTypeController@store');

//DYNAMIC VACCINE TYPES
Route::resource('/vaccinetypes','PostVaccineTypeController');
Route::POST('/vaccinetypes', "PostVaccineTypeController@returnList");


// VACCINE LISTS
Route::resource('vaccinelist', 'PostVaccineTypeController' ); 

//DYNAMIC ADD VACCINE LISTS BASED ON TYPES
Route::POST('add_vaccine', "PostVaccineTypeController@add_vaccine");

//EDIT VACCINES
Route::POST('edit_vaccine', "PostVaccineTypeController@edit_vaccine");

//ADJUST VACCINES
Route::POST('adjust_inventory', "PostVaccineTypeController@adjust_inventory");


//RENDERED VACCINE
Route::resource('rendered_vaccinelist', 'RenderedVaccineController');
Route::resource('/rendered_vaccines', 'RenderedVaccineController');

});

/*------------------Login Controller----------------------*/
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
/*--------------------------------------------------------*/





