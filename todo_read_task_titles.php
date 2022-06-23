<?php
include('functions.php');
$pdo = connect_to_db();

// SQL作成&実行
$sql = 'SELECT * FROM task_titles';

$stmt = $pdo->prepare($sql);

try {
  $status = $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  // echo '<pre>';
  // var_dump($result);
  // echo '</pre>';
  // exit();
  $output = "";
  foreach ($result as $record) {
    $output .= "
    <div>{$record["title"]}
    <a href='todo_edit_task_titles.php?id={$record["id"]}'>edit</a>
    <a href='todo_delete_task_titles.php?id={$record["id"]}'>delete</a>
    </div>
  ";
  }
} catch (PODException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>カジサボ</title>
</head>

<body>
  <legend>タスクリスト（一覧画面）</legend>
  <a href="todo_input _task_titles.php">入力画面</a>
  <div>
    <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
    <?= $output ?>
  </div>
</body>

</html>