<?php
//  共通ファイル読み込み
require_once('func.php');
require_once('var.php');
require_once('bot_func.php');

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
