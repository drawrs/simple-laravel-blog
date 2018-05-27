<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
class HomeController extends Controller
{
    //
    public function showBlogHome(){
        // daptakan semua data di tabel
        $posts = Post::all();
        $categories = Category::all();

        // tampilkan view dngan membawa data (passing variable)
        return view('blog.home', compact('posts', 'categories'));
    }
    
    public function showSinglePost($slug = null){
        // cari data yg slug-nya sesuai
        $post = Post::where('slug', $slug)->first();
        // daptakan semua data di tabel
        $categories = Category::all();

        // tampilkan view dngan membawa data (passing variable)
        return view('blog.single', compact('post', 'categories'));
    }

    public function aboutPage(){
        // daptakan semua data di tabel
        $categories = Category::all();

        return view('blog.about', compact('categories'));
    }

    public function contactPage(){
        // daptakan semua data di tabel
        $categories = Category::all();

        // tampilkan view dngan membawa data (passing variable)
        return view('blog.contact', compact('categories'));
    }

    public function showByCategory($cat_id = null){
        // cari data yg category_id-nya sesuai
        $posts = Post::where('category_id', $cat_id)->get();
        // daptakan semua data di tabel
        $categories = Category::all();

        // tampilkan view dngan membawa data (passing variable)
        return view('blog.home', compact('posts', 'categories'));
    }
}
