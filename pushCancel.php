<?php
require_once('data.php');

$userId = [
  "U6e0f4008a090ff5b5bef0323cae3428e"
];
// $userId = "2323423455n3j";
$messages = [
  [
    'type' => 'template',
    'altText' => '休講情報',
    'template' => [
      'type' => 'carousel',
      'columns' => [
        [
          'title' => '2020年10月22日 3時限　並列・分散処理',
          'text' => 'コンピュータサイエンス学部',
          'defaultAction' => [
            'type' => 'uri',
            'label' => 'View detail',
            'uri' => 'https://service.cloud.teu.ac.jp/inside2/hachiouji/hachioji_common/cancel/'
          ],
          'actions' => [
            [
              'type' => 'uri',
              'label' => '詳細',
              'uri' => 'https://service.cloud.teu.ac.jp/inside2/hachiouji/hachioji_common/cancel/'
            ]
          ]
        ],
        [
          'title' => '2020年10月27日 1,2,3時限　スポーツ実技Ⅳ',
          'text' => 'コンディショニングエクササイズ　工学部(学科共通), メディア学部, コンピュータサイエンス学部, 応用生物学部 ',
          'defaultAction' => [
            'type' => 'uri',
            'label' => 'View detail',
            'uri' => 'https://service.cloud.teu.ac.jp/inside2/hachiouji/hachioji_common/cancel/'
          ],
          'actions' => [
            [
              'type' => 'uri',
              'label' => '詳細',
              'uri' => 'https://service.cloud.teu.ac.jp/inside2/hachiouji/hachioji_common/cancel/'
            ]
          ]
        ]
      ],
      'imageAspectRatio' => 'rectangle',
      'imageSize' => 'cover'
    ]
  ]
];

$object = [
  'to' => $userId,
  'messages' => $messages
];


// heroku logに表示
error_log("########################## push important info is ##########################");
error_log(json_encode($object, JSON_UNESCAPED_UNICODE));

// JSON形式への変換
// echo json_encode($object, JSON_UNESCAPED_UNICODE);

// JSON形式への変換
$data = json_encode($object, JSON_UNESCAPED_UNICODE);
// echo "##################\n";
// echo gettype($data);
// echo $data;
// echo "##################\n";
$options = array(
  'http' => array(
    'method' => 'POST',
    'header' => "Content-type: text/plain\n"
      . "User-Agent: php.file_get_contents\r\n" // 適当に名乗ったりできます
      . "Content-Length: " . strlen($data) . "\r\n",
    'content' => $data
  )
);
$context = stream_context_create($options);
$response = file_get_contents('https://tut-line-bot-test.glitch.me/push', false, $context);
// echo gettype($response);
echo $response;
