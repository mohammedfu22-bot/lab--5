<?php

namespace App\Http\Controllers;

use App\Models\Organization;

class HelloController extends Controller
{
    public function index()
    {
        return 'أهلا بك في إبرام (من الـ Controller)';
    }

    public function organizations()
    {
        return Organization::all();
    }

    public function show($slug)
    {
        return Organization::where('slug', $slug)->firstOrFail();
    }
}