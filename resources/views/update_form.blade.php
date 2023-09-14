<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form method="post" action="/update" >
    @method("put")
    <div>이름 :  <input type="text" value="고길동" name="name" readonly></div>
    <div>생년월일(YYYY/MM/DD) : <input type="text" value="2000/07/24" name="birthday" readonly></div> 
    <div>email : <input type="email" name="email" value="123@123"></div>
    <div>소속 : <input type="text" name="org" value="123"></div>
    <button type="submit">등록</button>
    @csrf
  </form>
</body>
</html>