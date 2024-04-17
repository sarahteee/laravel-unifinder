@extends('layouts.admin');
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">
            View All Countries
        </h1>
    </div>
</div>
<div class="row">
    @foreach ($countries as $country)
    <div class="col-md-4">
        <div class="card p-3">
            <div class="card-title">
                <h2>{{ $country -> countryName }}</h2>
                <a href="{{ route('countries.edit', $country -> id ) }}" class="card-link">Edit</a>
                <a href="{{ route('countries.trash', $country -> id ) }}" class="card-link">Delete</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection