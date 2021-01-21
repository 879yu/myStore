<?php

// ドライバ呼び出しを使用して MySQL データベースに接続
$dsn = 'mysql:dbname=codecamp29225;host=localhost';
$user = 'codecamp29225';
$password = 'GHPOIPML';

try {
    $dbh = new PDO($dsn, $user, $password);
    echo "接続成功\n";
} catch (PDOException $e) {

    // getMessage()を作成すること
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}