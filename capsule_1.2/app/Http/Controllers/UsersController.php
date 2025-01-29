<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function adminUsers()
    {
        $users = []; // Load warranty data as needed
        $section = 'users';

        return view('admin.dashboard', compact('section', 'users'));
    }
}
