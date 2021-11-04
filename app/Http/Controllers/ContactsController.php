<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
use App\Http\Requests\StorePostRequest;

class ContactsController extends Controller
{
    public function home()
    {
        return view("index");
    }

    public function post(StorePostRequest $request)
    {
        $posts =$request->all();
        $request->session()->put("form_input", $posts);
        return redirect()->route('confirm');
    }

    public function confirm(Request $request)
    {
        $posts = $request->session()->get("form_input");
        if (empty($posts)) {
            return redirect()->route('home');
        }
        return view("confirm",compact('posts'));
        
    }

    public function store(Request $request)
    {
        $posts = $request->session()->get("form_input");
        if (empty($posts)) {
            return redirect()->route('home');
        }
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

        $request->session()->forget("form_input");

        return redirect()->route('complete');
    }

    public function complete()
    {
        return view("complete");
    }
}
