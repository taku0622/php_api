<?php
function new_info()
{
  // $messages = [
  //   [
  //     'type' => 'template',
  //     'altText' => '新着情報',
  //     'template' => [
  //       'type' => 'carousel',
  //       'columns' => [
  //         [
  //           'title' => '【図書館】リクエストの結果報告＜八王子キャンパス＞',
  //           'text' => '10月（前半）の選書の結果、以下のリクエストが採択されました。',
  //           'defaultAction' => [
  //             'type' => 'uri',
  //             'label' => 'View detail',
  //             'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/64555/'
  //           ],
  //           'actions' => [
  //             [
  //               'type' => 'uri',
  //               'label' => '詳細',
  //               'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/64555/'
  //             ]
  //           ]
  //         ],
  //         [
  //           'title' => '2020年度第2学期（後期）放送大学特別聴講学生',
  //           'text' => '放送大学特別聴講学生へ',
  //           'defaultAction' => [
  //             'type' => 'uri',
  //             'label' => 'View detail',
  //             'uri' => 'https://service.cloud.teu.ac.jp/inside2/wp-content/uploads/2020/10/2020_dai2gakki_housoudaigaku_1022.pdf'
  //           ],
  //           'actions' => [
  //             [
  //               'type' => 'uri',
  //               'label' => '詳細',
  //               'uri' => 'https://service.cloud.teu.ac.jp/inside2/wp-content/uploads/2020/10/2020_dai2gakki_housoudaigaku_1022.pdf'
  //             ]
  //           ]
  //         ],
  //         [
  //           'title' => '【CS学部】2020年度「創成課題」教室（10/22更新）',
  //           'text' => '属された研究室ごとに、創成課題を行います。',
  //           'defaultAction' => [
  //             'type' => 'uri',
  //             'label' => 'View detail',
  //             'uri' => 'https://service.cloud.teu.ac.jp/inside2/wp-content/uploads/2020/10/2020CS_souseikadai_kyousitu20201022.pdf'
  //           ],
  //           'actions' => [
  //             [
  //               'type' => 'uri',
  //               'label' => '詳細',
  //               'uri' => 'https://service.cloud.teu.ac.jp/inside2/wp-content/uploads/2020/10/2020CS_souseikadai_kyousitu20201022.pdf'
  //             ]
  //           ]
  //         ],
  //         [
  //           'title' => 'シェアサイクル設置のお知らせ（八王子キャンパス）',
  //           'text' => '八王子キャンパスにシェアサイクルを設置することになりました。',
  //           'defaultAction' => [
  //             'type' => 'uri',
  //             'label' => 'View detail',
  //             'uri' => 'https://service.cloud.teu.ac.jp/inside2/wp-content/uploads/2020/10/shearingu_settiosirase_1021.pdf'
  //           ],
  //           'actions' => [
  //             [
  //               'type' => 'uri',
  //               'label' => '詳細',
  //               'uri' => 'https://service.cloud.teu.ac.jp/inside2/wp-content/uploads/2020/10/shearingu_settiosirase_1021.pdf'
  //             ]
  //           ]
  //         ],
  //         [
  //           'title' => '【図書館】図書館アルバイトを募集します！＜八王子キャンパス＞',
  //           'text' => 'お申し込みを お待ちしています。',
  //           'defaultAction' => [
  //             'type' => 'uri',
  //             'label' => 'View detail',
  //             'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/12658/'
  //           ],
  //           'actions' => [
  //             [
  //               'type' => 'uri',
  //               'label' => '詳細',
  //               'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/12658/'
  //             ]
  //           ]
  //         ]
  //       ],
  //       'imageAspectRatio' => 'rectangle',
  //       'imageSize' => 'cover'
  //     ]
  //   ]
  // ];
  $messages = [
    'type' => 'array',
    'content' => [
      [
        'title' => '【図書館】リクエストの結果報告＜八王子キャンパス＞',
        'content' => '10月（前半）の選書の結果、以下のリクエストが採択されました。',
        'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/64555/',
        'label' => '詳細'
      ],
      [
        'title' => '2020年度第2学期（後期）放送大学特別聴講学生',
        'content' => '放送大学特別聴講学生へ',
        'uri' => 'https://service.cloud.teu.ac.jp/inside2/wp-content/uploads/2020/10/2020_dai2gakki_housoudaigaku_1022.pdf',
        'label' => '詳細'
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
          #----------------------------------------1---------------------------------------------
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
          #----------------------------------------2---------------------------------------------
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
          #----------------------------------------3---------------------------------------------
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
          #----------------------------------------4---------------------------------------------
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
          #----------------------------------------5---------------------------------------------
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
          #----------------------------------------1---------------------------------------------
          [
            'title' => '2020年10月22日 3時限　並列・分散処理',
            'text' => 'コンピュータサイエンス学部 ',
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
          #----------------------------------------2---------------------------------------------
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
          ],
          #----------------------------------------3---------------------------------------------
          [
            'title' => '2020年11月06日 1時限　知的財産権',
            'text' => '工学部(学科共通) ',
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
  return $messages;
}

function event_info()
{
  $messages = [
    [
      'type' => 'template',
      'altText' => 'イベント',
      'template' => [
        'type' => 'carousel',
        'columns' => [
          #----------------------------------------1---------------------------------------------
          [
            'title' => '『学内ミニ合同企業説明会』の開催について',
            'text' => '【対象:2020年3月卒業･修了予定者】',
            'defaultAction' => [
              'type' => 'uri',
              'label' => 'View detail',
              'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/76553/'
            ],
            'actions' => [
              [
                'type' => 'uri',
                'label' => '詳細',
                'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/76553/'
              ]
            ]
          ],
          #----------------------------------------2---------------------------------------------
          [
            'title' => 'クリエイティブ業界学内合同企業セミナーのお知らせ',
            'text' => '学内合同企業セミナーを実施します',
            'defaultAction' => [
              'type' => 'uri',
              'label' => 'View detail',
              'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/35103/'
            ],
            'actions' => [
              [
                'type' => 'uri',
                'label' => '詳細',
                'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/35103/'
              ]
            ]
          ],
          #----------------------------------------3---------------------------------------------
          [
            'title' => '大林組グループ会社説明会』の開催について',
            'text' => '対象:学部3年生および大学院修士1年生／学部不問】',
            'defaultAction' => [
              'type' => 'uri',
              'label' => 'View detail',
              'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/53517/'
            ],
            'actions' => [
              [
                'type' => 'uri',
                'label' => '詳細',
                'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/53517/'
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

function question()
{
  $messages = [
    "type" => "text",
    "text" =>  "質問内容を入力してください\n\n(例)\n履修登録について\n証明証発行について"
  ];
  return $messages;
}

function irrelevant()
{
  $messages = [
    "type" => "text",
    "text" =>  "解釈できませんでした。申し訳ありませんが違う表現を試していただけますか\n\n(例)\n履修登録について\n証明証発行について"
  ];
  return $messages;
}

function ans1()
{
  $messages = [
    "type" => "text",
    "text" =>  "履修登録についての情報はこちらになります\nhttps://service.cloud.teu.ac.jp/inside2/wp-content/uploads/2017/07/rishutourokutejyun.pdf"
  ];
  return $messages;
}

function ans2()
{
  $messages = [
    "type" => "text",
    "text" =>  "学割・成績証明書などの証明書詳しくはこちらになります\nhttps://service.cloud.teu.ac.jp/inside2/hachiouji/hachioji_common/student-life-hachi/%e5%90%84%e7%a8%ae%e8%a8%bc%e6%98%8e%e6%9b%b8%e3%81%ab%e3%81%a4%e3%81%84%e3%81%a6/"
  ];
  return $messages;
}
