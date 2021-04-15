<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;
class blogController extends Controller
{
    public function getBlogs(){
        return Blog::all();
    }

    public function getBlog($id){
        $returnData = array();
        $blog = Blog::where('id',$id)->get();
        $comment = Comment::where('blog_id',$id)->get();
        array_push($returnData,$blog);
        array_push($returnData,$comment);
        return $returnData;
    }

    public function postComment(Request $request){
        $comment = Comment::create([
            'title' => $request->title,
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'blog_id' => $request->blog_id
        ]);
        return;
    }

    public function putComment(Request $request){
        $comment = Comment::where('id',$request->id)
        ->update([
            'title' => $request->title,
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'blog_id' => $request->blog_id
        ]);
        return;
    }

    public function deleteComment(Request $request){
        $comment = Comment::where('id',$request->id)->delete();
    }
}
