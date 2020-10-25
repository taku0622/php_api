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
                'type' => 'uri',
                'label' => '詳細',
                'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/64555/'
              ]
            ]
          ],
          [
            'thumbnailImageUrl' => 'https://example.com/bot/images/item1.jpg',
            'imageBackgroundColor' => '#FFFFFF',
            'title' => '2020年度第2学期（後期）放送大学特別聴講学生',
            'text' => '放送大学特別聴講学生へ',
            'defaultAction' => [
              'type' => 'uri',
              'label' => 'View detail',
              'uri' => 'https://service.cloud.teu.ac.jp/inside2/wp-content/uploads/2020/10/2020_dai2gakki_housoudaigaku_1022.pdf'
            ],
            'actions' => [
              [
                'type' => 'uri',
                'label' => '詳細',
                'uri' => 'https://service.cloud.teu.ac.jp/inside2/wp-content/uploads/2020/10/2020_dai2gakki_housoudaigaku_1022.pdf'
              ]
            ]
          ],
          [
            'thumbnailImageUrl' => 'https://example.com/bot/images/item1.jpg',
            'imageBackgroundColor' => '#FFFFFF',
            'title' => '【CS学部】2020年度「創成課題」教室（10/22更新）',
            'text' => '属された研究室ごとに、創成課題を行います。',
            'defaultAction' => [
              'type' => 'uri',
              'label' => 'View detail',
              'uri' => 'https://service.cloud.teu.ac.jp/inside2/wp-content/uploads/2020/10/2020CS_souseikadai_kyousitu20201022.pdf'
            ],
            'actions' => [
              [
                'type' => 'uri',
                'label' => '詳細',
                'uri' => 'https://service.cloud.teu.ac.jp/inside2/wp-content/uploads/2020/10/2020CS_souseikadai_kyousitu20201022.pdf'
              ]
            ]
          ], [
            'thumbnailImageUrl' => 'https://example.com/bot/images/item1.jpg',
            'imageBackgroundColor' => '#FFFFFF',
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
          ], [
            'thumbnailImageUrl' => 'https://example.com/bot/images/item1.jpg',
            'imageBackgroundColor' => '#FFFFFF',
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
