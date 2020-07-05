<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts(){
        //$post=Post::orderBy('id','desc')->get();
        $sec1 = Post::where('is_published', '1')->where('section', '1')->get();
        $sec2 = Post::where('is_published', '1')->where('section', '2')->get();
        return view('index')->with('sec1',$sec1)->with('sec2',$sec2);
    }
    public function details($id){
        //$post=Post::orderBy('id','desc')->get();
        $post=Post::orderBy('id','desc')->find($id);
        return view('details')->with('p_details',$post);
    }
    public function insert(){
        
        return view('insert');
    }
    public function admin(){
        
        return view('admin');
    }
    public function add(Request $request){
        $post_check=Post::where('title',$request->title)->first();
        if($post_check){
            return view('insert')->with('show','Duplicate data');
        }
        $this->validate($request,[
            'title'=>'required',
            'brief'=>'required',
            'body'=>'required',
            'section'=>'required',
            'type'=>'required',  
        ]);
        $post=new Post;
        $post->title=$request->title;
        $post->video=$request->video;
        $post->brief=$request->brief;
        $post->body=$request->body;
        $post->section=$request->section;
        $post->type=$request->type;
        $post->is_published=1;
        
        if($request->hasFile('media')){
            $post->media=$request->media->store('public/images');
        }
        $post->save();
        return back();
        
    }

    public function manage(){
        $post=Post::orderBy('id','desc')->get();
        return view('manage')->with('posts',$post);
    }
    public function publish($id){
        $post=Post::orderBy('id','desc')->find($id);
        $post->is_published=1;
        $post->save();
        return back();
    }
    public function un_publish($id){
        $post=Post::orderBy('id','desc')->find($id);
        $post->is_published=0;
        $post->save();
        return back();
    }
}
