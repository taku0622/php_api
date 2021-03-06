<?php
$object = [
  [
    "day" => '2020年12月18日 1.2時限',
    "name" => '3D機械設計製作【4Q1】',
    "instructor" => '松尾　芳樹',
    "department" => '機械工学科',
    "grade" => '2年次',
    "class" => '',
    "note" => '補講実施予定',
    "up" => '2020年11月06日11時57分',
    "from" => '学務課教務係',
  ],
  [
    "day" => '2021年01月05日 3時限',
    "name" => 'メディア特別講義Ⅱ',
    "instructor" => '佐々木　和朗、吉岡　英樹',
    "department" => 'メディア学部',
    "grade" => '2年次',
    "class" => '',
    "note" => '補講実施予定',
    "up" => '2020年11月09日11時07分',
    "from" => '学務課教務係',
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
$url = "https://tut-php-api.herokuapp.com/api/v1/infos/lecture";
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
