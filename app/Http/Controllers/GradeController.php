<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\grade;
use App\Http\Requests\GradeRequest;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades = grade::all();
        return view("grade.detail",compact('grades'));
    }
    public function indexaddgrade()
    {
        $grades = grade::all();
        return view("grade.create");
    }

    public function indexeditgrade($id){
        $grades = grade::find($id);
        return view("grade.edit", compact('grades'));
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
    public function store(GradeRequest $request)
    {
        Grade::create(request()->all());
        return redirect('/grade')->with('message', ['success', __("Grade created successfully")]);
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
    public function update(GradeRequest $request, $id)
    {
        $grade = grade::find($id);
        $grade -> name = $request -> name;
        $grade -> level = $request -> level;

        $grade -> save();
        return redirect('/grade')->with('message', ['success', __("Grade edited successfully")]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grades = grade::find($id);
        $grades->delete();
        $grades = grade::all();
        return redirect('/grade')->with('message', ['success', __("Grade deleted successfully")]);
    }
}
