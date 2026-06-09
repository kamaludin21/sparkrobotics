<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $data = Article::latest()->take(5)->get();
        return view('pages.index', compact('data'));
    }
}
