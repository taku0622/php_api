<?php
$object =
  [
    "day" => '2020年11月29日 3時限',
    "name" => '並列・分散処理',
    "instructor" => '石畑　宏明',
    "department" => 'コンピュータサイエンス学部',
    "grade" => '3年次',
    "class" => 'AB',
    "note" => '課題を課す',
    "up" => '2020年11月06日11時57分',
    "from" => '学務課教務係',
  ];


// heroku logに表示
error_log("########################## push info is ##########################");
error_log(json_encode($object, JSON_UNESCAPED_UNICODE));

// JSON形式への変換
// echo json_encode($object, JSON_UNESCAPED_UNICODE);

// JSON形式への変換
$json =  json_encode([$object], JSON_UNESCAPED_UNICODE);

//curl実行
$url = "https://sleepy-hamlet-66660.herokuapp.com/api/insert/cancels";
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
