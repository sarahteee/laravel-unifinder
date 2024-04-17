@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display2">
            Add a Country
        </h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <form action="{{ route('countries.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="countryName">Country Name</label>
                <input type="text" class="form-control" name="countryName" id="countryName" aria-describedby="countryName" placeholder="Country Name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection