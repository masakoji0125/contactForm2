<?php

var_dump($_POST);
require_once('functions.php');

// 入力された内容を取得
$username = $_POST['username'];  
$email = $_POST['email'];
$content = $_POST['content'];



?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>お問い合わせありがとうございました。</h1>
    <P>お名前：<?= h ($username); ?> </P>
    <P>メールアドレス：<?= h ($email); ?> </P>
    <P>お問い合わせ内容：<?= h ($content); ?> </P>
    
    
</body>
</html>