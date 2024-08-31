<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pet;
use App\Models\Blog;
use App\Models\City;
use App\Models\User;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use App\Http\Controllers\Controller;
use App\Models\Adoption;
use App\Models\Subscribe;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data['adoptions'] = Adoption::all();
        $data['users'] = User::all();
        $data['allBrand'] = Brand::all();
        $data['blogs'] = Blog::all();
        $data['categories'] = Category::all();
        $data['cities'] = City::all();
        $data['pets'] = Pet::all();
        $data['subscribers'] = Subscribe::all();

        return view('admin.pages.dashboard')->with($data);
       
    }
    public function generalSetting(){
        $setting = GeneralSetting::first();
        return view('admin.pages.settings.setting',compact('setting'));
    }

    public function general_settings_update(Request $request)
    {
        if ($request->hasFile('site_logo')) {
            $site_logo = saveImage($request->file('site_logo'), '/uploads/site_logo/');
        }else {
            $site_logo = GeneralSetting::first()->site_logo;
        }
        if ($request->hasFile('site_favicon')) {
            $site_favicon = saveImage($request->file('site_favicon'), '/uploads/site_favicon/');
        }else {
            $site_favicon = GeneralSetting::first()->site_favicon;
        }
        if ($request->hasFile('default_pet_image')) {
            $default_pet_image = saveImage($request->file('default_pet_image'), '/uploads/default_pet_image/');
        }else {
            $default_pet_image = GeneralSetting::first()->default_pet_image;
        }


       $request->validate([
            'site_title' => 'required',
            'site_email' => 'required|email',
            'site_phone' => 'required',
            'site_address' => 'required',
        ]);

        GeneralSetting::first()->update([
            'site_title' => $request->site_title,
            'site_logo' => $site_logo,
            'site_favicon' => $site_favicon,

            'site_footer' => $request->site_footer,
            'site_description' => $request->site_description,
            'site_keywords' => $request->site_keywords,
            'site_author' => $request->site_author,
            
            'site_url' => $request->site_url,
            'site_email' => $request->site_email,
            'site_phone' => $request->site_phone,
            'site_address' => $request->site_address,
            'site_fax' => $request->site_fax,
            'adoption_form_url' => $request->adoption_form_url,
            'contact_form_email' => $request->contact_form_email,
            'default_pet_image' => $default_pet_image,
            'facebook_url' => $request->facebook_url,
            'twitter_url' => $request->twitter_url,
            'instagram_url' => $request->instagram_url,
            'linkedin_url' => $request->linkedin_url,
            'map_api_key' => $request->map_api_key,
            'default_country' => $request->default_country,
            'default_currency' => $request->default_currency,
            'default_distance_unit' => $request->default_distance_unit,
           

        ]);
        notyf()->addSuccess('General Setting has been udated successfully.');
        return redirect()->route('admin.dashboard');

    }
}