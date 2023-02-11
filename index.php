<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <img src="4eachblog_logo.jpg">
            <ul class="menu">
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
    </header>
   <div class="main"> 
    <main class="main-contents">
        <h1 >プログラミングに役立つ掲示板</h1>

        <form method="post" action="insert.php">

        <h3 class="form_title">入力フォーム</h3>
            <div>
                <label>ハンドルネーム</label>
                <br>
                <input type="text" class="text" size="35" name="handlename">
            </div>
    
            <div>
                <label>タイトル</label>
                <br>
                <input type="text" class="text" size="35" name="title">
            </div>
    
            <div>
                <label>コメント</label>
                <br>
                <textarea cols="35" rows="7" name="comments"></textarea>
            </div>
    
            <div>
                <input type="submit" class="submit" value="送信する">
            </div>
    
        </form>
<?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
$stmt = $pdo->query("select * from 4each_keijiban");


        while($row = $stmt->fetch()){
            echo"<div class='kiji'>";
            echo "<h3>".$row['title']."</h3>";
            echo"<div class='contents'>";
            echo $row['comments'];
            echo"<div class='contents'>posted by ".$row['handlename']."</div>";
            echo "</div>";
            echo "</div>";
    
    
}

?>
    </main>
    <aside class="sidebar">
        <h2>人気の記事</h2>
        <p>PHPオススメ本</p>
        <p>PHP MyAdminの使い方</p>
        <p>今人気のエディタ Top5</p>
        <p>HTMLの基礎</p>

        <h2>オススメノリンク</h2>
        <p>インターノウス株式会社</p>
        <p>XAMPPのダウンロード</p>
        <p>Eclipseのダウンロード</p>
        <p>Bracketsのダウンロード</p>

        <h2>カテゴリ</h2>
        <p>HTML</p>
        <p>PHP</p>
        <p>MySQL</p>
        <p>JavaScript</p>
    </aside>
    <footer>
        <p>copyright &copy; internous｜4each blog the which provides A to Z about programming.</p>
    </footer>
</body>

</html>