<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function adminClients()
    {

        $section = 'clients';

        return view('admin.dashboard', compact('section'));
    }
}
