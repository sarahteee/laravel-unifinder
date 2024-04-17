@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col">
        <h1>{{ $university->universityName }} Details</h1>
        <p>Country: {{ $university->country->countryName }}</p>
        <div>
            <h3>Statistics:</h3>
            <p>Year: {{ $university->year }}</p>
            <p>Number of Students: {{ $university->number_of_students }}</p>
            <p>Student to Staff Ratio: {{ $university->student_to_staff_ratio }}</p>
        </div>
    </div>
</div>
@endsection