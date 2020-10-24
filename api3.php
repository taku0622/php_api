<?php
$json = file_get_contents("php://input");
if (!isset($json)) {
  echo $json;
} else {
  echo "no data";
}
error_log("form api3.php" . json_decode($json));
