<?php

// 送信データ
$data = array(
  "key1" => "value1",
  "key2" => "value2"
);

// URLエンコードされたクエリ文字列を生成
$data = http_build_query($data, "", "&");

// ストリームコンテキストのオプションを作成
$options = array(
  // HTTPコンテキストオプションをセット
  'http' => array(
    'method' => 'POST',
    'header' => 'Content-Type: application/x-www-form-urlencoded',
    'content' => $data
  )
);

// ストリームコンテキストの作成
$context = stream_context_create($options);

// POST送信
$contents = file_get_contents('https://tut-line-bot-test.glitch.me/', false, $context);

// reception.php のレスポンスを表示
echo $contents;
