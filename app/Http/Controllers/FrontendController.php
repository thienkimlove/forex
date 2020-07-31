<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $page = 'index';
        return view('frontend.index', compact('page'));
    }
}
