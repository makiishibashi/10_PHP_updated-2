<?php
// var_dump($_POST);
// exit();
// POSTデータ確認

if (
  !isset($_POST['title']) || $_POST['title']==''
  ) {
  exit('データが足りません');
}

$title = $_POST['title'];

// DB接続
include('functions.php');
$pdo = connect_to_db();

// SQL作成&実行（誰かがフォームから入力したものを変数で受け取って、DBに突っ込んでいる。変数は$ではなくて:に変更する）
$sql = 'INSERT INTO task_titles (id, title, created_at, updated_at) 
VALUES (NULL, :title, now(), now())';

$stmt = $pdo->prepare($sql);

// バインド変数を設定
$stmt->bindValue(':title', $title, PDO::PARAM_STR);//:todoに$todoの内容を代入する（数字の場合はPDO::PARAM_INT）

// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:todo_read_task_titles.php");
exit();
?>