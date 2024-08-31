<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller
{
    public function Index()
    {
        $allTags = Tag::orderBy('id', 'DESC')->get();
        return view('admin.pages.tag.index', compact('allTags'));
    }

    public function create(Request $request)
    {
        return view('admin.pages.tag.create_tag');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
        ]);

        Tag::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'order_by' => $request->order_by,
            'is_status' => $request->has('is_status') ? true : false

        ]);

        return redirect()->route('admin.tags.index');


        // $notification = [
        //     'message' => 'Page Created Successfully',
        //     'alert-type' => 'success',
        // ];

        // return redirect()->back()->with($notification);
    }

    public function edit(Tag $tag)
    {
        return view('admin.pages.tag.update_tag', compact('tag'));
    }

    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required|string|max:50',
        ]);

        $tag->update([

            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'order_by' => $request->order_by,
            'is_status' => $request->has('is_status') ? true : false
        ]);

        // return $request->all();
        // notyf()->addSuccess('Tag has been updated successfully.');
        return redirect()->route('admin.tags.index');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        // notyf()->error('Tag has been deleted successfully.');
        return redirect()->route('admin.tags.index');
    }
}
