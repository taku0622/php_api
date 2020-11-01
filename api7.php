<?php
require_once('data.php');

$userId = getenv('USERID');
$messages = important_info();

$object = [
  'to' => [$userId],
  'messages' => $messages
];

// heroku logに表示
error_log("########################## push important info is ##########################");
error_log(json_encode($object, JSON_UNESCAPED_UNICODE));

// JSON形式への変換
// echo json_encode($object, JSON_UNESCAPED_UNICODE);

// JSON形式への変換
$json =  json_encode($object, JSON_UNESCAPED_UNICODE);


$url = 'http://hoge';


$options = array(
  'http' => array(
    'method'  => 'POST',
    'content' => $json,
    'header' =>  "Content-Type: application/json\r\n" .
      "Accept: application/json\r\n"
  )
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$result = json_decode($result);

var_dump($result);
