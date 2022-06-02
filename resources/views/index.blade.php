<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo List</title>
</head>
<body>
  <h1>Todo List</h1>
  <div>
<input type="text" name="content" >
<a href ="/todo/create">追加</a>
<table>
  <tr>
    <th>作成日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>
@foreach($tasks as $task)
<tr>
  <td></td>
    <td><input type ="text" name="content"></td>
    <td><a href="/todo/update/{{$task->id}}">更新</a></td>
    <td><a href="/todo/delete/{{$task->id}}">削除</a></td>
</tr>
@endforeach
</table>
  </div>
</body>
</html>