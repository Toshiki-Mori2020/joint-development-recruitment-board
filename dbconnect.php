<?php
require_once('config.php');

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
