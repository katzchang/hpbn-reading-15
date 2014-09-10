<?php

$s =  (int)$_GET['s'];

header('Content-Length: '. $s);

for ($i = 0; $i < $s; $i++) {
  echo $i;
  sleep(1);
}

echo "woke up.";
