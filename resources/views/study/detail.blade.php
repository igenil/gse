@extends('layouts.app2')
@section('content')
<br>
<br>
<table class="table table-striped table-hover" style="width: 80%; text-align: left; margin: 0 auto;">
        <thead style="background-color: #b9cced;">
            <tr>
              <td>Student</td>
              <td>Grade</td>
              <td>Options</td>
            </tr>
        </thead>
        <tbody>
            @foreach($studies as $study)
            <tr>
                <td>{{$study->student->name}}</td>
                <td>{{$study->grade->name}}</td>
                <td style="width:1%;">
                    <form action="{{route('deleteStudy',['id'=> $study->id])}}" method="post">
                        {{ csrf_field() }}
                    <button onclick="return confirm('Are you sure?')"class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></span></button>
                    </form>
                </td>
                </td>
            </tr>
            @endforeach   
            <td>
                <a href="{{ url('/student') }}">
                    <button type="submit" class="btn btn-success">Back</button></td>
                </a>
            <td></td>
            <td></td>
        </tbody>
    </table>
    
<div>
@endsection