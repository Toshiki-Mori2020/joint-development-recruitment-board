<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>共同開発募集.com</title>
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet" type="text/css" href="css/mypage.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body>
    <?php include("header.php"); ?>
    <div class="wrapper">
        <div class="title">
            <h1>マイページ</h1>
        </div>
        <div class="mypage_content">
            <div class="profile">
                <p>名前:</p>
                <p>ニックネーム:</p>
                <p>使える言語1:</p>
                <p>使える言語2:</p>
                <p>使える言語3:</p>
                <p>使える言語4:</p>
                <p>使える言語5:</p>
                <p>メールアドレス:</p>
                <p>パスワード:</p>
                <input type="submit" value="内容修正" name="submit" id="mypage_button_detail">
            </div>

            <div class="recruited_Projects">
                <h1>募集した案件</h1>
                <div class="post_container">
                    <div class="post_box">
                        <h2>作成内容</h2>
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

            <div class="applied_Projects">
                <h1>応募した案件</h1>
                <div class="post_container">
                    <div class="post_box">
                        <h2>作成内容</h2>
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
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>
