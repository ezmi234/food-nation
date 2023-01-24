<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function index($page = 'home')
    {
        if ($page == 'home') {
            return view('home');
        } elseif ($page == 'profile') {
            return view('profile.profile');
        } elseif ($page == 'contact') {
            return view('contact');
        } else {
            return view('404');
        }
    }
}
