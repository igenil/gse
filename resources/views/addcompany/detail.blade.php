<form method="POST" action="companies">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name" class="col-md-12 control-label">
            {{ __("Name") }}
        </label>
        <input id="name" class="form-control" name="name" value="{{ old('name') }}" />
    </div>
    <div class="form-group">
        <label for="city" class="col-md-12 control-label">
            {{ __("City") }}
        </label>
        <input id="city" class="form-control" name="city" value="{{
    old('city') }}" />
    </div>
    <div class="form-group">
        <label for="CP" class="col-md-12 control-label">
            {{ __("CP") }}
        </label>
        <input id="CP" class="form-control" name="CP" value="{{ old('CP') }}" />
    </div>
    <button type="submit" name="addcompany" class="btn btn-default">
        {{ __("Add Company") }}
    </button>
</form>
</div>
</div>