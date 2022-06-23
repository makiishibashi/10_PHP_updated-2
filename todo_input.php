<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>カジサボ</title>
</head>

<body>
  <header>家事のかんたんガイド</header>
  <form action="todo_create.php" method="POST">
      <legend>手順入力</legend>
      <a href="todo_read.php">一覧画面</a>
      <div>
        手順 <input type="text" name="step01">
      </div>
      <div>
        <button>submit</button>
      </div>
  </form>

</body>

</html>