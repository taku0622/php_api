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

//curl実行
$ch = curl_init("https://tut-line-bot-test.glitch.me/push");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'Content-Type: application/json; charser=UTF-8'
));
$result = curl_exec($ch);
curl_close($ch);

//curl実行
$ch = curl_init("https://chatbot-1015-b.herokuapp.com/");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'Content-Type: application/json; charser=UTF-8'
));
$result = curl_exec($ch);
curl_close($ch);
