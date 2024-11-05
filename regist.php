<?php
session_start();

$name = trim(htmlspecialchars($_POST['namae']));
$_SESSION['name'] = $name;
$age = trim(htmlspecialchars($_POST['namae']));
$mail = trim(htmlspecialchars($_POST['mailaddress']));
$address = trim(htmlspecialchars($_POST['address'])); 

?>
<html>
<head>
<meta charset='uft-8'>
<title>登録確認</title>
</head>
<body>
    <h1>ユーザ登録確認</h1>
    <p>問題がなければ、下の「登録」ボタンをクリックしてください</p>
    <h2>名前：<?=$name ?></h2>
    <h2>年齢：<?=$age ?></h2>
    <h2>メールアドレス：<?=$mail ?></h2>
    <h2>住所：<?=$address ?></h2>
    <form action="complete.php" method="POST">
        <button type='submit' name='send' id='send'>登録</button>
    </form>
</body>