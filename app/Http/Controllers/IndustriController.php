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
        // dd($request);
        $user->update($request->except(['_token','submit']));
        return redirect()->route('industri.profile', ['id' => $id]);
    }
}
