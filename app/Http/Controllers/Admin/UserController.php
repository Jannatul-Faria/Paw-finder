<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('role')->where('role_id', 2)->get();
        $settings = setting();
        return view('admin.pages.users.index', compact('users','settings'));
    }

    public function create()
    {
        return view('admin.pages.users.create');
    }
}