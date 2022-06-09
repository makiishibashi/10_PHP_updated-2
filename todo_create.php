<?php
// var_dump($_POST);
// exit();
// POSTデータ確認

if (
  !isset($_POST['task']) || $_POST['task']=='' ||
  !isset($_POST['step01']) || $_POST['step01']=='' ||
  !isset($_POST['step02']) || $_POST['step02']=='' ||
  !isset($_POST['step03']) || $_POST['step03']=='' ||
  !isset($_POST['step04']) || $_POST['step04']=='' ||
  !isset($_POST['step05']) || $_POST['step05']=='' ||
  !isset($_POST['step06']) || $_POST['step06']=='' ||
  !isset($_POST['step07']) || $_POST['step07']=='' ||
  !isset($_POST['step08']) || $_POST['step08']=='' ||
  !isset($_POST['step09']) || $_POST['step09']=='' ||
  !isset($_POST['step10']) || $_POST['step10']==''
  ) {
  exit('データが足りません');
}

$task = $_POST['task'];
$step01 = $_POST['step01'];
$step02 = $_POST['step02'];
$step03 = $_POST['step03'];
$step04 = $_POST['step04'];
$step05 = $_POST['step05'];
$step06 = $_POST['step06'];
$step07 = $_POST['step07'];
$step08 = $_POST['step08'];
$step09 = $_POST['step09'];
$step10 = $_POST['step10'];

// 各種項目設定
// $dbn ='mysql:dbname=php_sql_assignment;charset=utf8mb4;port=3306;host=localhost';
// $user = 'root';
// $pwd = '';

// DB接続
include('functions.php');
$pdo = connect_to_db();

// SQL作成&実行（誰かがフォームから入力したものを変数で受け取って、DBに突っ込んでいる。変数は$ではなくて:に変更する）
$sql = 'INSERT INTO task_steps (id, task, step01, step02, step03, step04, step05, step06, step07, step08, step09, step10, created_at, updated_at) 
VALUES (NULL, :task, :step01, :step02, :step03, :step04, :step05, :step06, :step07, :step08, :step09, :step10, now(), now())';

$stmt = $pdo->prepare($sql);

// バインド変数を設定
$stmt->bindValue(':task', $task, PDO::PARAM_STR);//:todoに$todoの内容を代入する（数字の場合はPDO::PARAM_INT）
$stmt->bindValue(':step01', $step01, PDO::PARAM_STR);
$stmt->bindValue(':step02', $step02, PDO::PARAM_STR);
$stmt->bindValue(':step03', $step03, PDO::PARAM_STR);
$stmt->bindValue(':step04', $step03, PDO::PARAM_STR);
$stmt->bindValue(':step05', $step03, PDO::PARAM_STR);
$stmt->bindValue(':step06', $step03, PDO::PARAM_STR);
$stmt->bindValue(':step07', $step03, PDO::PARAM_STR);
$stmt->bindValue(':step08', $step03, PDO::PARAM_STR);
$stmt->bindValue(':step09', $step03, PDO::PARAM_STR);
$stmt->bindValue(':step10', $step03, PDO::PARAM_STR);

// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:todo_read.php");
exit();
?>