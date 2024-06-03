<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisteredUserController extends Controller
{
    public function create() {
        return view('register');
    }

    public function confirm(Request $request) {
        $data = $request->only(['name', 'email', 'password',]);
        return view('confirm', compact('data'));
    }

    public function store(Request $request) {
        $data = $request->only(['name', 'email', 'password']);
        User::create($data);
        return view('attendance');
    }
}
