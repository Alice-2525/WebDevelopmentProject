<?php
    // $u_name = "";
    // $pwd = "";
    $postData = [];
    $errFlg = false;

    if(isset($_POST["userName"])){  //
        $postData["userName"] = trim($_POST["userName"]);
        if($postData["userName"] == ""){
            $errFlg = true;
        }
    }else{
        $errFlg = true;
    }
    if(isset($_POST["pass"])){
        $postData["pass"] = trim($_POST["pass"]);       
        if($postData["pass"] == ""){
            $errFlg = true;
        }
    }else{
        $errFlg = true;
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPの練習</title>
</head>
<body>
    <!-- フォームここから -->
    <form action="practice1.php" method="POST">
        <!-- ユーザー入力用テキストボックス -->
        <input type="text" name="userName" value="" placeholder="ユーザー名を入力">
        <!-- パスワード入力用テキストボックス -->
        <input type="text" name="pass" value="" placeholder="パスワードを入力">
        <!-- 送信ボタン(submit) -->
        <button type="submit">送信</button>
    </form>
    <!-- フォームここまで -->
    <?php if(!$errFlg):?>   // :がついているのはHTMLが混在しているから。
        <p>入力された値</p>
        <p>ユーザー名：<?=$postData["userName"] ?></p>
        <p>パスワード：<?=$postData["pass"] ?></p>
    <?php endif ?>
</body>
</html>