<?php

require_once("dbconnect.php");

$dbh = new PDO($dsn, $user, $password);
$dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
$sql = 'SELECT * FROM apply ';
$stmt = $dbh->query($sql);
$stmt->execute();
$count = $stmt->rowCount();

if (isset($_GET['apply_hid']) == "1") {
    $disabled = "";
} else {
    $disabled = "disabled";
}

$sql2 = "INSERT INTO apply(member_id, recruitment_id) VALUES (?, ?)";

if (!empty($_POST['apply_hid'])) {
    try {
        $sql = 'INSERT INTO apply(member_id, recruitment_id) VALUES (?, ?)';
        $stmt = $dbh->prepare($sql);

        $stmt->bindParam(1, $_POST['member_id'], PDO::PARAM_INT);
        $stmt->bindParam(2, $_POST['recruitment_id'], PDO::PARAM_INT);
        $stmt->execute();

        header('location: http://localhost/portfolio/joint-development-recruitment-board/top.php');
        exit();
    } catch (PDOException $e) {
        echo 'データベースにアクセスできません' . $e->getMessage();
    }
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
                <div class="post_detail"><?php echo "募集人数：" . "{$row['number_of_applicants']}" . "名" ?></div>
                <p class="post_detail"><?php echo "使いたい言語：" . "{$row['language']}" ?></p>
                <p class="post_detail">-------------------------------------</p>
                <div class="a_few_words_detail"><?php echo "ひとこと<br>" . "{$row['a_few_words']}" ?></div>
                <p class="post_detail">-------------------------------------</p>
                <div class="post_contents">
                    <div class="post_button">
                        <button type="button" onclick="location.href='recruitment-detail.php'" id="post_button_detail">詳細ページ</button>
                    </div>
                    <div class="post_button">
                        <form action="top.php" method="POST">
                            <input type="hidden" name="apply_hid" value="1">
                            <input type="hidden" name="recruitment_id">
                            <input type="submit" value="応募ボタン" name="apply_button" id="post_button_detail" <?php $disabled ?>>
                        </form>
                    </div>
                    <div class="post_count">
                        <p>応募数</p>
                        <p class="count_box"><?PHP echo $count; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
    <?php include("footer.php"); ?>
</body>

</html>


<div class="button" style="display:inline-block">
    <a href="https://tan-taka.com/diver/contact" style="color:#F8FFF8;background:#3CA44F;"><i class="fa fa-envelope" aria-hidden="true"></i></a>
</div>
<div class="button" style="display:inline-block">
    <a href="https://tan-taka.com/diver/" style="color:#F8FFF8;background:#3CA44F;">お問い合わせ<br>043-309-8529</a>
</div>
