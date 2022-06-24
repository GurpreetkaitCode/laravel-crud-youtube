<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $users = User::all();
        return view('users', compact('users'));
    }
    public function store(UserRequest $request)
    {
        $validated = $request->validated();
        $store = User::create($validated);
        return redirect()->route('showusers');
    }
    public function update(UserRequest $request)
    {
        $validated = $request->validated();
        $user = User::where('id', $request->id)->update($validated);
        return redirect()->route('showusers');
    }
    public function delete(Request $request)
    {
        User::where('id', $request->id)->delete();
        return back();
    }
}
