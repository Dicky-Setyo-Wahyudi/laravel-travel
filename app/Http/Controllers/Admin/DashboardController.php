<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
        {
            // Cara memanggil view nya seperti dibawah ini
            return view('pages.admin.dashboard');
        }

}
