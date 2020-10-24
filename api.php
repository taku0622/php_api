<?php
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

// function new_info($event)
// {
//   $ans = "新着情報1\n新着情報2\n新着情報3\n新着情報4\n新着情報5";
//   $object = [
//     'replyToken' => $event->replyToken,
//     'messages' => [['type' => 'text', 'text' => $ans]]
//   ];
//   error_log("this is " . json_encode($event, JSON_UNESCAPED_UNICODE));
//   return $object;
// }

// LINEサーバへ送信実行関数
function post($object)
{
  // JSON形式への変換
  $json = json_encode($object, JSON_UNESCAPED_UNICODE);
  // 送信の準備
  // リクエストヘッダー 設定
  $headers = array(
    "Content-Type: application/javascript",
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

  $headers = array(
    "Content-Type: application/json",
  );
  $curl = curl_init("https://chatbot-1015-b.herokuapp.com/index.php");
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  // 送信の実行
  $result2 = curl_exec($curl);
  // 送信の終了
  curl_close($curl);
}

//   $url = 'https://tut-line-bot-test.glitch.me/push';

//   $contents_array = post_request($url, $json);
// }
// function post_request($url, $json)
// {
//   // $json = array(
//   //   'id' => 100,
//   //   'msg' => 'hey'
//   // );
//   //curlおじさんを初期化
//   $ch = curl_init();
//   //配列をhttp_build_queryでエンコードしてあげること
//   curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($json));

//   //上記で述べたピア問題
//   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

//   //相手側からのデータの返り値を文字列で取得
//   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//   //TRUE を設定すると、ヘッダの内容も出力します。
//   // curl_setopt($ch, CURLOPT_HEADER, 1);

//   //Content-Typeとユーザエージェントを指定
//   $headers = array(
//     "Content-Type: application/x-www-form-urlencoded",
//     "User-Agent:Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36"
//   );
//   curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

//   //送信先の指定
//   curl_setopt($ch, CURLOPT_URL, $url);
//   //curlおじさん実行
//   $response_json = curl_exec($ch);
//   $result = json_decode($response_json);
//   //curlおじさんを閉じる
//   curl_close($ch);
// }

// LINEサーバへの送信データ生成関数
function reply($event, $text)
{
  // 送信のデータの作成
  switch ($text) {
    case "新着情報":
      $text = "新着情報1\n新着情報2\n新着情報3\n新着情報4\n新着情報5";
      $object = [
        'replyToken' => $event->replyToken,
        'messages' => [['type' => 'text', 'text' => $text]]
      ];
      error_log("this is " . json_encode($event, JSON_UNESCAPED_UNICODE));
      break;
    default:
      break;
  }
  // $object = [
  //   'replyToken' => $event->replyToken,
  //   'messages' => [['type' => 'text', 'text' => $text]]
  // ];
  // $object = [
  //   'to' => $event->replyToken,
  //   'messages' => [['type' => 'text', 'text' => $text]]
  // ];
  // 送信実行
  post($object);
}
