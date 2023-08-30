<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Email;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show()
    {
        $users= Email::get();
        return view('Admin.dashboard', compact('users'));
    }
}
