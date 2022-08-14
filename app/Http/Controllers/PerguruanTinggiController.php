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
}
