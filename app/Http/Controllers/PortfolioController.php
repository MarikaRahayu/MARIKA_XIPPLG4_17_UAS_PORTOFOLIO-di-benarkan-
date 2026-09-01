<?php

namespace App\Http\Controllers;

use App\Models\User;

class PortofolioController extends Controller
{
    public function index()
    {
        $user = User::with([
            'profile',
            'skills',
            'experiences',
            'contacts',
            'projects'
        ])->first();

        return view('dashboard', compact('user'));
    }
}