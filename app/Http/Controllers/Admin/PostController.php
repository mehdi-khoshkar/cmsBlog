<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Post;


class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        return view('adminPanel.post.index');
    }

    public function create()
    {
        return view('adminPanel.post.create');
    }

    public function save(Request $request)
    {
        $post_data = [
            'title'=>$request->input('title'),
            'thumbnail'=>$request->input('thumbnail'),
            'tags'=>$request->input('tags'),
            'description'=>$request->input('description'),
            'thumbnail'=>$request->input('thumbnail'),
            'content'=>$request->input('content'),
            ];
        $post_create = Post::create($post_data);
        if ( $post_create instanceof Post) {
            return redirect()->route('adminPanel.post.create')->with('success', 'مطلب با موفقیت اضافه شد');
        }
        else {
            return redirect()->back()->with('error', 'متاسفانه مطلب ثبت نشد');
        }
    }
}
