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
        ]
      ],
      'imageAspectRatio' => 'rectangle',
      'imageSize' => 'cover'
    ]
  ]
];

//POSTデータ
$data = [
  'to' => $userId,
  'messages' => $messages
];

// URLを指定
$url = "https://tut-line-bot-test.glitch.me/push";

// POST用関数
function http_post($url, $data)
{
  $data_url = http_build_query($data);
  $data_len = strlen($data_url);

  return array(
    'content' =>  file_get_contents(
      $url,
      false,
      stream_context_create(
        array('http' =>
        array(
          'method' => 'POST',
          'header' => "Content-Type: text/plain\r\n" . "User-Agent: php.file_get_contents\r\n" . "Content-Length: $data_len\r\n",
          'content' => $data_url
        ))
      )
    ),
    'headers' => $http_response_header
  );
}

// 送信
$result = http_post($url, $data);
var_dump($result);
