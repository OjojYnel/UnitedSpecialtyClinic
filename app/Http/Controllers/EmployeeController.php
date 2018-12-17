<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\User;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee= User::all();
        return view('pages.usermanagement')->with('employee', $employee);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'position' => 'required|string|max:255',
            'employee_lname' => 'required|string|max:255',
            'employee_fname' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'contact' => 'required|numeric|min:11',
            'username' => 'required|string|unique:employees,username|max:255',
            'password' => 'required|string|min:6|confirmed'
        ]);
        User::create([
            'position' => $request['position'],
            'employee_lname' => $request['employee_lname'],
            'employee_fname' => $request['employee_fname'],
            'address' => $request['address'],
            'contact' => $request['contact'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
        ]);
        return back();

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
