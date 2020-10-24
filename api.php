<?php
// $object = [
//   'to' => $event->replyToken,
//   'messages' => $text
// ];
// echo json_encode($object, JSON_UNESCAPED_UNICODE);

// リクエストの取得
$input = file_get_contents('php://input');

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
  error_log($text);
  reply($event, $text);
}

function new_info()
{
  $arr = ["新着情報1", "新着情報2"];
  return $arr;
}

// LINEサーバへ送信実行関数
function post($object)
{
  // JSON形式への変換
  $json = json_encode($object, JSON_UNESCAPED_UNICODE);
  // 送信の準備
  // リクエストヘッダー 設定
  $headers = array(
    "Content-Type: application/json",
  );
  // $curl = curl_init("https://chatbot-1015-b.herokuapp.com/index.php");
  $curl = curl_init("https://tut-line-bot-test.glitch.me/push");
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  // 送信の実行
  $result1 = curl_exec($curl);
  // 送信の終了
  curl_close($curl);

  $curl = curl_init("https://chatbot-1015-b.herokuapp.com/index.php");
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  // 送信の実行
  $result2 = curl_exec($curl);
  // 送信の終了
  curl_close($curl);

  header("Content-Type: text/javascript; charset=utf-8");
  echo json_encode($object, JSON_UNESCAPED_UNICODE); // 配列をJSON形式に変換してくれる
  error_log("done echo!!!!");
  // exit();

  ################################################
  $url = 'https://tut-line-bot-test.glitch.me/push';

  $ch = curl_init($url);

  curl_setopt(
    $ch,
    CURLOPT_POST,
    TRUE
  );                            //POSTで送信
  curl_setopt(
    $ch,
    CURLOPT_POSTFIELDS,
    http_build_query($json)
  );    //データをセット
  curl_setopt(
    $ch,
    CURLOPT_RETURNTRANSFER,
    TRUE
  );                    //受け取ったデータを変数に
  $html = curl_exec($ch);

  if (curl_errno($ch)) {        //curlでエラー発生
    $CURLERR .= 'curl_errno：' . curl_errno($ch) . "\n";
    $CURLERR .= 'curl_error：' . curl_error($ch) . "\n";
    $CURLERR .= '▼curl_getinfo' . "\n";
    foreach (curl_getinfo($ch) as $key => $val) {
      $CURLERR .= '■' . $key . '：' . $val . "\n";
    }
    echo nl2br($CURLERR);
  }
  curl_close($ch);
  echo $html;
  ################################################
}

// LINEサーバへの送信データ生成関数
function reply($event, $text)
{
  // 送信のデータの作成
  switch ($text) {
    case "新着情報":
      $text = new_info();
      break;
    default:
      break;
  }
  // $object = [
  //   'replyToken' => $event->replyToken,
  //   'messages' => [['type' => 'text', 'text' => $text]]
  // ];
  $object = [
    'to' => $event->replyToken,
    'messages' => $text
  ];
  error_log(json_encode($object, JSON_UNESCAPED_UNICODE));
  // 送信実行
  post($object);
}
