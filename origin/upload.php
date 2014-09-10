<?php
$i = file_get_contents('php://input');
error_log($i);

echo "recieved.";
