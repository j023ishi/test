#!/usr/bin/php
<?php 
  // ファイルの各行を読み込んで、配列として返す
  foreach(file('/usr/share/dict/words') as $line){
    // 改行を削除
    $line = trim($line);
    // "xy" が含まれているかどうかを調べる
    if (strpos($line, 'xy') !== false) {
      // 含まれていたら、その行を出力
      echo "$line\n";
    }
  } 
?>
