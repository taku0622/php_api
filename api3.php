<?php
$json = file_get_contents("php://input");
if (!isset($json)) {
  echo $json;
} else {
  echo "no data";
}
// echo json_encode($json, JSON_UNESCAPED_UNICODE);
