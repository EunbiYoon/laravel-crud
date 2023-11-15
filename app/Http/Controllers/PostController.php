<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=POST::all();
        return view('index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        return view('create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=> ['required', 'max:2028','image'],
            'title'=>['required','max:255'],
            'category_id'=> ['required','integer'],
            'description'=> ['required']
        ]);

        $fileName=time().'_'.$request->image->getClientOriginalName();
        $filePath=$request->image->storeAs('uploads', $fileName); // uploade/filename
        
        $post=new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->image = 'storage/'.$filePath; // storage/uploade/filename
        $post->save();
        
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post=Post::findOrFail($id);
        $categories=Category::all();
        return view('edit', compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
