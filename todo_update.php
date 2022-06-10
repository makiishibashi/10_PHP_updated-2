<?php
// var_dump($_POST);
// exit();
include('functions.php');

if (
  !isset($_POST['todo']) || $_POST['todo'] == '' ||
  !isset($_POST['deadline']) || $_POST['deadline'] == ''||
  !isset($_POST['id']) || $_POST['id'] == ''
) {
  exit('paramError');
}

$todo = $_POST['todo'];
$deadline = $_POST['deadline'];
$id = $_POST['id'];

// DB接続
$pdo = connect_to_db();

$sql = 'UPDATE task_steps SET task=:task, step01=:step01, step02=:step02, step03=:step03, step04=:step04, step05=:step05, step06=:step06, step07=:step07,
step08=:step08, step09=:step09, step10=:step10, updated_at=now() WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':task', $task, PDO::PARAM_STR);
$stmt->bindValue(':step01', $step01, PDO::PARAM_STR);
$stmt->bindValue(':step02', $step02, PDO::PARAM_STR);
$stmt->bindValue(':step03', $step03, PDO::PARAM_STR);
$stmt->bindValue(':step04', $step04, PDO::PARAM_STR);
$stmt->bindValue(':step05', $step05, PDO::PARAM_STR);
$stmt->bindValue(':step06', $step06, PDO::PARAM_STR);
$stmt->bindValue(':step07', $step07, PDO::PARAM_STR);
$stmt->bindValue(':step08', $step08, PDO::PARAM_STR);
$stmt->bindValue(':step09', $step09, PDO::PARAM_STR);
$stmt->bindValue(':step10', $step10, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:todo_read.php");
exit();



