@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">
            Add a University
        </h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <form action="{{ route('universities.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="universityName">University Name</label>
                <input type="text" class="form-control" name="universityName" id="universityName" aria-describedby="universityName" placeholder="University Name">
            </div>
            <div class="form-group">
                <label for="imageURL">University Image URL</label>
                <input type="text" class="form-control" name="imageURL" id="imageURL" aria-describedby="imageURL" placeholder="University Image URL">
            </div>
            <div class="form-group">
                <label for="country_id">Country</label>
                <select name="country_id" id="country_id" class="form-control">
                    @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->countryName }}</option>
                    @endforeach
                </select>
            </div>
            <!-- university statistics -->
            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" class="form-control" name="year" id="year" placeholder="Year">
            </div>
            <div class="form-group">
                <label for="number_of_students">Number of Students</label>
                <input type="number" class="form-control" name="number_of_students" id="number_of_students" placeholder="Number of Students">
            </div>
            <div class="form-group">
                <label for="student_to_staff_ratio">Student to Staff Ratio</label>
                <input type="text" class="form-control" name="student_to_staff_ratio" id="student_to_staff_ratio" placeholder="Student to Staff Ratio">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection