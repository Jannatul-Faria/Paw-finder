<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function Index()
    {
        $allPage = Page::all();
        return view('admin.pages.page.index', compact('allPage'));
    }

    public function create(Request $request)
    {
        return view('admin.pages.page.create_page');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:300',
            'content' => 'required|string',
            'url'=> 'string|max:300'
        ]);

        Page::create([
            'name' => $request->name,
            'content' => $request->content,
            'slug' => Str::slug($request->name),
            'url' => $request->url,
            'is_status' => $request->has('is_status') ? true : false

        ]);
        session()->flash('success', 'Page Created Successfully.');
        return redirect()->route('admin.pages.index');


        // $notification = [
        //     'message' => 'Page Created Successfully',
        //     'alert-type' => 'success',
        // ];

        // return redirect()->back()->with($notification);
    }

    public function edit(Page $page)
    {
        // dump($page);
        return view('admin.pages.page.update_page', compact('page'));
    }

    public function update(Request $request, Page $page)
    {

        $request->validate([
            'name' => 'required|string|max:300',
            'content' => 'required|string'
        ]);

        $page->update([

            'name' => $request->name,
            'content' => $request->content,
            'slug' => Str::slug($request->name, '-'),
            'url' => $request->url,
            'is_status' => $request->has('is_status') ? true : false
        ]);

        // return $request->all();
        // notyf()->addSuccess('Page has been updated successfully.');
        return redirect()->route('admin.pages.index');
    }

    public function destroy(Page $page)
    {
        $page->delete();

        notyf()->addSuccess('Page has been deleted successfully.');
        return redirect()->route('admin.pages.index');
    }
}