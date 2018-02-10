<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Setting;
use App\Category;
use App\Post;
use App\Tag;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('index')
            ->with('title', Setting::first()->site_name)
            ->with('categories', Category::take(6)->get())
            ->with('first_post', Post::orderBy('created_at', 'desc')->first())
            ->with('second_post', Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
            ->with('third_post', Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
            ->with('career', Category::find(6))
            ->with('laravel', Category::find(1))
            ->with('settings', Setting::first());
    }

    public function singlePost($slug)
    {
        $post = Post::where('slug', $slug)->first();

        $next_id = Post::where('id', '>', $post->id)->min('id');
        $prev_id = Post::where('id', '<', $post->id)->max('id');

        return view('single')
        ->with('title', $post->site_name)
        ->with('categories', Category::take(6)->get())
        ->with('settings', Setting::first())
        ->with('post', $post)
        ->with('next', Post::find($next_id))
        ->with('prev', Post::find($prev_id))
        ->with('tags', Tag::all());
    }

    public function category($id)
    {
        $category = Category::find($id);

        return view('category')
        ->with('category', $category)
        ->with('title', $category->site_name)
        ->with('settings', Setting::first())
        ->with('categories', Category::take(6)->get())
        ->with('tags', Tag::all());
    }

    public function tag($id)
    {
        $tag = Tag::find($id);

        return view('tag')
        ->with('tag', $tag)
        ->with('title', $tag->site_name)
        ->with('settings', Setting::first())
        ->with('categories', Category::take(6)->get())
        ->with('tags', Tag::all());
    }
}
 