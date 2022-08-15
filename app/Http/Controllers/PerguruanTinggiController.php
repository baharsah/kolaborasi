<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PerguruanTinggiController extends Controller
{
    public function edit($id) {
        $account = auth()->user();
        return view('perguruan_tinggi.profile', compact('account'));
    }

    public function update($id, Request $request) {
        $user = User::find($id);
        $user->update($request->except(['_token','submit']));
        return redirect()->route('perguruan_tinggi.profile', ['id' => $id]);
    }

    public function submissionPage($id) {
        return view('perguruan_tinggi.submission');
    }

    public function submission($id) {
        return redirect()->route('perguruan_tinggi.home');
    }
}
