<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function perguruanTinggiHome()
    {
        $account = auth()->user();
        return view('perguruan_tinggi.home', compact('account'));
    }

    public function industriHome()
    {
        $account = auth()->user();
        return view('industri.home', compact('account'));
    }
}
