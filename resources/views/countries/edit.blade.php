@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display2">
            Update Country
        </h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <form action="{{ route('countries.update', $country-> id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="countryName">Country Name</label>
                <input type="text" class="form-control" name="countryName" id="countryName" aria-describedby="countryName" value="{{ $country-> countryName}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection