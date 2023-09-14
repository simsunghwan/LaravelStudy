<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="/users">회원 리스트 보기</a>
        @foreach ($users as $user)

            <div>이름 : <a href="/users/{{$user['id']}}">{{$user['name']}}</a> | 이메일 : {{$user['email']}} </div>
            <br>
        @endforeach
    </div>
</body>
</html>