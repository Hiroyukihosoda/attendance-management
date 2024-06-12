<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticatedSessionController extends Controller
{
    // public function display() {
    //     return view('/auth/login');
    // }

    public function index() {
        return view('index');
    }

}
