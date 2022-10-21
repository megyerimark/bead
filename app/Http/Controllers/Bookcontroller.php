<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bookcontroller extends Controller
{
    public function book(){
        return view ('book');
    }


    public function feltolt(Request $request){
        $book->name = $request-input('name');
        $book->price = $request-input('price');

    }
}
