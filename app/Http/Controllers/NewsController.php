<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->search) {
            $posts = Post::join('users', 'user_id', '=', 'id')
                ->where('title', 'like', '%'.$request->search.'%')
                ->orWhere('descr', 'like', '%'.$request->search.'%')
                ->orWhere('name', 'like', '%'.$request->search.'%')
                ->orderBy('posts.created_at', 'desc')
                ->get();
            return view('pages.news.index', compact('posts'));
        }

        $posts = Post::query()->join('users', 'user_id', '=', 'id')
            ->orderBy('id', 'desc')
            ->paginate(8);
        return view('pages.news.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::query()->where('post_id', '=', $id)->first();
        $user = User::query()->find($post->user_id);
        return view('pages.news.show', compact('post', 'user'));
    }

    public function store(Request $request)
    {
        $title=$request->input('title');
        $post = new Post ();
        $post->title = $title;
        $post->short_title = strlen($title) > 30 ? substr($title, 0 , 30) : $title;
        $post->descr = $request->descr;
        $post->user_id = rand(1, 2);

        if($request->file('img')){
            $path = Storage::putFile('public', $request->file('img'));
            $url = Storage::url($path);
            $post->img = $url;
        }

        $post->save();

        return redirect()->route('news.index')->with('success', 'Пост успешно создан!');

    }

    public function create()
    {
        return view('pages.news.create');
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
//        return dd($post);
        $title=$request->input('title');
        $post->title=$title;
        $post->short_title = strlen($title) > 30 ? substr($title, 0 , 30) : $title;
        $post->descr = $request->descr;

//        if($request->file('img')){
//            $path = Storage::putFile('public', $request->file('img'));
//            $url = Storage::url($path);
////            $post->img = $url;
//        }

        $post->update();

        return redirect()->route('news.index', compact('post'))->with('success', 'Пост успешно изменен!');
    }

    public function edit($id)
    {
        $post = post::query()->where('post_id', '=', $id)->first();
//        return dd($post);
        return view('pages.news.update', compact('post'));
    }
}
