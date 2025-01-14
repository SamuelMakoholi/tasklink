<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class BrowseServicesController extends Controller
{
    //

    public function index()
    {
        return Inertia::render('Customer/Service');
    }
}
