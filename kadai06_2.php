<?php
    // POSTデータ格納用配列
    $postData = [];

    // 表示用データ格納用配列
    $viewData = [];

    //文字コード用変数
    $charset = "UTF-8";
    
    // 名前
    if(isset($_POST["name"])){
        $postData["userName"] = trim($_POST["name"]);
        
        if($postData["userName"] != ""){
            $viewData["user"] = htmlspecialchars($postData["userName"],ENT_QUOTES,$charset);
        } else {
            $viewData["user"] = "お名前が入力されていません";
        }

    }

    if(isset($_POST["email"])){
        $postData["email"] = $_POST["email"];

        if($postData["email"] != ""){
            $viewData["email"] = htmlspecialchars($postData["email"],ENT_QUOTES,$charset);
        }else{
            $viewData["email"] = "メールアドレスが入力されていません";
        }
    }

    if(isset($_POST["category"])){
        $postData["category"] = $_POST["category"];
        switch($postData["category"]){
            case 1:$viewData["category"] = "カフェについて";    //1が送られた場合
                break;
            case 2:$viewData["category"] = "その他";    //2が送られた場合
                break;
            default: $viewData["category"] = "カフェについて";  //if文のelseの部分。どっちも違うとき。
        }
    }
    

    if(isset($_POST["deals"])){     // データ送られてるか判断している
        $viewData["deals"] = "希望する";    // データ入ってたら"希望する"を表示するように、ビューデータに入れてる。そしたら、ビューデータ表示するだけで文字も出力される。
    }else{
        $viewData["deals"] = "希望しない";   // データ入ってなかったら"希望しない"を表示するように、ビューデータに入れてる。そしたら、ビューデータ表示するだけで文字も出力される。
    }

    if(isset($_POST["content"])){  //
        $postData["content"] = $_POST["content"];

        if($postData["content"] != ""){
        $viewData["content"] = nl2br(htmlspecialchars($postData["content"],ENT_QUOTES,$charset));
        }else{
            $viewData["content"] = "";
        }
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT | スローライフカフェ</title>
</head>
<body>

    <!-- TODO:後で作成 -->

    <!-- ロゴ -->
    <h1><img alt="スローライフカフェ" src="image/kadai04_logo.png" width="128" height="133"></h1>

    <!-- メニューリスト -->
    <ul>
        <li>HOME</li>
        <li>FOOD</li>
        <li>DRINK</li>
        <li>DESSERT</li>
        <li>ACCESS</li>
        <li>SHOP INFORMATION</li>
        <li>CONTACT</li>
    </ul>

    <!-- 写真 -->
    <h2><img alt="スローライフカフェへのお問い合わせ" src="image/kadai06_contact.jpg" width="850" height="370"></h2> 

    <!-- 説明文 -->
    <p>
        お問い合わせの確認
    </p>

    <table>
        <tr>
            <th>お名前（必須）<br></th>
            <td><?=$viewData["user"] ?></td>                
        </tr>

        <tr>
            <th>メールアドレス（必須）<br></th>
            <td><?=$viewData["email"] ?></td>
        </tr>

        <tr>
            <th>お問い合わせについて<br></th>
            <td><?=$viewData["category"] ?></td>
        </tr>

        <tr>
            <th>お得な情報<br></th>
            <td><?=$viewData["deals"] ?></td>
        </tr>
            
        <tr>
            <th>メッセージ<br></th>
            <td><?=$viewData["content"]?></td>          
        </tr>

    </table>

</body>
</html>