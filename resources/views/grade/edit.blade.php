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
    <form method="POST" action="{{$grades->id}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name" class="col-md-12 control-label">
                {{ __("Name") }}
            </label>
            <input id="name" class="form-control" name="name" value="{{ $grades->name }}" />
        </div>
        <div class="form-group">
            <label for="level" class="col-md-12 control-label">
                {{ __("Level") }}
            </label>
            <input id="level" class="form-control" name="level" value="{{$grades->level }}" />
        </div>
    <table>
        <button type="submit" name="addgrade" class="btn btn-success">
            {{ __("Edit Grade") }}
        </button>   
    </form>
    &nbsp;&nbsp;&nbsp;
    <a href="{{ url('/grade') }}">  
        <button type="button" class="btn btn-danger">Cancel</button>
    </a>
    </table>
</div>
</div>
</div>
@endsection