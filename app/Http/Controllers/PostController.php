<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'flag' => 'required',
            'content' => 'required',
        ]);

        // print_r($data['content']);
        
        $data['user_id'] = auth()->user()->id;
        Post::create($data);

        return redirect()->route('home')->with('success','New post has been created successfully.');
    }
    
    public function create()
    {
        return view('post.create');
    }
    
    public function show($id)
    {
        $detail = Post::find($id);
        return view('post.detail', compact('detail'));
    }
}
