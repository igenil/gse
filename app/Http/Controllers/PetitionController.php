<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\petition;
use App\company;
use App\grade;
use App\Http\Requests\PetitionsRequest;

class PetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petitions = petition::with('company','grade')->get();
        return view("petition.detail",compact('petitions'));
    }

    public function indexaddpetition()
    {
        $petitions = petition::all();
        $companies = company::all();
        $grades = grade::all();
        return view("petition.create", compact('companies','grades'));
    }

    public function indexeditpetition($id){
        $petitions = petition::find($id);
        $companies = company::all();
        $grades = grade::all();
        return view("petition.edit", compact('petitions','companies','grades'));
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
    public function store(PetitionsRequest $request)
    {
        Petition::create(request()->all());
        return redirect('/petition')->with('message', ['success', __("Petition created successfully")]);
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
        $petition = petition::find($id);
        $petition -> id_company = $request -> id_company;
        $petition -> id_grade = $request -> id_grade;
        $petition -> type = $request -> type;
        $petition -> n_students = $request -> n_students;
        $petition -> created_at = $request -> created_at;

        $petition -> save();
        return redirect('/petition')->with('message', ['success', __("Petition edited successfully")]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $petitions = petition::find($id);
        $petitions->delete();
        $petitions = petition::all();
        return redirect('/petition')->with('message', ['success', __("Petition deleted successfully")]);
    }
}
