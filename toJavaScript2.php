<?php
$contents = [
  [
    'title' => '2020年10月22日 3時限　並列・分散処理',
    'content' => 'コンピュータサイエンス学部',
    'uri' => 'https://service.cloud.teu.ac.jp/inside2/hachiouji/hachioji_common/cancel/',
    'label' => '詳細'
  ],
  [
    'title' => '2020年10月27日 1,2,3時限　スポーツ実技Ⅳ',
    'content' => 'コンディショニングエクササイズ　工学部(学科共通), メディア学部, コンピュータサイエンス学部, 応用生物学部',
    'uri' => 'https://service.cloud.teu.ac.jp/inside2/hachiouji/hachioji_common/cancel/',
    'label' => '詳細'
  ],
  [
    'title' => '2020年11月06日 1時限　知的財産権',
    'content' => '工学部(学科共通)',
    'uri' => 'https://service.cloud.teu.ac.jp/inside2/hachiouji/hachioji_common/cancel/',
    'label' => '詳細'
  ]
];
$message = [
  "to" => ["U6e0f4008a090ff5b5bef0323cae3428e"],
  "type" => "multiple",
  "altText" =>  $text,
  "contents" => $contents
];


// heroku logに表示
error_log("########################## push important info is ##########################");
error_log(json_encode($message, JSON_UNESCAPED_UNICODE));

// JSON形式への変換
// echo json_encode($object, JSON_UNESCAPED_UNICODE);

// JSON形式への変換
$data = json_encode([$message], JSON_UNESCAPED_UNICODE);
// echo "##################\n";
// echo gettype($data);
// echo $data;
// echo "##################\n";
$options = array(
  'http' => array(
    'method' => 'POST',
    'header' => "Content-type: text/plain\n"
      . "User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36\r\n" // 適当に名乗ったりできます
      . "Content-Length: " . strlen($data) . "\r\n",
    'content' => $data
  )
);
$context = stream_context_create($options);
$response = file_get_contents('https://tut-line-bot-test.glitch.me/push', false, $context);
// echo gettype($response);
echo $response;
