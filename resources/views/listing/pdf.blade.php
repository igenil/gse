@extends('layouts.app3')

@section('content')
<div style="text-align:center;">
    <h1>PETITIONS LIST</h1>
</div>
<br>
<table class="table table-striped table-hover" style="width: 80%; text-align: left; margin: 0 auto;">
        <thead>
                <tr>
                        <td>Company</td>
                        <td>Grade</td>
                        <td>Type</td>
                        <td>Nº students</td>
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
@endsection