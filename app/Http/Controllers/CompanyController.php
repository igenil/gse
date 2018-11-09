<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = company::all();
        return view("company.detail",compact('companies'));
    }

    public function indexaddcompany()
    {
        return view("company.create");
    }

    public function indexeditcompany($id){
        $company = company::find($id);
        return view("company.edit", compact('company'));
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
    public function store()
    {
        Company::create(request()->all());

        return redirect('/company')->with('message', ['success', __("Company created successfully")]);
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
        $company = company::find($id);
        $company -> name = $request -> name;
        $company -> city = $request -> city;
        $company -> cp = $request -> cp;
        $company -> save();
        return redirect('/company')->with('message', ['success', __("Company edited successfully")]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $companies = company::find($id);
        $companies->delete();
        $companies = company::all();
        return redirect('/company')->with('message', ['success', __("Company deleted successfully")]);
    }
}
