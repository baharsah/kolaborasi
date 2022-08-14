<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerguruanTinggiController extends Controller
{
    public function index() {
        $account = auth()->user();
        return view('perguruan_tinggi.profile', compact('account'));
    }
}
