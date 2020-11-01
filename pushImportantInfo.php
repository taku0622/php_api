<?php
require_once('data.php');

$userId = [
  "U6e0f4008a090ff5b5bef0323cae3428e"
];
// $userId = "2323423455n3j";
$messages = [
  [
    'type' => 'template',
    'altText' => '重要情報',
    'template' => [
      'type' => 'carousel',
      'columns' => [
        [
          'title' => '2020年度後期　履修に関する掲示一覧(八王子キャンパス)',
          'text' => '履修に関する掲示一覧(八王子キャンパス)',
          'defaultAction' => [
            'type' => 'uri',
            'label' => 'View detail',
            'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/2018/'
          ],
          'actions' => [
            [
              'type' => 'uri',
              'label' => '詳細',
              'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/2018/'
            ]
          ]
        ],
        [
          'title' => '2020年度後期 遠隔システム（Zoom）による相談受け付けについて',
          'text' => '前期に引き続き後期も遠隔システム（Zoom）で相談を受け付けます。',
          'defaultAction' => [
            'type' => 'uri',
            'label' => 'View detail',
            'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/93230/'
          ],
          'actions' => [
            [
              'type' => 'uri',
              'label' => '詳細',
              'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/93230/'
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
