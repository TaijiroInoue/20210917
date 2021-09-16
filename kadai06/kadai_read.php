<?php

$str = '';

$file = fopen('data/data/csv','r');
flock($file, LOCK_EX);

if ($file) {
    while ($line = fgets($file)) {
        $str .="<tr><td>{$line}</td></tr>";
    }
}

flock($file,LOCK_UN);
fclose($file);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資料お取り寄せフォーム</title>
</head>

<body>
    <fieldset>
    <legend>資料お取り寄せフォーム</legend>
    <a href="kadai_input.php">入力画面</a>
    <table>
        <thead>
        <tr>
            <th>todo</th>
        </tr>
    </thead>
    <tbody>
        <?= $str ?>
    </tbody>
    </table>
    </fieldset>
</body>

</html>