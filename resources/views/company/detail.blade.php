@extends('layouts.app')
@section('content')
<br>
<br>
<table class="table table-striped table-hover" style="width: 80%; text-align: left; margin: 0 auto;">
        <thead style="background-color: #b9cced;">
            <tr>
              <td>Name</td>
              <td>City</td>
              <td>CP</td>
              <td>Options</td>
              <td>
            </tr>
        </thead>
        <tbody>
            @foreach($companies as $company)
            <tr>
                <td>{{$company->name}}</td>
                <td>{{$company->city}}</td>
                <td>{{$company->cp}}</td>
                <td><button class = "btn btn-secondary">Edit</button></td>
                <td>
                <form action="company/{{$company->id}}" method="post">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                </td>
                </td>
            </tr>
            @endforeach   
            <td><a href="{{ url('/addcompany') }}">
                    <button type="submit" class="btn btn-success">Add Company</button></td>
                </a>
            <td></td>
            <td></td>
            <td></td>
        </tbody>
    </table>
    
<div>
@endsection