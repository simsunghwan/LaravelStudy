<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 리스트를 보여주는 기능을 수행
        // DB의 posts 테이블의 레코드들을 읽어온다.
        $posts = Post::all(); // posts 테이블의 모든 레코드들을 읽어온다.
        
        // Post 객체의 collection 이라는 집합 자료형으로 반환해준다.
        // select * from posts;



        // 그렇게 읽어온 레코드들을 뷰페이지에 전달한다.



        return view('posts.post_list',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.register_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $title = $request->input('title');
        $title = $request -> title;
        $content = $request -> content;

        $post = new Post;
        $post->title = $title;
        $post->content = $content;
        $post->user_id = 2; // 로그인 기능 구현 전까지 하드 코딩   
        $post->save();

        return redirect('/posts');
    }

    /* 
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // DB의 posts 테이블에서 id 칼럼값으로 $id 값을 가지는 레코드를 읽어온다.
        // 읽어온 그 레코드 블레이드 뷰 파일에 전달한다.
        $post = Post::find($id); // select * from posts where id = $id;
        
        return view('posts.show_post',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // DB posts 테이블에서 id 칼럼의 값이 $id인 레코드를 인출
        $post = Post::find($id); // select * from posts where id = $id;
        // 그 레코드를 편집 폼 페이지를 생성하는 블레이드에게 전달

        return view('posts.edit_post',['post'=>$post]);        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // DB posts 테이블에서 id 칼럼의 값이 $id인 레코드를 찾아서
        // 사용자가 입력한 title, content로 변경
        // update posts set title=?, content=? where id =?
        $post = Post::find($id);

        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        // 상세보기페이지로 리다이렉트한다
        return redirect('/posts/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $post = Post::find($id);

        $post->delete();
        
        return redirect('/posts');
    }
}
