<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebfolioController extends Controller
{
    public function introduction()
    {
        return view('webfolio.introduction');
    }

    public function company()
    {
        return view('webfolio.company');
    }

    public function contact()
    {
        return view('webfolio.contact');
    }

    public function recruit()
    {
        return view('webfolio.recruit');
    }

    public function news()
    {
        return view('webfolio.news');
    }
    
    public function about()
    {
        return view('webfolio.about');
    }

    public function insight()
    {
        return view('webfolio.insight');
    }

    public function expert()
    {
        return view('webfolio.expert');
    }

    public function privacy()
    {
        return view('webfolio.privacy');
    }

    public function security()
    {
        return view('webfolio.security');
    }

    public function compliance()
    {
        return view('webfolio.compliance');
    }
}