<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
class Authorcontroller extends Controller
{
 function create()
 {
     return view('author.create');
 }
    function add(Request $request)
    {
        $validator=\Validator::make($request->all(),
            [
                'name'=>'required|max:191|min:3',
                'bio'=>'required|max:1000|min:5',
                'image'=>'image|max:10240',
                //'author_id'=>'required'
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
        $img->save(public_path('asset/images/authors/'.$imagename));
        
        
        $author=new Author();
        $author->name=$request->name;
        $author->bio=$request->bio;
        $author->image=$imagename;
        $author->save();

        
    }
    function show()
    {
              

        $authors=Author::get();
       
    return view('author.show',compact('authors'));
    }
}
