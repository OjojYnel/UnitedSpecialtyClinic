<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LiveSearch extends Controller
{
  function index()
  {
   return view('pages.test');
 }

 function action(Request $request)
 {
   if($request->ajax())
   {
    $output = '';
    $query = $request->get('query');
    if($query != '')
    {
     $data = DB::table('patients')
     ->where('patient_lname', 'like', '%'.$query.'%')
     ->orWhere('patient_fname', 'like', '%'.$query.'%')
     ->orWhere('patient_address', 'like', '%'.$query.'%')
     ->orWhere('patient_bday', 'like', '%'.$query.'%')
     ->orWhere('patient_gender', 'like', '%'.$query.'%')
     ->orWhere('father_name', 'like', '%'.$query.'%')
     ->orWhere('mother_name', 'like', '%'.$query.'%')
     ->orWhere('mother_occupation', 'like', '%'.$query.'%')
     ->orWhere('father_occupation', 'like', '%'.$query.'%')
     ->orWhere('contact_number', 'like', '%'.$query.'%')
     ->orderBy('id', 'desc')
     ->get();
     
   }
   else
   {
     $data = DB::table('patients')
     ->orderBy('id', 'desc')
     ->get();
   }
   $total_row = $data->count();
   if($total_row > 0)
   {
     foreach($data as $row)
     {
      $output .= '
      <tr>
      <td>'.$row->patient_fname.'</td>
      <td>'.$row->patient_lname.'</td>
      <td>'.$row->patient_bday.'</td>
      <td>'.$row->patient_address.'</td>
      <td>'.$row->patient_gender.'</td>
      <td>'.$row->father_name.'</td>
      <td>'.$row->mother_name.'</td>
      </tr>
      ';
    }
  }
  else
  {
   $output = '
   <tr>
   <td align="center" colspan="5">No Data Found</td>
   </tr>
   ';
 }
 $data = array(
   'table_data'  => $output,
   'total_data'  => $total_row
 );

 echo json_encode($data);
}
}
}