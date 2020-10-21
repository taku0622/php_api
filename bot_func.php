<?php
function bot($event)
{
  // ユーザー入力を取得
  $text = $event->message->text;
  // error_log($text);
  reply($event, $text);
}
