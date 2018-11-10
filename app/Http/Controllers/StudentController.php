<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = student::all();
        return view("student.detail",compact('students'));
    }
    public function indexaddstudent()
    {
        $students = student::all();
        return view("student.create");
    }
    public function indexeditstudent($id){
        $students = student::find($id);
        return view("student.edit", compact('students'));
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
        student::create(request()->all());
        return redirect('/student')->with('message', ['success', __("Student created successfully")]);
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
        $students = student::find($id);
        $students -> name = $request -> name;
        $students -> lastname = $request -> lastname;
        $students -> age = $request -> age;

        $students -> save();
        return redirect('/student')->with('message', ['success', __("Student edited successfully")]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = student::find($id);
        $students->delete();
        $students = student::all();
        return redirect('/student')->with('message', ['success', __("Student deleted successfully")]);
    }
}
