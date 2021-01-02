<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>共同開発募集.com</title>
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet" type="text/css" href="css/recruit.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body>
    <?php include("header.php"); ?>
    <div class="wrapper">
        <div class="title">
            <h1>募集内容修正</h1>
        </div>
        <div class="member-register_content">
            <div class="profile">
                <p>作成内容:<input type="text" name="create_details" id="create_details"></p>
                <p>募集人数:<input type="text" name="recruit" id="recruit"></p>
                <p>使いたい言語:<input type="text" name="use_language" id="use_language"></p>
                <p>ひとこと:<input type="text" name="few_words" id="few_words"></p>
                <input type="submit" value="確認画面" name="submit" id="recruit_button">
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>
