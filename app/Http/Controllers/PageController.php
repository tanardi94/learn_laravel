<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $data = \App\Hobby::all();
        return view('home', [
            'hobbies' => $data,
        ]);
    }

    public function about()
    {
        $paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit aut nihil ea accusamus porro nulla modi esse quas aperiam, amet dolor quod assumenda iusto architecto ipsam, labore vel officiis laboriosam?';
        return view('about', [
            'paragraph' => $paragraph
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
