<?php
$contents = [
  [
    'title' => '『学内ミニ合同企業説明会』の開催について',
    'content' => '【対象:2020年3月卒業･修了予定者】',
    'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/76553/',
    'label' => '詳細'
  ],
  [
    'title' => 'クリエイティブ業界学内合同企業セミナーのお知らせ',
    'content' => '学内合同企業セミナーを実施します',
    'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/35103/',
    'label' => '詳細'
  ],
  [
    'title' => '大林組グループ会社説明会』の開催について',
    'content' => '対象:学部3年生および大学院修士1年生／学部不問】',
    'uri' => 'https://service.cloud.teu.ac.jp/inside2/archives/53517/',
    'label' => '詳細'
  ]
];
$message = [
  "to" => ["U6e0f4008a090ff5b5bef0323cae3428e"],
  "type" => "multiple",
  "altText" =>  "イベント",
  "contents" => $contents
];

// heroku logに表示
error_log("########################## push important info is ##########################");
error_log(json_encode($object, JSON_UNESCAPED_UNICODE));

// JSON形式への変換
// echo json_encode($object, JSON_UNESCAPED_UNICODE);

// JSON形式への変換
$json =  json_encode($object, JSON_UNESCAPED_UNICODE);

//curl実行
$url = "https://tut-line-bot-test.glitch.me/push";
$options = array(
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_AUTOREFERER => true,
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/plain'));
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
