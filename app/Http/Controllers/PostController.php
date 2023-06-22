<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {

        $title = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' by ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }
        return view('post', [
            "title" => "All Posts" . $title,
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString(),
            "isCategories" => false,
        ]);
    }

    public function show(Post $post)
    {

        return view('blog', [
            "title" => $post->title,
            "blog" => $post,
        ]);
    }

    public function author(User $author)
    {
        return view('post', [
            "title" => "Posts by $author->name",
            "posts" => $author->posts,
            "isCategories" => false,
        ]);
    }

    public function category(Category $category)
    {
        return view('post', [
            "title" => "Category by $category->name",
            "posts" => $category->posts,
            "isCategories" => false,
        ]);
    }

    public function categoryList()
    {
        return view('post', [
            "title" => "All Category",
            "categories" => Category::all(),
            "isCategories" => true,
        ]);
    }
}