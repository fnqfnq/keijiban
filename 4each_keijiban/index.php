<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>4eachblog掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <?php
    mb_internal_encoding("utf8");
    $pdo=new PDO("mysql:dbname=lesson2;host=localhost;","root","");
    $stmt=$pdo->query("select*from 4each_keijiban");
    ?>

    <header>
        <div class="logo">
            <img src="4eachblog_logo.jpg" class="4eachblog">
        </div>
        <div class="niv">
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </div>
    </header>
    <main>
        <div class="main_contens">

            <div class="left">

                <h1>プログラミングに役立つ掲示板</h1>
                <form method="post" action="insert.php">
                    <div>
                        <h2>入力フォーム</h2>
                    </div>
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
                while($row = $stmt->fetch()){
                    echo"<div class='kiji'>";
                        echo"<h3>".$row['title']."</h3>";
                        echo"<div class='contents'>";
                            echo$row['comments'];
                            echo"<div class='handlename'>posted by".$row['handlename']."</div>";
                        echo"</div>";
                        echo"</div>";
                 }
                ?>
            </div>

            <div class="right">
                <h3>人気の記事</h3>
                <p>PHPオススメ本</p>
                <p>PHP MyAdminの使い方</p>
                <P>今人気のエディタ Top5</P>
                <p>HTMLの基礎</p>
                <h3>オススメリンク</h3>
                <p>インターノウス株式会社</p>
                <p>XAMPPのダウンロード</p>
                <P>Eclipseのダウンロード</P>
                <p>Bracketsのダウンロード</p>
                <h3>カテゴリ</h3>
                <p>HTML</p>
                <p>PHP</p>
                <P>MySQL</P>
                <p>JavaScript</p>
            </div>
        </div>
    </main>
    <footer>
        <p>conpyright internous 4each blog the whici provides A to Z about programming.</p>
    </footer>
</body>

</html>
