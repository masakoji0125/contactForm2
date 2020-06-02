<?php

// $fruits = ['apple' => 'りんご', 'orange' => 'みかん', 'banana' => 'ばなな'];

// var_dump($fruits);

// スーパーグローバル変数
// ＝  $_POST:POST送信されたときの値が入ってくる
// ＝  $_GET:GET送信されたときの値が入ってくる

$username = $_POST['username'];  
echo $username;

$email = $_POST['email'];
echo $email;

$content = $_POST['content'];
echo $content;


?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>入力内容確認</h1>
    <p>お名前：<?= $username; ?></p>
    <p>メールアドレス：<?= $email; ?> </p>
    <p>お問い合わせ内容：<?= $content; ?> </p>

    <form action="">
        <button type="button" onclick="history.back()" >戻る</button>
        <button type="submit" >確定</button>
    </form>
</body>
</html>