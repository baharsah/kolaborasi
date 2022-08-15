<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class IndustriController extends Controller
{
    public function edit($id) {
        $account = auth()->user();
        return view('industri.profile', compact('account'));
    }

    public function update($id, Request $request) {
        $user = User::find($id);
        $user->update($request->except(['_token','submit']));
        return redirect()->route('industri.home');
    }

    public function submissionPage($id) {
        return view('industri.submission');
    }

    public function submission($id) {
        return redirect()->route('industri.home');
    }
}
