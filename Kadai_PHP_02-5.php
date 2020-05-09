<?php
//変数の頭文字が数字だとエラー
$calendar_2018 = [ //配列の定義時は「{}」ではなく「[]」で行う
  "January" => "1月",
  "February" => "2月", //「、」は全角のためエラー
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月", //連想配列のキーと要素は「=>」で繋ぐ
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",//文字列は「""」でくくる
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018[December];
?>