<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\StorePostRequest;

class ContactController extends Controller
{
    public function home()
    {
        return view("index");
    }

    public function post(StorePostRequest $request)
    {
        $posts = $request->all();
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
        Contact::insert([
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

    public function show(){
        return view('admin', [
            'items' => Contact::paginate(10)
        ]);
    }

    public function serch(Request $request){
        $keyword_name = $request->input('keyword_name');
        $keyword_gender = $request->input('keyword_gender');
        $keyword_ormore_date = $request->input('keyword_ormore_date');
        $keyword_orless_date = $request->input('keyword_orless_date');
        $keyword_email = $request->input('keyword_email');
        $query = Contact::query();
        $items = [];

        if(!empty($keyword_name)){
            $items = $query->where('fullname','LIKE',"%{$keyword_name}%")->get();
        }
        if($keyword_gender == "all_gender"){
            $items = Contact::all();
        }
        if($keyword_gender == "man"){
            $items = $query->where('gender',1)->get();
        }elseif($keyword_gender == "woman"){
            $items = $query->where('gender',2)->get();
        }
        if(!empty($keyword_ormore_date) && !empty($keyword_orless_date)){
            $items = $query->whereBetween('created_at',[$keyword_ormore_date,$keyword_orless_date])->get();
        }
        if(!empty($keyword_email)){
            $items = $query->where('email','LIKE',"%{$keyword_email}%")->get();
        }
        $items = $query->paginate(10);

        return view('admin', [
            'items' => $items
        ]);
    }

    public function delete(Request $request){
        Contact::find($request->id)->delete();
        return redirect('/admin');
    }
}
