<?php
function bot($event)
{
  // ユーザー入力を取得
  $text = $event->message->text;
  reply($event, $text);
}
