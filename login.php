<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>共同開発募集.com</title>
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body>
    <?php include("header.php"); ?>
    <div class="wrapper">
        <div class="title">
            <h1>ログインページ</h1>
        </div>
        <div class="login_content">
            <p>メールアドレス:<input type="text" name="mail"></p>
            <p>パスワード:<input type="text" name="password" id="password_box"></p>
            <input type="submit" value="ログイン" name="submit" id="login_button_detail">
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>
