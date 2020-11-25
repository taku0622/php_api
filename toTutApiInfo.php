<?php
$object = [
  [
    "date" => '2020年11月20日',
    "title" => '【重要】学生ポータルサイト及びMoodleの停止について',
    "uri" => 'https://service.cloud.teu.ac.jp/inside2/archives/97472/',
    "tags" => ['重要', '全学部'],
    "context" => '',
  ],
  [
    "date" => '2020年11月21日',
    "title" => '【重要】情報2',
    "uri" => 'https://service.cloud.teu.ac.jp/inside2/archives/97422/',
    "tags" => ['重要', '全学部'],
    "context" => '',
  ]
  //   ,
  // [
  //   "date" => '2020年11月20日',
  //   "title" => '【図書館】リクエストの結果報告＜八王子キャンパス＞',
  //   "uri" => 'https://service.cloud.teu.ac.jp/inside2/archives/64555/',
  //   "tags" => ['BS', 'CS', 'MS', 'ES', '院八', '院工学'],
  //   "context" => '11月（前半）の選書の結果、以下のリクエストが採択されました。
  // １か月程後、配架される予定です',
  // ]
  // ,
  //   [
  //     "date" => '2020年11月19日',
  //     "title" => 'Office 2016 for Mac　サポート終了のお知らせ',
  //     "uri" => 'https://service.cloud.teu.ac.jp/inside2/archives/97396/',
  //     "tags" => ['BS', 'CS', 'MS', 'ES', '院八', '院工学'],
  //     "context" => '',
  //   ],
  //   [
  //     "date" => '2020年11月18日',
  //     "title" => '就職活動中の身だしなみ・メイク・写真について',
  //     "uri" => 'https://service.cloud.teu.ac.jp/inside2/archives/97252/',
  //     "tags" => ['ME', 'EE', 'AC', 'BS', 'CS', 'MS', 'ES', '院八', '院工学'],
  //     "context" => '八王子キャンパス2022年3月卒業予定のみなさん
  // 各企業ではインターンシップやエントリー等が開始されます。
  // みなさんは証明写真、リクルートスーツの準備はされていますでしょうか。
  // 履歴書、エントリーシートの写真はあなたの第一印象を決める大事なアイテムです。（特にボックス型の証明写真撮影は推奨しません）
  // 面接などでは、対面・Webにかかわらずスーツや身だしなみも大切です。
  // キャリアコーオプセンターでは学内サイト→就職・キャリア支援→就活身だしなみ・メイク・写真のページに身だしなみやメイクの説明動画を掲載しています。
  // また、証明写真撮影スタジオやオーダーリクルートスーツの案内も掲載しています。なお、人数制限はありますが12月18日、21日に学内就活証明写真撮影を行います。（人数制限あり、先着順、要予約）改めてご案内しますので利用してください。',
  //   ]
];


// heroku logに表示
error_log("########################## push info is ##########################");
error_log(json_encode($object, JSON_UNESCAPED_UNICODE));

// JSON形式への変換
// echo json_encode($object, JSON_UNESCAPED_UNICODE);

// JSON形式への変換
$json =  json_encode($object, JSON_UNESCAPED_UNICODE);

//curl実行
$url = "https://tut-php-api.herokuapp.com/api/v1/infos/new";
$options = array(
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_AUTOREFERER => true,
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_VERBOSE, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt_array($ch, $options);
// $result = curl_exec($ch);
$response = curl_exec($ch);

// $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
// $header = substr($response, 0, $header_size);
// $body = substr($response, $header_size);
// $result = json_decode($body, true);
curl_close($ch);
// return $result;
echo $response;
