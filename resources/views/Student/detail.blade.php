@extends('layouts.app')
@section('content')
<br>
<br>
<table class="table table-striped table-hover" style="width: 80%; text-align: left; margin: 0 auto;">
        <thead style="background-color: #b9cced;">
            <tr>
              <td>Name</td>
              <td>LastName</td>
              <td>Age</td>
              <td>Options</td>
              <td>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->lastname}}</td>
                <td>{{$student->age}}</td>
                <td style="width:1%;">
                    <a href="editstudent/{{$student->id}}">
                        <button class = "btn btn-primary"><span class="fas fa-pencil-alt" ></span></button>
                    </a>
                </td>
                <td style="width:1%;">
                <form action="student/{{$student->id}}" method="post">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                    <button class="btn btn-danger" type="submit"><span class="fas fa-trash-alt" ></span></button>
                </form>
                </td>
                </td>
            </tr>
            @endforeach   
            <td><a href="{{ url('/addstudent') }}">
                    <button type="submit" class="btn btn-success">Add Student</button></td>
                </a>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tbody>
    </table>
    
<div>
@endsection