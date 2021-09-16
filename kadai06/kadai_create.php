<?php

// var_dump($_get);
// exit('');

$name = $_POST["name"];
$age = $_POST["age"];
$address = $_POST["address"];
$number = $_POST["number"];
$mail = $_POST["mail"];

// データ1件を1行にまとめる（最後に改行を入れる）
$write_data = "{$name} {$age} {$address} {$number} {$mail} \n";

// ファイルを開く．引数が`a`である部分に注目！
$file = fopen('data/data.csv', 'a');
// ファイルをロックする
flock($file, LOCK_EX);

// 指定したファイルに指定したデータを書き込む
fwrite($file, $write_data);

// ファイルのロックを解除する
flock($file, LOCK_UN);
// ファイルを閉じる
fclose($file);

// データ入力画面に移動する
header("Location:kadai_input.php");

?>