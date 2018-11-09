@extends('layouts.app')
@section('content')
<br>
<br>
<table class="table table-striped table-hover" style="width: 80%; text-align: left; margin: 0 auto;">
        <thead style="background-color: #b9cced;">
            <tr>
              <td>Name</td>
              <td>Level</td>
              <td>Options</td>
              <td>
            </tr>
        </thead>
        <tbody>
            @foreach($grades as $grade)
            <tr>
                <td>{{$grade->name}}</td>
                <td>{{$grade->level}}</td>
                <td>
                <a href="editgrade/{{$grade->id}}">
                    <button class = "btn btn-secondary">Edit</button></td>
                </a>
                <td>
                <form action="grade/{{ $grade->id}}" method="post">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                    <button class="btn btn-danger" type="submit">Delete</button>
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