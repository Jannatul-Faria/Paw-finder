<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use Illuminate\Http\Request;

class AdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adoptions = Adoption::all();
        return view('admin.pages.adoptionRequest.index', compact('adoptions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //
    }



    /**
     * Display the specified resource.
     */
    public function show(Adoption $adoption)
    {
        return view('admin.pages.adoptionRequest.show', compact('adoption'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Adoption $adoption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Adoption $adoption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adoption $adoption)
    {
        $adoption->delete();

        notyf()->addSuccess('Adoption has been deleted successfully.');
        return redirect()->back();
    }

    public function status(Request $request, Adoption $adoption)
    {
        $adoption->status = $request->status;
        if ($request->status == 'accepted') {
            $adoption->date_of_adoption = now()->format('Y-m-d');
            $adoption->end_date = now()->addDays($adoption->tenure)->format('Y-m-d');
        }else {
        $adoption->date_of_adoption = null;
        $adoption->end_date = null;
    }
        $adoption->update();

        notyf()->addSuccess('Adoption has been updated successfully.');
        return redirect()->back();
    }
}