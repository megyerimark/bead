<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Type;

use Illuminate\Http\Request;

class Bookcontroller extends Controller
{
    public function book(){
        return view ('book');

    }






    public function feltolt(Request $request){

        $book = new Book();
        $book->title = $request->input('title');
        $book->price = $request->input('price');
        // $book ->type_id = $request->input('type_id');
         $book->save();

        $type = new Type();
        $type->type = $request->input('type');

        $type->save();

    }

    // public function data(){
    //     $data = DB::table("books", [3])->select("books.id");
    // }


    // public function listBook(){

    //     $books = Type::find(1) ->book;

    //     return view ("book",[
    //                     "books" => $books
    //                  ]);

    // }

    
}
