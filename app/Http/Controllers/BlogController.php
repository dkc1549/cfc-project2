<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::latest()->get();
        return view('blogs.index',compact('blogs'));
    }
    public function create(){
        return view('blogs.create');
    }

    public function store(Request $request){
        // return $request;
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'feature_image' => 'required | image',
            'highlight' => 'sometimes',
            'description' => 'sometimes',
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->highlight = $request->highlight;
        $blog->description = $request->description;
        // $blog->date = $request->date;
        $blog->date = now();


        $image = $request->file('feature_image');
        $imageName = time() . "." . $image->getClientOriginalExtension();

        $image->move('image',$imageName);
        $blog->feature_image = "image/". $imageName;

        $blog->save();

        return redirect()->route("blogs.index");



    }
    public function view($id){
        $blog = Blog::findOrFail($id);
        return view('blogs.view',compact('blog'));
    }
    public function edit($id){
        $blog = Blog::findOrFail($id);
        return view('blogs.edit',compact('blog'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'feature_image' => 'required | image',
            'highlight' => 'sometimes',
            'description' => 'sometimes',
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->highlight = $request->highlight;
        $blog->description = $request->description;
        // $blog->date = $request->date;
        $blog->date = now();


        $image = $request->file('feature_image');
        $imageName = time() . "." . $image->getClientOriginalExtension();

        $image->move('image',$imageName);
        $blog->feature_image = "image/". $imageName;

        $blog->save();

        return redirect()->route("blogs.index");


    }

    public function destroy($id){
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blogs.index');
    }
}
