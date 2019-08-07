<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employees;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=Employees::all();
        return view("employees")->with("user",$users);
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
      $emp=new Employees();
      $emp->emp_no=$request->emp_number;
        $emp->emp_fname=$request->fname;
        $emp->emp_mname=$request->mname;
        $emp->emp_lname=$request->lname;
        $emp->emp_dob=$request->dob;
        $emp->marital_status=$request->marital_status;
        $emp->gender=$request->gender;
        $emp->emp_nationalid=$request->national_id;
        $emp->phone=$request->phone;
        $emp->email=$request->email;
        $emp->department=$request->department;
        $emp->religion=$request->religion;
        $emp->county=$request->county;
        $emp->status=$request->status;
        if($emp->save()){
            return redirect("employees");
        }
        else{
            return redirect("employees");
        }

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($emp_id)
    {

        $user=Employees::where("emp_id",$emp_id)->get();
        return view("user_profile")->with("user",$user);
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
