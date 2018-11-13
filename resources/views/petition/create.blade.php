@extends('layouts.app')
@section('content')
<div style="width: 80%; text-align: left; margin: 0 auto;">
    <form method="POST" action="{{url('/addpetition')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="id_company" class="col-md-12 control-label">
                {{ __("Company") }}
            </label>
            <input id="id_company" class="form-control" name="id_company" value="{{ old('id_company') }}" />
        </div>
        <div class="form-group">
            <label for="id_grade" class="col-md-12 control-label">
                {{ __("Grade") }}
            </label>
            <input id="id_grade" class="form-control" name="id_grade" value="{{
        old('id_grade') }}" />
        </div>
        <div class="form-group">
            <label for="type" class="col-md-12 control-label">
                {{ __("Type") }}
            </label>
            <input id="type" class="form-control" name="type" value="{{
        old('type') }}" />
        </div>
        <div class="form-group">
            <label for="n_students" class="col-md-12 control-label">
                {{ __("Number Students") }}
            </label>
            <input id="n_students" class="form-control" name="n_students" value="{{
        old('n_students') }}" />
        </div>
    <table>
        <button type="submit" name="addpetition" class="btn btn-success">
            {{ __("Add Petition") }}
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