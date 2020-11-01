<?php
require_once('data.php');

$userId = [
  "U6e0f4008a090ff5b5bef0323cae3428e"
];
// $userId = "2323423455n3j";
$messages = [
  [
    'type' => 'template',
    'altText' => '新着情報',
    'template' => [
      'type' => 'carousel',
      'columns' => [
        [
          'title' => '【図書館】リクエストの結果報告＜八王子キャンパス＞',
          'text' => '10月（前半）の選書の結果、以下のリクエストが採択されました。',
          'defaultAction' => [
            'type' => 'uri',
            'label' => 'View detail',
            'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/64555/'
          ],
          'actions' => [
            [
              'type' => 'uri',
              'label' => '詳細',
              'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/64555/'
            ]
          ]
        ],
        [
          'title' => 'シェアサイクル設置のお知らせ（八王子キャンパス）',
          'text' => '八王子キャンパスにシェアサイクルを設置することになりました。',
          'defaultAction' => [
            'type' => 'uri',
            'label' => 'View detail',
            'uri' => 'https://service.cloud.teu.ac.jp/inside2/wp-content/uploads/2020/10/shearingu_settiosirase_1021.pdf'
          ],
          'actions' => [
            [
              'type' => 'uri',
              'label' => '詳細',
              'uri' => 'https://service.cloud.teu.ac.jp/inside2/wp-content/uploads/2020/10/shearingu_settiosirase_1021.pdf'
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
