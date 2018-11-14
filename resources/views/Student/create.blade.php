@extends('layouts.app')
@section('content')
<div style="width: 80%; text-align: left; margin: 0 auto;">
    <form method="POST" action="{{url('/addstudent')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name" class="col-md-12 control-label">
                {{ __("Name") }}
            </label>
            <input id="name" class="form-control" name="name" value="{{ old('name') }}" />
        </div>
        <div class="form-group">
            <label for="lastname" class="col-md-12 control-label">
                {{ __("Lastname") }}
            </label>
            <input id="lastname" class="form-control" name="lastname" value="{{
        old('lastname') }}" />
        </div>
        <div class="form-group">
            <label for="age" class="col-md-12 control-label">
                {{ __("Age") }}
            </label>
            <input id="age" class="form-control" name="age" value="{{ old('age') }}" />
        </div>
        <label for="grade" class="col-md-12 control-label">
                {{ __("Grade") }}
        </label>        
        <select id="id_grade" class="form-control" name="id_grade">
            @foreach($grades as $grade)
            <option value="{{$grade->id}}">{{$grade->name}}</option>
            @endforeach
        </select>
        <br>
        <button type="submit" name="addstudent" class="btn btn-success">
            {{ __("Add Student") }}
        </button>
        &nbsp;&nbsp;&nbsp;
        <a href="{{ url('/student') }}">  
            <button type="button" class="btn btn-danger">Cancel</button>
        </a>
    </form>
    </div>
    </div>
</div>
@endsection