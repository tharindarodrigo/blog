<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $x = 10;

        return view('posts', compact('x'));
    }

    public function show($id)
    {
        $name = $x;
        $address = $y;

        return view('myPage', [
            'name' => $name,
            'address' => $address
        ]);
    }
}
