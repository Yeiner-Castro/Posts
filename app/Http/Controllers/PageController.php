<?php

namespace App\Http\Controllers;

use App\Models\Post;//clases de mi codigo
use Illuminate\Http\Request;//clases laravel

class PageController extends Controller
{
    public function home(Request $request ){
        $search = $request->search;
        $posts = Post::where('title', 'LIKE', "%{$search}%")
            ->with('user')            
            ->latest()->paginate();

        return view('home', ['posts' => $posts]);
    }

    

    public function blog(){
        
        //$posts = Post::get();//obtener todos los post de la base de datos
        //$posts = Post::first();//obtener el primer post de la base de datos
        //$posts = Post::find(25);//obtener el post con id 25
        
        //dd($posts);

        $posts = Post::latest()->paginate();
        return view('blog', ['posts' => $posts]);
    }

    public function post(Post $post ){  //obtener un post en especifico
        return view('post', ['post' => $post]);
    }
}
