<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        // return view('home');
        return view('admin.home');
    }
    public function viewCate()
    {
        return view('admin.category.index');
    }
}
