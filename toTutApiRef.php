<?php
$object = [
  [
    "title" => '創薬学I',
    "instructor" => '加藤　輝',
    "Reference" => '赤路健一、他 著「ベーシック創薬化学」化学同人',
  ],
  [
    "title" => '食品製造学',
    "instructor" => '野嶽　勇一',
    "Reference" => '食品加工・貯蔵学　栄養科学シリーズNEXT　講談社
食品加工貯蔵学　新スタンダード栄養・食品シリーズ　東京化学同人
栄養科学イラストレイテッド食品学Ⅰ　羊土社
栄養科学イラストレイテッド食品学Ⅱ　羊土社 ',
  ]
];


// heroku logに表示
error_log("########################## push info is ##########################");
error_log(json_encode($object, JSON_UNESCAPED_UNICODE));

// JSON形式への変換
// echo json_encode($object, JSON_UNESCAPED_UNICODE);

// JSON形式への変換
$json =  json_encode($object, JSON_UNESCAPED_UNICODE);

//curl実行
$url = "https://tut-php-api.herokuapp.com/api/v1/infos/reference";
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
