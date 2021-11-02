<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

class ContactsController extends Controller
{
    public function home()
    {
        return view("index");
    }

    public function store(Request $request)
    {
        $posts = $request->all();
        $posts['fullname'] = $posts['last-name'].$posts['first-name'];
        unset($posts['first-name']);
        unset($posts['last-name']);
        Contacts::insert([
            'fullname' => $posts['fullname'],
            'gender' => $posts['gender'],
            'email' => $posts['email'],
            'postcode' => $posts['postcode'],
            'address' => $posts['address'],
            'building_name' => $posts['building_name'],
            'option' => $posts['option'],
        ]);
        return view('index');
    }
}
