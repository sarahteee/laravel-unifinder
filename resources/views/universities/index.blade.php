@extends('layouts.admin');
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">
            View All Universities
        </h1>
    </div>
</div>
<div class="row">
    @foreach ($universities as $university)
    <div class="col-md-4">
        <div class="card p-3">
            <img src="{{ $university->imageURL ?: 'https://webcolours.ca/wp-content/uploads/2020/10/webcolours-unknown.png' }}" class="card-img-top" alt="Default Image">
            <div class="card-title">
                <h2>{{ $university->universityName }}</h2>
                <p>{{ $university->country->countryName ?? 'No Country' }}</p>
                <a href="{{ route('universities.edit', $university->id) }}" class="card-link">Edit</a>
                <a href="{{ route('universities.trash', $university->id) }}" class="card-link">Delete</a>
                <a href="{{ route('universities.show', $university->id) }}" class="card-link">Details</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection