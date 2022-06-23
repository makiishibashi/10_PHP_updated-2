<?php
// var_dump($_POST);
// exit();
include('functions.php');

if (
  !isset($_POST['title']) || $_POST['title'] == ''||
  !isset($_POST['id']) || $_POST['id'] == ''
) {
  exit('paramError');
}

$title = $_POST['title'];
$id = $_POST['id'];

// DB接続
$pdo = connect_to_db();

$sql = 'UPDATE task_titles SET title=:title, updated_at=now() WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':title', $title, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:todo_read_task_titles.php");
exit();



