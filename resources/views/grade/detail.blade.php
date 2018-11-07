@extends('layouts.app')
@section('content')
<table class="table table-striped" style="width: 70%">
        <thead>
            <tr>
              <td>Name</td>
              <td>Level</td>
            </tr>
        </thead>
        <tbody>
            @foreach($grades as $grade)
            <tr>
                <td>{{$grade->name}}</td>
                <td>{{$grade->level}}</td>
                <td><button>Edit</button></td>
                <td><button>Delete</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
<div>
@endsection