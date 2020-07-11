<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostForm;
use Auth;
use Validator;

use Illuminate\Support\Facades\DB;

class PostFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
        $posts = DB::table('post_forms')
        ->select('id', 'post_date', 'title','keyword1', 'keyword2', 'content', 'category')
        ->orderBy('created_at', 'desc')
        ->get();
        return view('post.blog', compact('posts'));

        
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('post_forms')
        ->select('id', 'post_date', 'title','keyword1', 'keyword2')
        ->orderBy('created_at', 'desc')
        ->get();
      

        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all() , ['content' => 'required|max:255']);

        //バリデーションの結果がエラーの場合
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }



        $post = new PostForm;
        $post->post_date = $request->input('post_date');
        $post->title = $request->input('title');
        $post->category = $request->input('category');
        // $post->image = $request->input('image');
        $post->keyword1 = $request->input('keyword1');
        $post->keyword2 = $request->input('keyword2');
        $post->content = $request->input('content');
        $post->user_id = Auth::user()->id;

        $post->save();

        // $request->image->storeAs('public/images', $post->id . '.jpg');

        return redirect('post/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = PostForm::find($id);

        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = PostForm::find($id);

        return view('post.edit', compact('post'));
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
        $post = PostForm::find($id);

        $post->post_date = $request->input('post_date');
        $post->title = $request->input('title');
        $post->category = $request->input('category');
        $post->keyword1 = $request->input('keyword1');
        $post->keyword2 = $request->input('keyword2');
        $post->content = $request->input('content');

        $post->save();

        return redirect('post/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = PostForm::find($id);
        $post->delete();

        return redirect('post/index');
    }
}
