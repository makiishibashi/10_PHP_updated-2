<?php
include('functions.php');
$pdo = connect_to_db();

// DB接続
// $dbn ='mysql:dbname=php_sql_assignment;charset=utf8mb4;port=3306;host=localhost';
// $user = 'root';
// $pwd = '';

// try {
//   $pdo = new PDO($dbn, $user, $pwd);
// } catch (PDOException $e) {
//   echo json_encode(["db error" => "{$e->getMessage()}"]);
//   exit();
// }

// SQL作成&実行
$sql = 'SELECT task, step01, step02, step03, step04, step05, step06, step07, step08, step09, step10 FROM task_steps';

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
    $output .= "<h2>{$record['task']}</h2>
    <ol>
    <li>{$record['step01']}
    <a href='todo_edit.php?id={$record["step01"]}'>edit</a>
    <a href='todo_delete.php?id={$record["step01"]}'>delete</a>
    </li>
    <li>{$record['step02']}
    <a href='todo_edit.php?id={$record["step02"]}'>edit</a>
    <a href='todo_delete.php?id={$record["step02"]}'>delete</a>
    </li>
    <li>{$record['step03']}
    <a href='todo_edit.php?id={$record["step03"]}'>edit</a>
    <a href='todo_delete.php?id={$record["step03"]}'>delete</a>
    </li>
    <li>{$record['step04']}
    <a href='todo_edit.php?id={$record["step04"]}'>edit</a>
    <a href='todo_delete.php?id={$record["step04"]}'>delete</a>
    </li>
    <li>{$record['step05']}
    <a href='todo_edit.php?id={$record["step05"]}'>edit</a>
    <a href='todo_delete.php?id={$record["step05"]}'>delete</a>
    </li>
    <li>{$record['step06']}
    <a href='todo_edit.php?id={$record["step06"]}'>edit</a>
    <a href='todo_delete.php?id={$record["step06"]}'>delete</a>
    </li>
    <li>{$record['step07']}
    <a href='todo_edit.php?id={$record["step07"]}'>edit</a>
    <a href='todo_delete.php?id={$record["step07"]}'>delete</a>
    </li>
    <li>{$record['step08']}
    <a href='todo_edit.php?id={$record["step08"]}'>edit</a>
    <a href='todo_delete.php?id={$record["step08"]}'>delete</a>
    </li>
    <li>{$record['step09']}
    <a href='todo_edit.php?id={$record["step09"]}'>edit</a>
    <a href='todo_delete.php?id={$record["step09"]}'>delete</a>
    </li>
    <li>{$record['step10']}
    <a href='todo_edit.php?id={$record["step10"]}'>edit</a>
    <a href='todo_delete.php?id={$record["step10"]}'>delete</a>
    </li>
    </ol>";
    
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
    <a href="todo_input.php">入力画面</a>
      <div>
        <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
        <?= $output ?>
      </div>
</body>

</html>