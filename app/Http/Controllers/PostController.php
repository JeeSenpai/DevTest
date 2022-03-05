<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Session;

class PostController extends Controller
{

    public function showPost(){
         $postshow = DB::table('posts')
         ->select('posts.*','users.id as user_id', 'users.name as user_name')
         ->join('users', 'posts.userid', '=' ,'users.id')
         ->get()->reverse()->values();
         return view('dashboard', compact('postshow'));
    }    


    public function addPost()
    {
           return view ('add-post');
    }

    public function savePost(Request $request){
          
          DB::table('posts')->insert([
            'userid'=>$request->userid,
            'title'=>$request->title,
            'body'=>$request->body
          ]);

          return back()->with('success','Post created successfully!');
    }

    public function postList(){

         $posts = DB::table('posts')->where('userid', Auth::id())->get()->reverse()->values();
         return view('post-list', compact('posts'));
    }

    public function editPost($id){
        
        $post = DB::table('posts')->where('id',$id)->first();
        return view('edit-post', compact('post'));
    }

    public function updatePost(Request $request){

         DB::table('posts')->where('id',$request->id)->update([
            'userid'=>$request->userid,
            'title'=>$request->title,
            'body'=>$request->body
         ]);

          return back()->with('updated','Post updated successfully!');
    }

    public function deletePost($id){

        DB::table('posts')->where('id',$id)->delete();
        return back()->with('deleted','Post deleted successfully!');
    }
}
