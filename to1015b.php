<?php
function to1015b($event)
{
  // ユーザー入力を取得
  $text = $event->message->text;
  $userId = $event->source->userId;
  $object = [
    'to' => $userId,
    'messages' => $text
  ];
  $json = json_encode($object, JSON_UNESCAPED_UNICODE);
  $headers = array(
    "Content-Type: application/json",
  );
  $curl = curl_init("https://chatbot-1015-b.herokuapp.com/index.php");
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  // 送信の実行
  $result1 = curl_exec($curl);
  // 送信の終了
  curl_close($curl);
}
