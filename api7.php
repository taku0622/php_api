<?php
require_once('data.php');

$userId = getenv('USERID');
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
        ],
        [
          'title' => '【八王子みなみ野駅】行きスクールバス発着所の一時変更について',
          'text' => '【八王子みなみ野駅】行きスクールバス発着所を一時変更いたしますので、ご確認ください。',
          'defaultAction' => [
            'type' => 'uri',
            'label' => 'View detail',
            'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/95242/'
          ],
          'actions' => [
            [
              'type' => 'uri',
              'label' => '詳細',
              'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/95242/'
            ]
          ]
        ],
        [
          'title' => 'オンライン大学祭の開催について',
          'text' => '今年度は新型コロナウイルスの影響',
          'defaultAction' => [
            'type' => 'uri',
            'label' => 'View detail',
            'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/95052/'
          ],
          'actions' => [
            [
              'type' => 'uri',
              'label' => '詳細',
              'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/95052/'
            ]
          ]
        ],
        [
          'title' => '【追加募集】令和2年度日本学生支援',
          'text' => '日本学生支援機構から給付型奨学金及び第二種奨学金',
          'defaultAction' => [
            'type' => 'uri',
            'label' => 'View detail',
            'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/95044/'
          ],
          'actions' => [
            [
              'type' => 'uri',
              'label' => '詳細',
              'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/95044/'
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
  'messages' => [$messages]
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
