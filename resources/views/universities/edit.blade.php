@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col">
        <h1 class="display2">
            Update University
        </h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <form action="{{ route('universities.update', $university->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="universityName">University Name</label>
                <input type="text" class="form-control" name="universityName" id="universityName" value="{{ $university->universityName }}">
            </div>
            <div class="form-group">
                <label for="imageURL">University Image URL</label>
                <input type="text" class="form-control" name="imageURL" id="imageURL" value="{{ $university->imageURL }}">
            </div>
            <div class="form-group">
                <label for="country_id">Country</label>
                <select name="country_id" id="country_id" class="form-control">
                    @foreach ($countries as $country)
                    <option value="{{ $country->id }}" {{ $university->country_id == $country->id ? 'selected' : '' }}>{{ $country->countryName }}</option>
                    @endforeach
                </select>
            </div>
            <!-- university statistics -->
            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" class="form-control" name="year" id="year" value="{{ $university->year }}">
            </div>
            <div class="form-group">
                <label for="number_of_students">Number of Students</label>
                <input type="number" class="form-control" name="number_of_students" id="number_of_students" value="{{ $university->number_of_students }}">
            </div>
            <div class="form-group">
                <label for="student_to_staff_ratio">Student to Staff Ratio</label>
                <input type="text" class="form-control" name="student_to_staff_ratio" id="student_to_staff_ratio" value="{{ $university->student_to_staff_ratio }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection