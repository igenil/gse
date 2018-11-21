<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\petition;
use App\grade;
use \PDF;
class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petitions=petition::whereBetween('created_at',[\Carbon\Carbon::tomorrow()->subYear(),\Carbon\Carbon::tomorrow()])->get();
        $petitions2=petition::where('id_grade',26)->get();
        $petitions3=petition::where('id_grade',26)->where('type', 'DUAL')->get();
        $grades = grade::all();
        return view("listing.detail",compact('petitions','petitions2','petitions3','grades'));
    }
    public function indexfechas(Request $request){
        dd($request -> date);
        $petitions=petition::whereBetween('created_at',[$desde,$hasta])->get();
        return view("listing.detail",compact('petitions'));
    }
    public function pdfs(){
        $petitions=petition::whereBetween('created_at',[\Carbon\Carbon::tomorrow()->subYear(),\Carbon\Carbon::tomorrow()])->get();
        $petitions2=petition::where('id_grade',26)->get();
        $petitions3=petition::where('id_grade',26)->where('type', 'DUAL')->get();
        $grades = grade::all();
        $pdf = PDF::loadView('listing.detail',compact('petitions','petitions2','petitions3','grades'));
        return $pdf->download('pdf.pdf');
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
    public function update(Request $request)
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

    }
}
