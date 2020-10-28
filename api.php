<?php
//  共通ファイル読み込み
require_once('data.php');
require_once('to1015b.php');
require_once('watson.php');

// リクエストの取得
$input = file_get_contents('php://input');
error_log($input);

// リクエストが空でないことを確認
if (!empty($input)) {
  // イベントの取得
  $events = json_decode($input)->events;
  // 各イベントに対するBotプログラムの実行
  foreach ($events as $event) {
    try {
      // botの実行
      error_log(json_encode($event, JSON_UNESCAPED_UNICODE));
      bot($event);
      to1015b($event);
    } catch (Exception $e) {
      // エラーMsg作成
      $errMsg = "ERROR:" . $e->getMessage();
    }
  }
}

function bot($event)
{
  // ユーザー入力を取得
  $text = $event->message->text;
  $userId = $event->source->userId;
  reply($userId, $text);
}

// LINEサーバへ送信実行関数
function post($object)
{
  // JSON形式への変換
  echo json_encode($object, JSON_UNESCAPED_UNICODE);
}

// LINEサーバへの送信データ生成関数
function reply($userId, $text)
{
  // 送信のデータの作成
  switch ($text) {
    case "新着情報":
      $messages = new_info();
      break;
    case "重要情報":
      $messages = important_info();
      break;
    case "休講案内":
      $messages = cancel_info();
      break;
    case "イベント":
      $messages = event_info();
      break;
      // case "質問":
      //   $messages = question();
      //   break;
      // case preg_match('/(履修)$/', $text):
      //   $messages = ans1();
      //   break;
      // case preg_match('/(証明書)$/', $text):
      //   $messages = ans2();
      //   break;
    default:
      // $messages = irrelevant();
      $messages = watson($userId, $text);
      break;
  }
  $object = [
    'to' => $userId,
    'messages' => $messages
  ];
  // error_log("this is :" . json_encode($object, JSON_UNESCAPED_UNICODE));
  // 送信実行
  post($object);
}
