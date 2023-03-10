<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'active' => 'index',
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'active' => 'contact',
        ]);
    }

    public function services()
    {
        return view('services', [
            'active' => 'services',
        ]);
    }
}
