<?php
$json = file_get_contents("php://input");
echo json_encode($json, JSON_UNESCAPED_UNICODE);
echo $_POST["messages"];
