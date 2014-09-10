<?php

// うけとった環境変数(webサーバー依存)
error_log(print_r($_SERVER, true));

// cookie　を使うために必要なあれ
header('Access-Control-Allow-Origin: http://localhost:8888');
header('Access-Control-Allow-Credentials: true');

// 独自ヘッダーを許可する場合は指定を入れる必要あり
// かつ allow-headers を確認するためにプリフライトが発生する
// header('Access-Control-Allow-Headers: X-From');
