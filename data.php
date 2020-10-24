<?php
function new_info()
{
  $messages = [
    [
      'type' => 'template',
      'altText' => 'this is a carousel template',
      'template' => [
        'type' => 'carousel',
        'columns' => [
          [
            'thumbnailImageUrl' => 'https://example.com/bot/images/item1.jpg',
            'imageBackgroundColor' => '#FFFFFF',
            'title' => '新着情報1',
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
            'title' => '新着情報2',
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

function important_info()
{
  $messages = [
    [
      'type' => 'template',
      'altText' => 'this is a carousel template',
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
      'altText' => 'this is a carousel template',
      'template' => [
        'type' => 'carousel',
        'columns' => [
          [
            'thumbnailImageUrl' => 'https://example.com/bot/images/item1.jpg',
            'imageBackgroundColor' => '#FFFFFF',
            'title' => '休講情報1',
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
            'title' => '休講情報2',
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
