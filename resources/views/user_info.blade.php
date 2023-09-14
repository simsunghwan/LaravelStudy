<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (count($user) == 0)
        <h2>사용자를 찾을 수 없습니다.</h2>
    @else
        <form action="" method="delete">
            @csrf
            

            <h2> 사용자 상세정보</h2>
            <h3> 이름 : {{$user["name"]}}</h3>
            <h3> 이메일 : {{$user['email']}}</h3>
            <h3> 생년월일 : {{$user['birthday']}}</h3>
            <button type="submit">삭제</button>
            &nbsp;
        </form>   
        <a href="/users/{{$user['id']}}/edit">
            <button type="submit">수정</button>
        </a>
    @endif
</body>
</html>