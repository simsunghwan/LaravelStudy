<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="/posts" method="POST" >
    <div>제목 :  <input type="text" name="title"></div>
    <div>내용 : <textarea type="text" name="content" rows="5"></textarea></div> 
    <button type="submit">등록</button>
    @csrf
  </form>
</body>
</html>