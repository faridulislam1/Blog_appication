<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;


class AuthorController extends Controller
{
    //
    private static $author;

    public function addAuthor(){
        return view('admin.author.add-author');
    }


    public function saveAuthor(Request $request){
        Author::saveAuthor($request);
        return back();
    }

    public function manageAuthor(){
        return view('admin.author.manage-author',[
            'authors'=>Author::all()
        ]);
    }
    
    public function editAuthor($id){
        self::$author = Author::find($id);
        return view('admin.author.edit-author',[
            'author'=>self::$author
        ]);
    }
    public function updateAuthor(Request $request){
        Author::updateAuthor($request);
        return back()->with('message','update Author');
    }



    public function statusAuthor($id){
        Author::statusAuthor($id);
        return back();
    }
}
