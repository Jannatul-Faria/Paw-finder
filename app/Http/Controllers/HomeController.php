<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Blog;
use App\Models\City;
use App\Models\Page;
use App\Models\Brand;
use App\Models\Adoption;
use App\Models\Category;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

    /*
========================================= home function ==============================================
    **/
    public function home()
    {
        $data['pages'] = Page::all();
        $data['allBrand'] = Brand::all();
        $data['blogs'] = Blog::limit(3)->latest()->get();
        $data['categories'] = Category::all();
        $data['cities'] = City::all();
        $data['pets'] = Pet::with('cities')->limit(4)->latest()->get();
        $data['settings'] = setting();

        return view('frontend.pages.home')->with($data);
    }
 /*
========================================= pets function ==============================================
    **/
    public function pets()
    {
        $data['pets'] = Pet::limit(6)->latest()->get();
        // $data['allBrand'] = Brand::all(); 
        // $data['blogs'] = Blog::limit(3)->latest()->get();
        $data['categories'] = Category::withCount('pets')->get();
        $data['cities'] = City::withCount('pets')->get();
       
        $data['settings']=setting();

        return view('frontend.pages.pets')->with($data);
    }
 /*
========================================= singlePet function ==============================================
    **/
    public function singlePet(Pet $pet)
    {
        $cities = city::get();
        $settings = setting();

        return view('frontend.pages.single_pet', compact(['pet', 'cities', 'settings']));
        // $data['pets'] = Pet::get();
        // $data['cities'] = City::get();
        // $data['settings']=setting();

        // return view('frontend.pages.single_pet')->with($data);

    }
 /*
========================================= blogs function ==============================================
    **/
    public function blogs()
    {
        // $data['allBrand'] = Brand::all();
        $data['blogs'] = Blog::latest()->limit(4)->get();
        $data['categories'] = Category::limit(5)->inRandomOrder()->get();
        // $data['cities'] = City::all();
        // $data['pets'] = Pet::latest()->get();
        $data['settings'] = setting();

        return view('frontend.pages.blogs')->with($data);
    }
 /*
========================================= singleBlog function ==============================================
    **/
    public function singleBlog(Blog $blog)
    {
        $categories = Category::limit(5)->inRandomOrder()->get();
        $settings = setting();
        return view('frontend.pages.single_blog', compact('blog', 'categories','settings'));
    }
 /*
========================================= aboutUs function ==============================================
    **/
    public function aboutUs()
    {

        $data['pets'] = Pet::count();
        $data['blogs'] = Blog::count();
        $data['categories'] = Category::count();
        $data['cities'] = City::count();
       
        $data['settings'] = setting();

        return view('frontend.pages.about_us')->with($data);
        
    }
 /*
========================================= contactUs function ==============================================
    **/
    public function contactUs()
    {
        $data['settings'] = setting();
        return view('frontend.pages.contact_us')->with($data);
    }
     /*
========================================= userDashboard function ==============================================
    **/
    public function userDashboard()
    {
        $adoptions = Adoption::where('adopter_id', Auth::user()->id)->get();

        return view('frontend.pages.dashboard', compact('adoptions'));
    }
     /*
========================================= singlePage function ==============================================
    **/
    public function singlePage($slug)
    {
        $page = Page::where('slug', $slug)->first();
        return view('frontend.pages.single_page', compact('page'));
    }
 /*
========================================= adoptionStore function ==============================================
    **/
    public function adoptionStore(Request $request)
    {
        $request->validate([
            'city_id' => 'required|exists:cities,id',
            'end_date' => 'nullable|date',
            'message' => 'nullable|string',
            'tenure' => 'required|integer|min:30',
        ]);

        Adoption::create([
            'pet_id' => $request->pet_id,
            'adopter_id' => auth()->user()->id,
            'adoption_id' => 1,
            'city_id' => $request->city_id,
            'message' => $request->message,
            'tenure' => $request->tenure,

        ]);

        notyf()->addSuccess('Requested successfully.');
        return redirect()->route('user-dashboard');
    }
   
 /*
========================================= profileUpdate function ==============================================
    **/
    public function profileUpdate(){
        return view('profile.partials.update-profile-information-form');
    }

     /*
========================================= profileStore function ==============================================
    **/
     public function profileStore(Request $request){
        if ($request->hasFile('image')) {
            deleteImage(Auth::user()->image);
            $image = saveImage($request->file('image'), '/uploads/profiles/');
        }else{
            $image = Auth::user()->image ?? null;
        }

        $request->validate([
                'name' => 'required',
                'email' => 'required',
                
        ]);

        if (Auth::user()) {
            
            Auth::user()->update([
                
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'dob' => Carbon::parse($request->dob)->format('Y-m-d'),
                'gender' => $request->gender,
                'phone' => $request->phone,
                'image' => $image,
            ]);
        } else {
             Auth::user()->create([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'dob' => Carbon::parse($request->dob)->format('Y-m-d'),
                'gender' => $request->gender,
                'phone' => $request->phone,
                'image' => $image,
            ]);
        }
        notyf()->addSuccess('Profile has been update successfully.');
        return redirect()->route('profile.update');
    }

     /*
========================================= chengePassword function ==============================================
    **/
    public function chengePassword(Request $request){
        $request->validate([
            'current_password' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if (!Hash::check($request->current_password,auth()->user()->password)) {
            notyf()->addError('Password does not match.');
            return redirect()->back();
        }
        auth()->user()->update([
            'password'=>Hash::make($request->password),
        ]);
         notyf()->addSuccess('Password change successfully.');
        return redirect()->back();
    }
}