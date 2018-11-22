@extends('layouts.app')

@section('content')
<br>
<br>
<div style="width: 80%; text-align: center; margin: 0 auto;"> 
    
    <p style="font-size: 20px;">Petitions during the days:</p>
    <br> 
    <form method="POST" action="{{url('/listingFecha')}}">
        {{ csrf_field() }}
        Start date:&nbsp;&nbsp;
        <input id="date1"  name = "date1" value="{{ \Carbon\Carbon::tomorrow()->subYear()->format('Y-m-d') }}" type="date">
        &nbsp;&nbsp;&nbsp; 
        Finish date:&nbsp;&nbsp;
        <input id="date2"  name = "date2" value="{{ \Carbon\Carbon::tomorrow()->format('Y-m-d') }}" type="date">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" class="btn btn-success"><span class="fas fa-search"></button>
    </form>
    <br>
    <br>
        <table class="table table-striped table-hover" style="width: 80%; text-align: left; margin: 0 auto;">
            <thead style="background-color: #b9cced;">
                <tr>
                  <td>Company</td>
                  <td>Grade</td>
                  <td>Type</td>
                  <td>Number students</td>
                  <td>Date</td>
                  <td>
                </tr>
            </thead>
            <tbody>
                @foreach($petitions as $petition)
                <tr>
                    <td>{{$petition->company->name }}</td>
                    <td>{{$petition->grade->name}}</td>
                    <td>{{$petition->type}}</td>
                    <td>{{$petition->n_students}}</td>
                    <td>{{$petition->created_at->format('Y-m-d')}}</td>
                    <td style="width:1%;"></td>
                </tr>
                @endforeach   
                <td></td><td></td><td></td><td></td>
                <td>
                <form action="{{route('pdf', ['type'=> 'date','to'=> $to, 'from' => $from ,'grade' => $grades2, 'typegrade' => $type])}}">
                    {{csrf_field()}}
                    <button  type="submit" class = "btn btn-primary"><span class="fas fa-print"></button>
                </form>
                </td>
                <td></td>
            </tbody>
        </table>  
        <br>
        
                         
</div>
<br>
<div style="width: 80%; text-align: center; margin: 0 auto;"> 
    <p style="font-size: 20px;">Petitions according to grade:</p>
    <br>
    <form method="POST" action="{{url('/listingGrades')}}">
        {{ csrf_field() }}
        Select grade:&nbsp;&nbsp;
        <select id="id_grade"  name="id_grade">
            @foreach($grades as $grade)
            <option value="{{$grade->id}}">{{$grade->name}}</option>
            @endforeach
        </select>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" class="btn btn-success"><span class="fas fa-search"></button>
        </form>
    <br>
    <br>
        <table class="table table-striped table-hover" style="width: 80%; text-align: left; margin: 0 auto;">
            <thead style="background-color: #b9cced;">
                <tr>
                  <td>Company</td>
                  <td>Grade</td>
                  <td>Type</td>
                  <td>Number students</td>
                  <td>Date</td>
                  <td>
                </tr>
            </thead>
            <tbody>
                @foreach($petitions2 as $petition2)
                <tr>
                    <td>{{$petition2->company->name }}</td>
                    <td>{{$petition2->grade->name}}</td>
                    <td>{{$petition2->type}}</td>
                    <td>{{$petition2->n_students}}</td>
                    <td>{{$petition2->created_at->format('Y-m-d')}}</td>
                    <td style="width:1%;">
                    </td>
                </tr>
                @endforeach   
                <td></td><td></td><td></td><td></td>
                <td>
                    <form action="{{route('pdf', ['type'=> 'grade','to'=> $to, 'from' => $from ,'grade' => $grades2, 'typegrade' => $type])}}">
                        {{csrf_field()}}
                        <button  type="submit" class = "btn btn-primary"><span class="fas fa-print"></button>
                    </form>
                </td>
                <td></td>
            </tbody>
        </table>  
        <br>
        <br>
        <br>
    </div>

<div style="width: 80%; text-align: center; margin: 0 auto;"> 
    <p style="font-size: 20px;">Petitions according to grade and type:</p>
    <br>
    <form method="POST" action="{{url('/listingGradesTypes')}}">
        {{ csrf_field() }}
        Select grade:&nbsp;&nbsp;
        <select id="id_grade"  name="id_grade" >
            @foreach($grades as $grade)
            <option value="{{$grade->id}}">{{$grade->name}}</option>
            @endforeach
        </select>
        &nbsp;&nbsp; Select type: &nbsp;&nbsp;
        <select id="type" name="type" value="{{ old('type') }}">
            <option>DUAL</option>
            <option>FCT</option>
            <option>CONTRATO</option>
        </select>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" class="btn btn-success"><span class="fas fa-search"></button>
        </form>
        
    <br>
    <br>
        <table class="table table-striped table-hover" style="width: 80%; text-align: left; margin: 0 auto;">
            <thead style="background-color: #b9cced;">
                <tr>
                    <td>Company</td>
                    <td>Grade</td>
                    <td>Type</td>
                    <td>Number students</td>
                    <td>Date</td>
                    <td>
                </tr>
            </thead>
            <tbody>
                @foreach($petitions3 as $petition3)
                <tr>
                    <td>{{$petition3->company->name }}</td>
                    <td>{{$petition3->grade->name}}</td>
                    <td>{{$petition3->type}}</td>
                    <td>{{$petition3->n_students}}</td>
                    <td>{{$petition3->created_at->format('Y-m-d')}}</td>
                    <td style="width:1%;"></td>

                </tr>
                @endforeach   
                <td></td><td></td><td></td><td></td>
                <td>
                    <form action="{{route('pdf', ['type'=> 'typegrade','to'=> $to, 'from' => $from ,'grade' => $grades2, 'typegrade' => $type])}}">
                        {{csrf_field()}}
                        <button  type="submit" class = "btn btn-primary"><span class="fas fa-print"></button>
                    </form>
                </td>
                <td></td>
            </tbody>
        </table>  
        <br>
        <br>
        <br>
</div>
@endsection