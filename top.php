<?php

require_once("dbconnect.php");

function mb_wordwrap($str, $width = 50, $break = "\n")
{
    $w = mb_strwidth($str, "eucJP-win");
    $arr = array();
    if ($w < $width) {
        return $str;
    }
    while ($w > $width) {
        $trimStr = mb_strimwidth($str, 0, $width, "", "eucJP-win");
        $arr[] = $trimStr;
        $str = preg_replace("/^$trimStr/", "", $str);
        $w = mb_strwidth($str, "eucJP-win");
    }
    $arr[] = $str;
    return implode($break, $arr);
}


$str = $row['a_few_words'];

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
                <p class="post_detail">-------------------------------------</p>
                <p class="post_detail"><?php echo "ひとこと：" . mb_wordwrap($str, 7, '<br />'); ?></p>
                <p class="post_detail">-------------------------------------</p>
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
