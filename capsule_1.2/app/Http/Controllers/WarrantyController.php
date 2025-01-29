<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WarrantyController extends Controller
{
    public function warrantyPage()
    {
        return view('warranty.warranty');
    }
}
