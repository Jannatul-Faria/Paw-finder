<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BrandController extends Controller
{

    public function Index()
    {
        $allBrand = Brand::all();
        $settings = setting();
        return view('admin.pages.brand.index', compact('allBrand','settings'));
    }

    public function create(Request $request)
    {
        return view('admin.pages.brand.create');
    }

    public function store(Request $request)
    {

        $imageName = null;

        if ($request->hasFile('image')) {
            $image = $request->image;
            $imageName = saveImage($image, '/uploads/brand/');
        }

        $request->validate([
            'name' => 'required|string|max:300',
            'url' => Brand::STRING_MAX_300,
            'remark' => Brand::STRING_MAX_300,
        ]);

        Brand::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'url' => $request->url,
            'image' => $imageName,
            'remark' => $request->remark,
            'order_by' => $request->order_by,
            'is_feature' => $request->has('is_feature') ? true : false,
            'is_status' => $request->has('is_status') ? true : false
        ]);

        // notyf()->addSuccess('Brand created successfully.');
        return redirect()->route('admin.brands.index');
    }

    //    public function BrandDelete(Request $request)
//     {
//         $brand_id = $request->input('id');
//         $user_id = $request->header('id');
//         $filePath = $request->input('file_path');
//         File::delete($filePath);
//         return Brand::where('id', '=', $brand_id)->where('user_id', '=', $user_id)->delete();
//     }


    public function edit(Brand $brand)
    {
        return view('admin.pages.brand.update', compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {
        $imageTitle = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageTitle = saveImage($image, '/uploads/brand/');
        }

        if ($imageTitle) {
            $brand->image = $imageTitle;
        }

        $request->validate([
            'name' => 'required|string|max:300',
            'url' => 'string|max:300',
            'image' => 'string|max:300',
            'remark' => 'string|max:300',
        ]);

        $brand->update([

            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'url' => $request->url,
            'remark' => $request->remark,
            'order_by' => $request->order_by,
            'is_feature' => $request->has('is_feature') ? true : false,
            'is_status' => $request->has('is_status') ? true : false
        ]);

        // return $request->all();
        // notyf()->addSuccess('Brand has been updated successfully.');
        return redirect()->route('admin.brands.index');
    }


    public function destroy(Brand $brand)
    {
        $brand->delete();

        // notyf()->addSuccess('Brand has been deleted successfully.');
        return redirect()->route('admin.brands.index');
    }

    //    public function BrandUpdate(Request $request)
//     {
//         $user_id = $request->header('id');
//         $brand_id = $request->input('id');

    //         if($request->hasFile('img')) {
//             $img = $request->file('img');
//             $time= time();
//             $file_name = $img->getClientOriginalName();
//             $img_name = "{$user_id}_{$time}_{$file_name}";
//             $img_url = "/uploads/brand/{$img_name}";
//             $img->move(public_path('/uploads/brand'), $img_url);

    //             $filePath = $request->input('file_path');
//             File::delete($filePath);

    //             return Brand::where('id', '=', $brand_id)->where('user_id', '=', $user_id)->
//                 update([
//                     'name' => $request->input('name'),
//                     'slug' => $request->input('slug'),
//                     'url' => $request->input('url'),
//                     'image' => $img_url,
//                     'remark' => $request->input('remark'),
//                     'order_by' => $request->input('order_by'),
//                     'is_feature' => $request->boolean('is_feature'),
//                     'status' => $request->boolean('status'),

    //                 ]);
//         } else {
//             return Brand::where('id', $brand_id)->where('user_Id', $user_id)->update([
//                 'name' => $request->input('name'),
//                 'slug' => $request->input('slug'),
//                 'url' => $request->input('url'),
//                 'remark' => $request->input('remark'),
//                 'order_by' => $request->input('order_by'),
//                 'is_feature' => $request->boolean('is_feature'),
//                 'status' => $request->boolean('status'),
//             ]);
//         }
//     }
}