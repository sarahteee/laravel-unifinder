<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use App\Models\Country;
use App\Models\University;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('countries.index', [
            'countries' => Country::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('countries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCountryRequest $request)
    {
        Country::create($request->validated());
        return redirect()->route('countries.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        return view('countries.show', compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country)
    {
        return view('countries.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCountryRequest $request, Country $country)
    {
        $country->update($request->validated());
        return redirect()->route('countries.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($id)
    {
        Country::Destroy($id);
        return redirect()->route('countries.index');
    }

    public function destroy($id)
    {
        $country = Country::withTrashed()->where('id', $id)->first();
        $country->forceDelete();
        return redirect()->route('countries.index');
    }

    public function restore($id)
    {
        $country = Country::withTrashed()->where('id', $id)->first();
        $country->restore();
        return redirect()->route('countries.trashed');
    }
}
