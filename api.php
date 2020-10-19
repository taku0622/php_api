<?php
// 文字コード設定
header('Content-Type: application/json; charset=UTF-8');

// $param = htmlspecialchars($_POST["text"]);
// $param = $_POST["name"];
######################################
// POSTされたJSON文字列を取り出し
$json = file_get_contents("php://input");

if (!empty($json)) {
  error_log("json is exist");
}
// JSON文字列をobjectに変換
//   ⇒ 第2引数をtrueにしないとハマるので注意
// $contents = json_decode($json);
$contents = json_decode($json, true);

// デバッグ用にダンプ
error_log(gettype($contents));
error_log($contents);
error_log(var_dump($contents));


####################################
// if ($param == "info") {
//   $arr["text"] = "新着情報はこちらです";
// } else {
//   $arr["text"] = $param;
// }

// echo gettype($param);
// print json_encode($arr, JSON_UNESCAPED_UNICODE);
// print json_encode($arr, JSON_PRETTY_PRINT);
// numが存在するかつnumが数字のみで構成されているか
// if (isset($_GET["num"]) && !preg_match('/[^0-9]/', $_GET["num"])) {
//   // numをエスケープ(xss対策)
//   $param = htmlspecialchars($_GET["text"]);
//   // $param = htmlspecialchars($_GET["num"]);
//   // メイン処理
//   $arr["status"] = "yes";
//   $arr["text"] = (string)((int)$param * 114); // 114倍
//   $arr["x114"] = (string)((int)$param * 114); // 114倍
//   $arr["x514"] = (string)((int)$param * 514); // 514倍
// } else {
//   // paramの値が不適ならstatusをnoにしてプログラム終了
//   $arr["status"] = "no";
// }

// // 配列をjson形式にデコードして出力, 第二引数は、整形するためのオプション
// print json_encode($arr, JSON_PRETTY_PRINT);
// error_log("text: " . $param);
