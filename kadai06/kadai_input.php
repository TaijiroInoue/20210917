<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>資料お取り寄せフォーム</title>
</head>

<body>
<form action="kadi_create.php" method="POST">
    <fieldset>
    <legend>資料お取り寄せフォーム</legend>
    <a href="kadai_read.php">一覧画面</a>
    <div>
        お名前: <input type="text" name="name">
    </div>
    <div>
        年齢: <input type="text" name="age">
    </div>
    <div>
        住所: <input type="date" name="address">
    </div>
    <div>
        Mobie: <input type="text" name="number">
    </div>
    <div>
        mail: <input type="text" name="mail">
    </div>
    <div>
        <button>送信</button>
    </div>
    </fieldset>
</form>

</body>

</html>