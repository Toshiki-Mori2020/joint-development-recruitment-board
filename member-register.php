<?php

require_once("dbconnect.php");
session_start();

if (!empty($_POST)) {
    //必須項目の入力確認
    if ($_POST['name'] === "") {
        $error['name'] = "blank";
    }
    if ($_POST['nickname'] === "") {
        $error['nickname'] = "blank";
    }
    if ($_POST['language1'] === "") {
        $error['language1'] = "blank";
    }
    if ($_POST['mail'] === "") {
        $error['mail'] = "blank";
    }
    if ($_POST['password'] === "") {
        $error['password'] = "blank";
    }
    if (!isset($error)) {
        $member = $db->prepare('SELECT COUNT(*) as cnt FROM member WHERE mail=?');
        $member->execute(array($_POST['mail']));
        $record = $member->fetch();
        if ($record['cnt'] > 0) {
            $error['email'] = 'duplicate';
        }
    }

    //エラーがなければ次へ
    if (!isset($error)) {
        $_SESSION['join'] = $_POST;
        header('Location: member-register-confirm.php');
        exit();
    }
}

?>

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
                <p>名前:<input type="text" name="name" id="name"><span class="red">必須</span></p>
                <?php if (!empty($error["name"]) && $error['name'] === 'blank') : ?>
                    <p class="error">*名前を入力してください</p>
                <?php endif ?>
                <p>ニックネーム:<input type="text" placeholder="※こちらの項目は他のユーザーが確認できます" name="nickname" id="nickname"><span class="red">必須</span></p>
                <?php if (!empty($error["nickname"]) && $error['nickname'] === 'blank') : ?>
                    <p class="error">*ニックネームを入力してください</p>
                <?php endif ?>
                <p>使える言語1:<input type="text" placeholder="※こちらの項目は他のユーザーが確認できます" name="language1" id="language"><span class="red">必須</span></p>
                <?php if (!empty($error["language1"]) && $error['language1'] === 'blank') : ?>
                    <p class="error">*一つは言語を入力してください</p>
                <?php endif ?>
                <p>使える言語2:<input type="text" placeholder="※こちらの項目は他のユーザーが確認できます" name="language2" id="language"></p>
                <p>使える言語3:<input type="text" placeholder="※こちらの項目は他のユーザーが確認できます" name="language3" id="language"></p>
                <p>使える言語4:<input type="text" placeholder="※こちらの項目は他のユーザーが確認できます" name="language4" id="language"></p>
                <p>使える言語5:<input type="text" placeholder="※こちらの項目は他のユーザーが確認できます" name="language5" id="language"></p>
                <p>メールアドレス:<input type="text" name="mail" id="mail"><span class="red">必須</span></p>
                <?php if (!empty($error["mail"]) && $error['mail'] === 'blank') : ?>
                    <p class="error">*メールアドレスを入力してください</p>
                <?php elseif (!empty($error["mail"]) && $error['mail'] === 'duplicate') : ?>
                <?php endif ?>
                <p>パスワード:<input type="text" name="password" id="password"><span class="red">必須</span></p>
                <?php if (!empty($error["password"]) && $error['password'] === 'blank') : ?>
                    <p class="error">*一つは言語を入力してください</p>
                <?php endif ?>
                <p>※使える言語は担当したい領域で使える言語を記載してください</p>
                <button type="submit" id="member-register_button_detail">確認画面</button>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>
