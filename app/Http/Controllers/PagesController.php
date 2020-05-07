<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function index() {
        $title = "Welcome to Siurelism Website Manifesto, GUYS!";
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        $title = 'About us';
        return view('pages.about')->with('title', $title);
    }

    public function services() {
        $data = array(
            'title' => ' Our Services',
            'services' => ['Art', 'Photography', 'Paintings']
        );
        return view('pages.services')->with($data);
    }
}
