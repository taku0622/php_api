<?php
// LINEサーバへ送信実行関数
function post($url, $object)
{
  // JSON形式への変換
  $json = json_encode($object);

  // 送信の準備
  $curl = curl_init("https://bot-php-api.herokuapp.com/api.php");
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
  // curl_setopt($curl, CURLOPT_HTTPHEADER, [
  //   'Content-Type: application/json',
  //   'Authorization: Bearer ' . TOKEN
  // ]);
  error_log(gettype($curl));
  error_log("finish");
  error_log("finish");

  // 送信の実行
  $result = curl_exec($curl);

  // 送信の終了
  curl_close($curl);
}

// LINEサーバへの送信データ生成関数
function reply($event, $text)
{
  // 送信のデータの作成
  $object = [
    'replyToken' => $event->replyToken,
    'messages' => [['type' => 'text', 'text' => $text]]
  ];
  error_log(json_encode($object, JSON_UNESCAPED_UNICODE));
  // 送信実行
  post('reply', $object);
}
