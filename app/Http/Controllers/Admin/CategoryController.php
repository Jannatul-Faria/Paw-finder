<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.pages.category.category_list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.category.create_category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();

        // Category Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image',
            'remarks' => 'nullable|string',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $image = $request->image;
            $imageName = saveImage($image, '/uploads/category/');
        }

        Category::create([
            'name' => $request->name,
            'image' => $imageName,
            'slug' => Str::slug($request->name),
            'remarks' => $request->remarks,
        ]);

        // notyf()->addSuccess('Category has been created successfully.');
        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        // $categories = Category::all();
        return view('admin.pages.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        // Category Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image',
            'remarks' => 'nullable|string',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $imageName = saveImage($request->file('image'), '/uploads/category/');
            if ($category->image && $category->image !== $imageName) {
                File::delete(public_path($category->image));
            }
        } else {
            $imageName = $category->image;
        }

        if ($imageName) {
            $category->image = $imageName;
        }
        $category->update([
            'name' => $request->name,
            'image' => $imageName,
            'slug' => Str::slug($request->name),
            'remarks' => $request->remarks,
        ]);

        // notyf()->addSuccess('Category has been updated successfully.');
        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        // notyf()->addSuccess('Category has been deleted successfully.');
        return redirect()->route('admin.categories.index');
    }
}