<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function education()
    {
        return view('frontend.pages.education');
    }

    public function sanitation()
    {
        return view('frontend.pages.sanitation');
    }

    public function relief()
    {
        return view('frontend.pages.relief');
    }

    public function volunteers()
    {
        return view('frontend.pages.volunteers');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }
}
