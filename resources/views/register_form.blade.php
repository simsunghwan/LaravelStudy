<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="/users" method="POST" >
    <div>이름 :  <input type="text" name="name"></div>
    <div>생년월일(YYYY/MM/DD) : <input type="text" name="birth"></div> 
    <div>email : <input type="email" name="email"></div>
    <div>소속 : <input type="text" name="org"></div>
    <button type="submit">등록</button>
    @csrf
  </form>
</body>
</html>