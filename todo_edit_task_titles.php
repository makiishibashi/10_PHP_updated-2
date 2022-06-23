<?php
// var_dump($_GET);
// exit();

// id受け取り
include('functions.php');

$id = $_GET['id'];

$pdo = connect_to_db();

$sql = 'SELECT * FROM task_titles WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$record = $stmt->fetch(PDO::FETCH_ASSOC);

// var_dump($record);
// exit();

?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>タスク（編集画面）</title>
</head>

<body>
  <form action="todo_update _task_titles.php" method="POST">
    <legend>タスクリスト（編集画面）</legend>
    <a href="todo_read_task_titles.php">一覧画面</a>
    <div>
      タスク <input type="text" name="title" value="<?= $record['title'] ?>">
    </div>
    <div>
      <input type="hidden" name="id" value="<?= $record['id'] ?>">
    </div>
    <button id="add">add</button>
    <ol class="view"></ol>

  </form>

</body>

</html>