<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = City::withCount('pets')->get();
        $settings = setting();
        return view('admin.pages.city.city_list', compact('cities','settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.city.create_city');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // city Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required',
            'remarks' => 'nullable|string',
        ]);

        city::create([
            'name' => $request->name,
            'code' => $request->code,
            'slug' => Str::slug($request->name),
            'remarks' => $request->remarks,
        ]);


        notyf()->addSuccess('City has been created successfully.');
        return redirect()->route('admin.cities.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        return view('admin.pages.city.edit', compact('city'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, City $city)
    {
        $city->update($request->all());

        notyf()->addSuccess('city has been updated successfully.');
        return redirect()->route('admin.cities.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        $city->delete();

        notyf()->addSuccess('city has been deleted successfully.');
        return redirect()->route('admin.cities.index');
    }
}