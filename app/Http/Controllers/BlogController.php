<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\BlogRequest;

class BlogController extends Controller
{   

    public function index()
    {
      $blogs = Post::all();
      return view('dashboard',compact('blogs'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(BlogRequest $request){
        
        $data = $request->validated();
    
        $posts = new Post;
        $posts->title = $data['title'];
        $posts->body = $request->body;
        $posts->save();
     
        return redirect('/blogs')->with('success','Post created successfully.');
    }

    public function edit($id)
    { 
      $post = Post::find($id);
      return view('blog.edit',compact('post'));
    }

    public function update(BlogRequest $request, $id){
        
        $data = $request->validated();

        $posts = Post::find($id);
         $posts->title = $data['title'];
        $posts->body = $request->body;
        $posts->update();
     
        return redirect('/blogs')->with('success','Post Updated successfully.');
    }

    public function destroy($id)
    {
        $delete = Post::find($id);
        $delete->delete();

        return redirect('/blogs')->with('success','Post Deleted successfully.');
    }

}
