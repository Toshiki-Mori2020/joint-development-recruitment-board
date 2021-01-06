<?php

try {
    //データベース名、ユーザー名、パスワード
    $dsn = 'mysql:dbname=jointdevelopment;host=localhost;charset=utf8mb4';
    $user = 'root';
    $password = 'root';

    //データベース接続
    $pdo = new PDO($dsn, $user, $password);
    //エラー時のレポート表示
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $contents = $_POST['contents'];
    $number_of_applicants = $_POST['number_of_applicants'];
    $language = $_POST['language'];
    $a_few_words = $_POST['a_few_words'];
} catch (PDOException $e) {
    exit('データベースに接続できませんでした。' . $e->getMessage());
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>共同開発募集.com</title>
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet" type="text/css" href="css/top.css">
</head>

<body>
    <?php include("header.php"); ?>
    <div class="wrapper">
        <div class="post_container">
            <div class="post_box">
                <h1>作成内容</h1>
            </div>
            <p class="post_detail">・フロント1名　バック2名</p>
            <p class="post_detail">・使用予定の言語JS HTML CSS PHP</p>
            <p class="post_detail">・学生エンジニア募集！</p>
            <div class="post_contents">
                <div class="post_button">
                    <input type="submit" value="詳細ページ" name="submit" id="post_button_detail">
                </div>
                <div class="post_button">
                    <input type="submit" value="応募ボタン" name="submit" id="post_button_detail">
                </div>
                <div class="post_count">
                    <p>応募数</p>
                    <p class="count_box">1</p>
                </div>
            </div>
        </div>

        <div class="post_container">
            <div class="post_box">
                <h1>作成内容</h1>
            </div>
            <p class="post_detail">・フロント1名　バック2名</p>
            <p class="post_detail">・使用予定の言語JS HTML CSS PHP</p>
            <p class="post_detail">・学生エンジニア募集！</p>
            <div class="post_contents">
                <div class="post_button">
                    <input type="submit" value="詳細ページ" name="submit" id="post_button_detail">
                </div>
                <div class="post_button">
                    <input type="submit" value="応募ボタン" name="submit" id="post_button_detail">
                </div>
                <div class="post_count">
                    <p>応募数</p>
                    <p class="count_box">1</p>
                </div>
            </div>
        </div>

        <div class="post_container">
            <div class="post_box">
                <h1>作成内容</h1>
            </div>
            <p class="post_detail">・フロント1名　バック2名</p>
            <p class="post_detail">・使用予定の言語JS HTML CSS PHP</p>
            <p class="post_detail">・学生エンジニア募集！</p>
            <div class="post_contents">
                <div class="post_button">
                    <input type="submit" value="詳細ページ" name="submit" id="post_button_detail">
                </div>
                <div class="post_button">
                    <input type="submit" value="応募ボタン" name="submit" id="post_button_detail">
                </div>
                <div class="post_count">
                    <p>応募数</p>
                    <p class="count_box">1</p>
                </div>
            </div>
        </div>

        <div class="post_container">
            <div class="post_box">
                <h1>作成内容</h1>
            </div>
            <p class="post_detail">・フロント1名　バック2名</p>
            <p class="post_detail">・使用予定の言語JS HTML CSS PHP</p>
            <p class="post_detail">・学生エンジニア募集！</p>
            <div class="post_contents">
                <div class="post_button">
                    <input type="submit" value="詳細ページ" name="submit" id="post_button_detail">
                </div>
                <div class="post_button">
                    <input type="submit" value="応募ボタン" name="submit" id="post_button_detail">
                </div>
                <div class="post_count">
                    <p>応募数</p>
                    <p class="count_box">1</p>
                </div>
            </div>
        </div>

        <div class="post_container">
            <div class="post_box">
                <h1>作成内容</h1>
            </div>
            <p class="post_detail">・フロント1名　バック2名</p>
            <p class="post_detail">・使用予定の言語JS HTML CSS PHP</p>
            <p class="post_detail">・学生エンジニア募集！</p>
            <div class="post_contents">
                <div class="post_button">
                    <input type="submit" value="詳細ページ" name="submit" id="post_button_detail">
                </div>
                <div class="post_button">
                    <input type="submit" value="応募ボタン" name="submit" id="post_button_detail">
                </div>
                <div class="post_count">
                    <p>応募数</p>
                    <p class="count_box">1</p>
                </div>
            </div>
        </div>

        <div class="post_container">
            <div class="post_box">
                <h1>作成内容</h1>
            </div>
            <p class="post_detail">・フロント1名　バック2名</p>
            <p class="post_detail">・使用予定の言語JS HTML CSS PHP</p>
            <p class="post_detail">・学生エンジニア募集！</p>
            <div class="post_contents">
                <div class="post_button">
                    <input type="submit" value="詳細ページ" name="submit" id="post_button_detail">
                </div>
                <div class="post_button">
                    <input type="submit" value="応募ボタン" name="submit" id="post_button_detail">
                </div>
                <div class="post_count">
                    <p>応募数</p>
                    <p class="count_box">1</p>
                </div>
            </div>
        </div>

        <div class="post_container">
            <div class="post_box">
                <h1>作成内容</h1>
            </div>
            <p class="post_detail">・フロント1名　バック2名</p>
            <p class="post_detail">・使用予定の言語JS HTML CSS PHP</p>
            <p class="post_detail">・学生エンジニア募集！</p>
            <div class="post_contents">
                <div class="post_button">
                    <input type="submit" value="詳細ページ" name="submit" id="post_button_detail">
                </div>
                <div class="post_button">
                    <input type="submit" value="応募ボタン" name="submit" id="post_button_detail">
                </div>
                <div class="post_count">
                    <p>応募数</p>
                    <p class="count_box">1</p>
                </div>
            </div>
        </div>

        <div class="post_container">
            <div class="post_box">
                <h1>作成内容</h1>
            </div>
            <p class="post_detail">・フロント1名　バック2名</p>
            <p class="post_detail">・使用予定の言語JS HTML CSS PHP</p>
            <p class="post_detail">・学生エンジニア募集！</p>
            <div class="post_contents">
                <div class="post_button">
                    <input type="submit" value="詳細ページ" name="submit" id="post_button_detail">
                </div>
                <div class="post_button">
                    <input type="submit" value="応募ボタン" name="submit" id="post_button_detail">
                </div>
                <div class="post_count">
                    <p>応募数</p>
                    <p class="count_box">1</p>
                </div>
            </div>
        </div>

        <div class="post_container">
            <div class="post_box">
                <h1>作成内容</h1>
            </div>
            <p class="post_detail">・フロント1名　バック2名</p>
            <p class="post_detail">・使用予定の言語JS HTML CSS PHP</p>
            <p class="post_detail">・学生エンジニア募集！</p>
            <div class="post_contents">
                <div class="post_button">
                    <input type="submit" value="詳細ページ" name="submit" id="post_button_detail">
                </div>
                <div class="post_button">
                    <input type="submit" value="応募ボタン" name="submit" id="post_button_detail">
                </div>
                <div class="post_count">
                    <p>応募数</p>
                    <p class="count_box">1</p>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>
