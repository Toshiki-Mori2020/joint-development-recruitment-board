<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>共同開発募集.com</title>
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet" type="text/css" href="css/member.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body>
    <?php include("header.php"); ?>
    <div class="wrapper">
        <div class="title">
            <h1>会員登録</h1>
        </div>
        <div class="member-register_content">
            <div class="profile">
                <p>名前:<input type="text" name="name" id="name"></p>
                <p>ニックネーム:<input type="text" name="nickname" id="nickname"></p>
                <p>使える言語1:<input type="text" name="language1" id="language"></p>
                <p>使える言語2:<input type="text" name="language2" id="language"></p>
                <p>使える言語3:<input type="text" name="language3" id="language"></p>
                <p>使える言語4:<input type="text" name="language4" id="language"></p>
                <p>使える言語5:<input type="text" name="language5" id="language"></p>
                <p>メールアドレス:<input type="text" name="mail" id="mail"></p>
                <p>パスワード:<input type="text" name="password" id="password"></p>
                <p>※使える言語は担当したい領域で使える言語を記載してください</p>
                <input type="submit" value="確認画面" name="submit" id="member-register_button_detail">
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>
