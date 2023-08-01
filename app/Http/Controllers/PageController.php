<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home_page()
    {
        return view('pages.authentication.client.home');
    }
}
