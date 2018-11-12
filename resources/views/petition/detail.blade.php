@extends('layouts.app')
@section('content')
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
                <td>{{$petition->id_company}}</td>
                <td>{{$petition->id_grade}}</td>
                <td>{{$petition->type}}</td>
                <td>{{$petition->n_Students}}</td>
                <td>{{$petition->created_at}}</td>
                <td style="width:1%;">
                <a href="editgrade/{{$grade->id}}">
                    <button class = "btn btn-primary"><span class="fas fa-pencil-alt" ></button></td>
                </a>
                <td style="width:1%;">
                <form action="grade/{{ $grade->id}}" method="post">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                    <button class="btn btn-danger" type="submit"><span class="fas fa-trash-alt" ></button>
                </form>
                </td>
                </td>
            </tr>
            @endforeach   
            <td>
                <a href="{{ url('/addgrade') }}">  
                    <button type="submit" class="btn btn-success">Add Grade</button>
                </a>
            </td>
            <td></td>
            <td></td>
            <td></td>
        </tbody>
    </table>
    
<div>
@endsection