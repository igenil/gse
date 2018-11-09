@extends('layouts.app')
@section('content')
<div style="width: 80%; text-align: left; margin: 0 auto;">
    <form method="POST" action="{{$company->id}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name" class="col-md-12 control-label">
                {{ __("Name") }}
            </label>
            <input id="name" class="form-control" name="name" value="{{ $company->name }}" />
        </div>
        <div class="form-group">
            <label for="city" class="col-md-12 control-label">
                {{ __("City") }}
            </label>
            <input id="city" class="form-control" name="city" value="{{$company->city }}" />
        </div>
        <div class="form-group">
            <label for="cp" class="col-md-12 control-label">
                {{ __("CP") }}
            </label>
            <input id="cp" class="form-control" name="cp" value="{{$company->cp }}" />
        </div>
    <table>
        <button type="submit" name="editcompany" class="btn btn-success">
            {{ __("Edit Company") }}
        </button>   
    </form>
    &nbsp;&nbsp;&nbsp;
    <a href="{{ url('/company') }}">  
        <button type="button" class="btn btn-danger">Cancel</button>
    </a>
    </table>
</div>
</div>
</div>
@endsection