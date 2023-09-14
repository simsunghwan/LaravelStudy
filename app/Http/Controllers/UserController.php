<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $users= [
        ['id' => 1, 'name' => "고길동", 'birthday' => '1999/01/02', 'email' => 'a@gmail.com'],
        ['id' => 2, 'name' => "홍길동", 'birthday' => '1999/06/02', 'email' => 'b@gmail.com'],
        ['id' => 3, 'name' => "박동훈", 'birthday' => '1999/05/02', 'email' => 'c@gmail.com'],
        ['id' => 4, 'name' => "박찬호", 'birthday' => '1999/02/02', 'email' => 'd@gmail.com'],
        ['id' => 5, 'name' => "박문수", 'birthday' => '1999/07/02', 'email' => 'f@gmail.com'],
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view("welcome", ['users'=> $this->users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        // 1. Request 객체로부터 사용자가 폼에 입력한 값을 꺼낸다.
        // 2. 1에서 꺼낸 값을 DB에 저장
        // 3. 등록결과 페이지를 생성해 반환.
        $name = $request->input("name");
        $birthday = $request->input("birthday");
        $org = $request->input("org");
        $email = $request->input("email");

        return view('register',['name'=>$name, 'birthday'=>$birthday, 'org'=>$org, 'emails'=>$email]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
        /* 
            1. $id를 가지고 DB에서 레코드를 인출
            2. 인출된 그 정보를 변수 $user에 할당
            3. 그 $user 값을 blade에 전달하면서 실행.    
        */
        $userFound = null;
        foreach($this->users as $user) {
            if($user["id"] == $id ) {
                $userFound = $user;
                break;
            }
        }
        $userFound = $userFound != null ? $userFound : []; 
        return view('user_info', ['user'=>$userFound]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // 1. id 값에 해당하는 사용자 정보를 DB에서 읽어온다.
        // 2. 읽어온 그 사용자 정보를 blade 파일에 넘겨주면서 실행
        
        $userFound = null;
        foreach($this->users as $user) {
            if($user["id"] == $id ) {
                $userFound = $user;
                break;
            }
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
