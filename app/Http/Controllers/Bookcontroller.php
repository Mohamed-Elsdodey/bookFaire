<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use  App\Book;
class Bookcontroller extends Controller
{
    
   function add()
   {
       $authors=Author::get();
       return view('book.add',compact('authors'));
   }
    function store(Request $request)
    {
        $validator=\Validator::make($request->all(),
            [
                'name'=>'required|max:191|min:3',
                'desc'=>'required|max:1000|min:5',
                'image'=>'image|max:10240',
                'author_id'=>'required'
            ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $image=$request->file('image');
        $imagename=time().$image->getclientOriginalName();
        $img=\Image::make($image->getRealPath());
        $img->resize(350,350);
        $img->save(public_path('asset/images/books/'.$imagename));
        
        
        $book=new Book();
        $book->name=$request->name;
        $book->desc=$request->desc;
        $book->image= $imagename;
        $book->author_id=$request->author_id;
        $book->save();
       
    }
    function show()
    {
        $books=Book::get();
        return view('book.show',compact('books'));
    }
}
