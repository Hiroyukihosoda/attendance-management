<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\RegisterRequest;

class RegisteredUserController extends Controller
{
    public function create() {
        return view('register');
    }

    public function confirm(RegisterRequest $request) {
        $data = $request->only(['name', 'email', 'password',]);
        return view('confirm', compact('data'));
    }

    public function store(RegisterRequest $request) {
        $data = $request->only(['name', 'email', 'password']);
        User::create($data);
        return view('attendance');
    }
}
