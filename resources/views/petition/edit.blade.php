@extends('layouts.app')
@section('content')
<div style="width: 80%; text-align: left; margin: 0 auto;">
    <form method="POST" action="{{$petitions->id}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="id_company" class="col-md-12 control-label">
                {{ __("Company") }}
            </label>
            <input id="id_company" class="form-control" name="id_company" value="{{ $petitions->id_company }}" />
        </div>
        <div class="form-group">
            <label for="id_grade" class="col-md-12 control-label">
                {{ __("Grade") }}
            </label>
            <input id="id_grade" class="form-control" name="id_grade" value="{{ $petitions->id_grade }}" />
        </div>
        <div class="form-group">
            <label for="type" class="col-md-12 control-label">
                {{ __("Type") }}
            </label>
            <input id="type" class="form-control" name="type" value="{{ $petitions->id }}" />
        </div>
        <div class="form-group">
            <label for="n_Students" class="col-md-12 control-label">
                {{ __("Number Students") }}
            </label>
            <input id="n_Students" class="form-control" name="n_Students" value="{{ $petitions->n_Students }}" />
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