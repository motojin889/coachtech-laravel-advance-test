<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function home()
    {
        return view("index");
    }

    public function store(Request $request)
    {
        $posts = $request->all();
        dd($posts);
    }
}
