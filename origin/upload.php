<?php
// cookie　を使うために必要なあれ
header('Access-Control-Allow-Origin: http://localhost:8888');
header('Access-Control-Allow-Credentials: true');

echo print_r($_REQUEST, true);
echo "\n";

$i = file_get_contents('php://input');
echo "php://input : [$i]";
echo "\n";
