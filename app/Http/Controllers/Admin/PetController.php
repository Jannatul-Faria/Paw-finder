<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pet;
use App\Models\City;
use App\Models\Species;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pets = Pet::withCount('cities')->orderBy('created_at', 'desc')->get();
        return view('admin.pages.pet.index', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     */
        public function create()
    {
        $categories = Category::all();
        $cities = City::all();
        $species = Species::all();
        return view('admin.pages.pet.create', compact('species', 'cities', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
        'name'=> 'required|string',
        'breed'=> 'required|string',
        'gender'=> 'required',
        'health_status'=> 'required',
        ]);


        $pet = new Pet();
        $pet->name = $request->name;
        $pet->breed = $request->breed;
        $pet->gender = $request->gender;
        $pet->health_status = $request->health_status;
        $pet->age = $request->age;
        $pet->special_needs = $request->special_needs;
        $pet->fee = $request->fee;
        $pet->details = $request->details;
        $pet->availability = 'available';
        $pet->user_id = 1;
        if ($request->hasFile('thumbnail')) {
            $pet->thumbnail = saveImage($request->thumbnail, '/uploads/pets/');
        }
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $image) {
                $images[] = saveImage($image, '/uploads/pets/');
            }
            $pet->images = json_encode($images);
        }
        $pet->save();
        if ($request->category_id) {
            $pet->categories()->attach($request->category_id);
        }
        if ($request->specie_id) {
            $pet->species()->attach($request->specie_id);
        }
        if ($request->city_id) {
            $pet->cities()->attach($request->city_id);
        }

        // notyf()->addSuccess('Pet has been created successfully.');
        return redirect()->route('admin.pets.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet)
    {
        $species = Species::all();
        return view('admin.pages.pet.show', compact('pet', 'species'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet $pet)
    {
        dd($pet);
        return view('admin.pages.pet.update_pet', compact('pet'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pet $pet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet)
    {
        $pet->categories()->detach();
        $pet->city()->detach();
        $pet->specie()->detach();
        if ($pet->thumbnail) {
            deleteImage($pet->thumbnail);
        }
        if ($pet->images) {
            $images = json_decode($pet->images);
            foreach ($images as $image) {
                deleteImage($image);
            }
        }
        // $pet->delete();
        // return success('Pet has been deleted successfully.');
         $pet->delete();

        notyf()->addSuccess('Pet has been deleted successfully.');
        return redirect()->route('admin.pages.pet.index');
    }
}