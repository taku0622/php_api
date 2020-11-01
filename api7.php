<?php
require_once('data.php');

// $userId = getenv('USERID');
$userId = "2323423455n3j";
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
        ],
        [
          'title' => '【図書館】図書館アルバイトを募集します！＜八王子キャンパス＞',
          'text' => 'お申し込みを お待ちしています。',
          'defaultAction' => [
            'type' => 'uri',
            'label' => 'View detail',
            'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/12658/'
          ],
          'actions' => [
            [
              'type' => 'uri',
              'label' => '詳細',
              'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/12658/'
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
$json =  json_encode($object, JSON_UNESCAPED_UNICODE);


$url = 'https://tut-line-bot-test.glitch.me/push';


$options = array(
  'http' => array(
    'method'  => 'POST',
    'content' => $json,
    'header' =>  'User-Agent: Mozilla/5.0 (Windows NT 6.3; WOW64; Trident/7.0; Touch; rv:11.0) like Gecko'
  )
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$result = json_decode($result);

var_dump($result);
