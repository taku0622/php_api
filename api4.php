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


$curl = curl_init("https://tut-line-bot-test.glitch.me/");
curl_setopt($curl, CURLOPT_POST, TRUE);
// ↓はmultipartリクエストを許可していないサーバの場合はダメっぽいです
// @DrunkenDad_KOBAさん、Thanks
curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
// curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($json));
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);  // オレオレ証明書対策
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);  // 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_COOKIEJAR,      'cookie');
curl_setopt($curl, CURLOPT_COOKIEFILE,     'tmp');
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE); // Locationヘッダを追跡
//curl_setopt($curl,CURLOPT_REFERER,        "REFERER");
//curl_setopt($curl,CURLOPT_USERAGENT,      "USER_AGENT"); 

$output = curl_exec($curl);

var_dump($output);
