<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function index()
    {
        // Mengambil semua data layanan dari database
        $solutions = Solution::all();
        return view('pages.solutions.index', compact('solutions'));
    }
}
