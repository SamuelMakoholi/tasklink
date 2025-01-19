<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PersonalDetailsController extends Controller
{
    //

    public function index()
    {
        return Inertia::render('Customer/Profile/CustomerProfile');
    }
}
