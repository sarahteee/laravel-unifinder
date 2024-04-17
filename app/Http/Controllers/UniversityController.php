<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUniversityRequest;
use App\Http\Requests\UpdateUniversityRequest;
use App\Models\University;
use App\Models\Country;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universities = University::with('country')->get();
        return view('universities.index', compact('universities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();
        return view('universities.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUniversityRequest $request)
    {
        $university = University::create($request->validated() + [
            'country_id' => $request->countryName
        ]);
        return redirect()->route('universities.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $university = University::with('statistics', 'country')->findOrFail($id);
        return view('universities.show', compact('university'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(University $university)
    {
        $countries = Country::all();  // Fetch all countries
        return view('universities.edit', compact('university', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUniversityRequest $request, University $university)
    {
        $university->update($request->validated());
        return redirect()->route('universities.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($id)
    {
        University::Destroy($id);
        return redirect()->route('universities.index');
    }

    public function destroy($id)
    {
        $country = University::withTrashed()->where('id', $id)->first();
        $country->forceDelete();
        return redirect()->route('universities.index');
    }

    public function restore($id)
    {
        $country = University::withTrashed()->where('id', $id)->first();
        $country->restore();
        return redirect()->route('universities.trashed');
    }
}
