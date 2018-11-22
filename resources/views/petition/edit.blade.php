@extends('layouts.app')
@section('content')
@if (count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
@endif
<div style="width: 80%; text-align: left; margin: 0 auto;">
    <form method="POST" action="{{$petitions->id}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="id_company" class="col-md-12 control-label">
                {{ __("Company") }}
            </label>
            <select  id="id_company" class="form-control" name="id_company">
                @foreach($companies as $company)
                <option value="{{$company->id}}">{{$company->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_grade" class="col-md-12 control-label">
                {{ __("Grade") }}
            </label>
            <select  id="id_grade" class="form-control" name="id_grade">
                @foreach($grades as $grade)
                <option value="{{$grade->id}}">{{$grade->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="type" class="col-md-12 control-label">
                {{ __("Type") }}
            </label>
            <select id="type" class="form-control" name="type" value="{{ old('type') }}">
                <option>DUAL</option>
                <option>FCT</option>
                <option>CONTRATO</option>
            </select>
        </div>
        <div class="form-group">
            <label for="n_students" class="col-md-12 control-label">
                {{ __("Number Students") }}
            </label>
            <input id="n_students" class="form-control" name="n_students" type='number' min='1' value="{{ $petitions->n_students }}" />
        </div>
    <table>
        <button type="submit" name="addpetition" class="btn btn-success">
            {{ __("Edit Petition") }}
        </button>   
    </form>
    &nbsp;&nbsp;&nbsp;
    <a href="{{ url('/petition') }}">  
        <button type="button" class="btn btn-danger">Cancel</button>
    </a>
    </table>
</div>
</div>
</div>
@endsection