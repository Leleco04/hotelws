<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index() {
        return view('hotel_list');
    }

    public function costs() {
        return view('costs_list');
    }
}
