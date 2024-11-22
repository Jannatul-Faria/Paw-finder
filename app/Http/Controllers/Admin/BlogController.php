<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::with('category')->latest()->get();
        // $categories = Category::get();
        $settings = setting();
        return view('admin.pages.blog.blog_list', compact('blogs','settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $blogs = Blog::all();
        $categories = Category::all();
        return view('admin.pages.blog.create_blog', compact('blogs', 'categories'));

    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->image;
            $imageTitle = saveImage($image, '/uploads/blogs/');
        }

        Blog::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'image' => $imageTitle,
            'description' => $request->description,
        ]);

        notyf()->addSuccess('Blog has been created successfully.');
        return redirect()->route('admin.blogs.index');
    }



    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $categories = Category::all();
        return view('admin.pages.blog.edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {

        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {

            $imageName = saveImage($request->file('image'), '/uploads/blogs/');
            if ($blog->image && $blog->image !== $imageName) {
                File::delete(public_path($blog->image));
            }

        } else {
            $imageName = $blog->image;
        }

        if ($imageName) {
            $blog->image = $imageName;
        }

        $blog->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'image' => $imageName,
            'description' => $request->description,
        ]);

        // return $request->all();
        notyf()->addSuccess('Blog has been updated successfully.');
        return redirect()->route('admin.blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        notyf()->addSuccess('Blog has been deleted successfully.');
        return redirect()->back();

    }
}