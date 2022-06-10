<?php
// var_dump($_GET);
// exit();

// id受け取り
include('functions.php');

$id = $_GET['id'];

$pdo = connect_to_db();

$sql = 'SELECT * FROM task_steps WHERE id=:id';
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
  <title>タスク手順（編集画面）</title>
</head>

<body>
  <form action="todo_update.php" method="POST">
      <legend>タスク手順（編集画面）</legend>
      <a href="todo_read.php">一覧画面</a>
      <div>
        タスク <input type="text" name="task" value="<?= $record['task'] ?>">
      </div>
      <div>
        手順01 <input type="text" name="step01" value="<?= $record['step01'] ?>">
      </div>
      <div>
        手順02 <input type="text" name="step02" value="<?= $record['step02'] ?>">
      </div>
      <div>
        手順03 <input type=" text" name="step03" value="<?= $record['step03'] ?>">
      </div>
      <div>
        手順04 <input type="text" name="step04" value="<?= $record['step04'] ?>">
      </div>
      <div>
        手順05 <input type="text" name="step05" value="<?= $record['step05'] ?>">
      </div>
      <div>
        手順06 <input type="text" name="step06" value="<?= $record['step06'] ?>">
      </div>
      <div>
        手順07 <input type="text" name="step07" value="<?= $record['step07'] ?>">
      </div>
      <div>
        手順08 <input type="text" name="step08" value="<?= $record['step08'] ?>">
      </div>
      <div>
        手順09 <input type="text" name="step09" value="<?= $record['step09'] ?>">
      </div>
      <div>
        手順10 <input type="text" name="step10" value="<?= $record['step10'] ?>">
      </div>
      <div>
        <input type="hidden" name="id" value="<?= $record['id'] ?>">
      </div>
      <div>
        <!-- <div>
        todo: <input type="text" name="todo" value="<?= $record['todo'] ?>">
      </div>
      <div>
        deadline: <input type="date" name="deadline" value="<?= $record['deadline'] ?>">
      </div>
      <div>
      <input type="hidden" name="id" value="<?= $record['id'] ?>">
      </div>
      <div> -->
        <button>submit</button>
      </div>
  </form>

</body>

</html>