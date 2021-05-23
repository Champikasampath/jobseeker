<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidateDashboardController extends Controller
{
    public function index()
    {
        return view('candidate.index');
    }
}
