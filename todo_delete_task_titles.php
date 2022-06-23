<?php
// var_dump($_GET);
// exit();

include('functions.php');

$id = $_GET['id'];

$pdo = connect_to_db();

$sql =
'DELETE FROM task_titles WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:todo_read_task_titles.php");
exit();
