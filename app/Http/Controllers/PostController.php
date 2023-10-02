<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $data['post_list'] = Post::with('user')
            ->when($search, function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%');
            })->paginate(5);
        return view('post.index', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data["user_list"] = User::get();
        return view('post.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|max:255',
        ]);
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        if (!empty($request->file('image'))) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('uploads/'), $filename);
            $post->image = 'uploads/' . $filename;
        }
        $post->user_id = $request->user_id;
        $post->save();
        return redirect('/addpost');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return redirect("/addpost");
        }
        $data["post"] = $post;
        $data["user_list"] = User::get();
        return view('post.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        if (!$post) {
            return redirect("/addpost");
        }
        $post->title = $request->title;
        $post->content = $request->content;
        if (!empty($request->file('image'))) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('uploads/'), $filename);
            $post->image = 'uploads/' . $filename;
        }
        $post->user_id = $request->user_id;
        $post->save();
        return redirect("/addpost");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return redirect("/addpost");
        }
        $post->delete();
        return redirect("/addpost");
    }
}

//akjsdfhasdghsoidfhvaskjfdhujxcnalivbiarefndskczxuerx,
