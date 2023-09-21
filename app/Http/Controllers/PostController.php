<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Cloudinary;

class PostController extends Controller
{

/**
 * 特定IDのpostを表示する
 *
 * @params Object Post // 引数の$postはid=1のPostインスタンス
 * @return Reposnse post view
 */
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
     //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }


    public function index(Post $post)
    {
    
    return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
    
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request, Post $post)
    {
        
        //cloudinaryへ画像を送信し、画像のURLを$image_urlに代入
        $input = $request['post'];
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath(); 
        //dd($post->fill($input));
        $input += ['image_url' => $image_url];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    public function edit(Post $post) {
        return view('posts.edit')->with(['post' => $post]); 
    }   
    
    public function update(Request $request, Post $post) {
        $input_post = $request['post']; 
        $post->fill($input_post)->save();
        return redirect('/posts/' . $post->id); }
    public function delete(Post $post) {
        $post->delete();
        return redirect('/'); 
    }

}

?>