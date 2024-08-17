<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('blogs.index');
    }
    public function create(){
        return view('blogs.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'feature_image' => 'required | image',
            'highlight' => 'sometimes',
            'description' => 'sometimes',
        ]);

        
    }
    public function view($id){
        return view('blogs.view');
    }
    public function edit($id){
        return view('blogs.edit');
    }
}
