<?php

// メッセージを保存するファイルのパス設定
define( 'FILENAME','.data/data.txt');

// ファイルを開く
$filename = './data/data.txt';
$file = fopen($filename,"r");

while (!feof($file)) {
$txt = fgets($file);

echo  $txt . '</br>';
}

// ファイルを閉じる
fclose($file);