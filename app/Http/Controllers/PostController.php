<?php
namespace App\Http\Controllers;

class PostController extends Controller
{
    public function index(){
        $title = "Mon super titre";
        return view("articles", compact('title'));

    }
    public function show($id){
        $posts = [
            1 => "Title n1",
            2 => 'title n2'
        ];
        $post = $posts[$id];
        return view('article', [
            'post' => $post
        ]);
    }

}
