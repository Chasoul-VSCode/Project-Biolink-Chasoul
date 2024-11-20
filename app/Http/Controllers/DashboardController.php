<?php

namespace App\Http\Controllers;

use App\Models\Review;

class DashboardController extends Controller
{
    public function index()
    {
        $reviews = Review::orderBy('created_at', 'desc')->get();
        return view('App.dashboard', compact('reviews'));
    }
}
