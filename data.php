<?php
function new_info()
{
  $messages = [
    [
      'type' => 'template',
      'altText' => '新着情報',
      'template' => [
        'type' => 'carousel',
        'columns' => [
          [
            'thumbnailImageUrl' => 'https://example.com/bot/images/item1.jpg',
            'imageBackgroundColor' => '#FFFFFF',
            'title' => '【図書館】リクエストの結果報告＜八王子キャンパス＞',
            'text' => '10月（前半）の選書の結果、以下のリクエストが採択されました。',
            'defaultAction' => [
              'type' => 'uri',
              'label' => 'View detail',
              'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/64555/'
            ],
            'actions' => [
              [
                'type' => 'url',
                'label' => '詳細',
                'url' => 'https://service.cloud.teu.ac.jp/inside2/archives/64555/'
              ]
            ]
          ]
        ],
        'imageAspectRatio' => 'rectangle',
        'imageSize' => 'cover'
      ]
    ]
  ];
  return $messages;
}

function important_info()
{
  $messages = [
    [
      'type' => 'template',
      'altText' => '重要情報',
      'template' => [
        'type' => 'carousel',
        'columns' => [
          [
            'thumbnailImageUrl' => 'https://example.com/bot/images/item1.jpg',
            'imageBackgroundColor' => '#FFFFFF',
            'title' => '重要情報1',
            'text' => 'description',
            'defaultAction' => [
              'type' => 'uri',
              'label' => 'View detail',
              'uri' => 'http://example.com/page/123'
            ],
            'actions' => [
              [
                'type' => 'postback',
                'label' => 'Buy',
                'data' => 'action=buy&itemid=111'
              ],
              [
                'type' => 'postback',
                'label' => 'Add to cart',
                'data' => 'action=buy&itemid=111'
              ],
              [
                'type' => 'postback',
                'label' => 'View detail',
                'data' => 'action=buy&itemid=111'
              ]
            ]
          ],
          [
            'thumbnailImageUrl' => 'https://example.com/bot/images/item2.jpg',
            'imageBackgroundColor' => '#000000',
            'title' => '重要情報2',
            'text' => 'description',
            'defaultAction' => [
              'type' => 'uri',
              'label' => 'View detail',
              'uri' => 'http://example.com/page/222'
            ],
            'actions' => [
              [
                'type' => 'postback',
                'label' => 'Buy',
                'data' => 'action=buy&itemid=222'
              ],
              [
                'type' => 'postback',
                'label' => 'Add to cart',
                'data' => 'action=buy&itemid=222'
              ],
              [
                'type' => 'postback',
                'label' => 'View detail',
                'data' => 'action=buy&itemid=222'
              ]
            ]
          ]
        ],
        'imageAspectRatio' => 'rectangle',
        'imageSize' => 'cover'
      ]
    ]
  ];
  return $messages;
}

function cancel_info()
{
  $messages = [
    [
      'type' => 'template',
      'altText' => '休講案内',
      'template' => [
        'type' => 'carousel',
        'columns' => [
          [
            'thumbnailImageUrl' => 'https://example.com/bot/images/item1.jpg',
            'imageBackgroundColor' => '#FFFFFF',
            'title' => '休講案内1',
            'text' => 'description',
            'defaultAction' => [
              'type' => 'uri',
              'label' => 'View detail',
              'uri' => 'http://example.com/page/123'
            ],
            'actions' => [
              [
                'type' => 'postback',
                'label' => 'Buy',
                'data' => 'action=buy&itemid=111'
              ],
              [
                'type' => 'postback',
                'label' => 'Add to cart',
                'data' => 'action=buy&itemid=111'
              ],
              [
                'type' => 'postback',
                'label' => 'View detail',
                'data' => 'action=buy&itemid=111'
              ]
            ]
          ],
          [
            'thumbnailImageUrl' => 'https://example.com/bot/images/item2.jpg',
            'imageBackgroundColor' => '#000000',
            'title' => '休講案内2',
            'text' => 'description',
            'defaultAction' => [
              'type' => 'uri',
              'label' => 'View detail',
              'uri' => 'http://example.com/page/222'
            ],
            'actions' => [
              [
                'type' => 'postback',
                'label' => 'Buy',
                'data' => 'action=buy&itemid=222'
              ],
              [
                'type' => 'postback',
                'label' => 'Add to cart',
                'data' => 'action=buy&itemid=222'
              ],
              [
                'type' => 'postback',
                'label' => 'View detail',
                'data' => 'action=buy&itemid=222'
              ]
            ]
          ]
        ],
        'imageAspectRatio' => 'rectangle',
        'imageSize' => 'cover'
      ]
    ]
  ];
  return $messages;
}

function event_info()
{
  $text = "今後のイベントはこのようになっています\n
    11/03(火):祝日授業開講\n
    11/14(土):補講\n
    11/23(月):祝日授業開講\n
    12月中旬:後期末試験時間割発表\n
    12/26(土)~01/04(月):冬期休業\n";
  $messages = [
    "type" => "text",
    "text" =>  $text
  ];
  return $messages;
}
