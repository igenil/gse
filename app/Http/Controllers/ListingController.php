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
        $from=\Carbon\Carbon::tomorrow()->subYear();
        $to=\Carbon\Carbon::tomorrow();
        $grades2=26;
        $type='DUAL';
        return view("listing.detail",compact('petitions','petitions2','petitions3','grades','from','to','grades2','type'));
    }
    public function indexfechas(Request $request){
        $petitions=petition::whereBetween('created_at',[$request -> date1,$request -> date2])->get();
        $petitions2=petition::where('id_grade',26)->get();
        $petitions3=petition::where('id_grade',26)->where('type', 'DUAL')->get();
        $grades = grade::all();
        $to=$request -> date2;
        $from=$request -> date1;
        $grades2=26;
        $type='DUAL';
        return view("listing.detail",compact('petitions','petitions2','petitions3','grades','to','from','grades2','type'));
    }
    public function indexgrades(Request $request){
        $petitions=petition::whereBetween('created_at',[\Carbon\Carbon::tomorrow()->subYear(),\Carbon\Carbon::tomorrow()])->get();
        $petitions2=petition::where('id_grade',$request-> id_grade)->get();
        $petitions3=petition::where('id_grade',26)->where('type', 'DUAL')->get();
        $grades = grade::all();
        $from=\Carbon\Carbon::tomorrow()->subYear();
        $to=\Carbon\Carbon::tomorrow();
        $grades2=$request-> id_grade;
        $type='DUAL';
        return view("listing.detail",compact('petitions','petitions2','petitions3','grades','to','from','grades2','type'));
    }
    public function indexgradestype(Request $request){
        $petitions=petition::whereBetween('created_at',[\Carbon\Carbon::tomorrow()->subYear(),\Carbon\Carbon::tomorrow()])->get();
        $petitions2=petition::where('id_grade',$request-> id_grade)->get();
        $petitions3=petition::where('id_grade',$request-> id_grade)->where('type', $request-> type)->get();
        $grades = grade::all();
        $from=\Carbon\Carbon::tomorrow()->subYear();
        $to=\Carbon\Carbon::tomorrow();
        $grades2=$request-> id_grade;
        $type= $request-> type;
        return view("listing.detail",compact('petitions','petitions2','petitions3','grades','to','from','grades2','type'));
    }
    public function pdfs($type,$from,$to,$grade,$typegrade){
        
        if ($type=="date") {
            $petitions=petition::whereBetween('created_at',[$from,$to])->get();
            $pdf = PDF::loadView('listing.PDF',compact('petitions'));
            return $pdf->download('pdf.pdf');
        }else if($type=="grade"){
            $petitions=petition::where('id_grade',$grade)->get();
            $pdf = PDF::loadView('listing.PDF',compact('petitions'));
            return $pdf->download('pdf.pdf');
        }else{
            $petitions=petition::where('id_grade',$grade)->where('type', $typegrade)->get();
            $pdf = PDF::loadView('listing.PDF',compact('petitions'));
            return $pdf->download('pdf.pdf');
        }
        
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
