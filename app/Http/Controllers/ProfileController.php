<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $word = "stimata mengajar";
        return view('profile', ['word' => $word]);
    }
}
