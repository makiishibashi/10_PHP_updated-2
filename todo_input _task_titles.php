<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>カジサボ</title>
</head>

<body>
  <header>家事のかんたんガイド</header>
  <form action="todo_create_task_titles.php" method="POST">
    <legend>タスク入力</legend>
    <a href="todo_read_task_titles.php">一覧画面</a>
    <div>
      タスク <input type="text" name="title">
    </div>
    <button id="add">add</button>
    <ol class="view"></ol>
  </form>

</body>

</html>