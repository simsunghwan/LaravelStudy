<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="/remove" method="post">
    @method('delete')
    @csrf
    <select name="name">
      <option value="김민재">김민재</option>
      <option value="오타니">오타니</option>
      <option value="손흥민">손흥민</option>
      <option value="와타나배">와타나배</option>
      <option value="케인">케인</option>
      <option value="호날두">호날두</option>
      <option value="메시">메시</option>
    </select>
    <button type="submit">삭제</button>
  </form>
</body>
</html>