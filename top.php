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
    $result_list = $pdo->query('SELECT * FROM recruitment');
} catch (PDOException $e) {
    exit('データベースに接続できませんでした。' . $e->getMessage());
    die();
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
        <?php foreach ($result_list as $row) : ?>
            <div class="post_container">
                <div class="post_box">
                    <h1><?php echo "{$row['contents']}" ?></h1>
                </div>
                <p class="post_detail"><?php echo "募集人数：" . "{$row['number_of_applicants']}" . "名" ?></p>
                <p class="post_detail"><?php echo "使いたい言語：" . "{$row['language']}" ?></p>
                <p class="post_detail"><?php echo "ひとこと：" . "{$row['a_few_words']}" ?></p>
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
        <?php endforeach; ?>

    </div>
    <?php include("footer.php"); ?>
</body>

</html>
