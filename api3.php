<?php
$json = file_get_contents("php://input");
echo gettype($json);
// echo json_encode($json, JSON_UNESCAPED_UNICODE);
