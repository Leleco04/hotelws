<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministratorsController extends Controller
{
    public function index() {
        return view('administrators');
    }
}
