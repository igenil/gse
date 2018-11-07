@extends('layouts.app')
@section('content')
<br>
<br>
<table class="table table-striped" style="width: 40%; text-align: left; margin: 0 auto;">
        <thead style="background-color: #b8cced;">
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
                <td><button class = "btn btn-secondary">Edit</button></td>
                <td>
                <form action="{{action('GradeController@destroy', $grade->id)}}" method="post">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                </td>
                </td>
            </tr>
            @endforeach   
            <td><button type="submit" class="btn btn-success">Add Grade</button></td>
            <td></td>
            <td></td>
        </tbody>
    </table>
    
<div>
@endsection