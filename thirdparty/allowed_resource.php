<?php

header('Access-Control-Allow-Origin: http://localhost:8888');
header('Access-Control-Allow-Credentials: true');

echo "Hello from thirdparty, zgok:".$_COOKIE['zgok'];
