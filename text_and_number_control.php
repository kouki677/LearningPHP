<?php

/**
 * 余白を取り除いた文字列の長さを調べる
 * trim()
 * strlen()
 */

echo '余白を取り除いた文字列の長さを調べる', PHP_EOL;

// 文字列定義
$text = '  text ';
echo $text, PHP_EOL;

// 余白削除
$text = trim($text);
echo $text, PHP_EOL;

// 余白を削除した後の文字列の長さ表示
$length = strlen($text);
echo $length, PHP_EOL;

echo PHP_EOL;

/**
 * 文字列を等価演算子で比較する
 */

echo '文字列を等価演算子で比較する', PHP_EOL;

// 文字列定義
 $text = 'example';

 // 文字列比較
 if ($text == 'example') {
     echo 'Equal', PHP_EOL;
 }

 echo PHP_EOL;

/**
 * 大文字、小文字を区別しない文字列比較
 * strcasecmp(string1, string2)
 * 引数として渡した2つの文字列が、大文字小文字を区別せず等しい場合に0を返す
 * 等しくない場合、string1がstring2より小さい場合は負、string1がstring2より大きい場合は正を返す。
 */

echo '大文字、小文字を区別しない文字列比較', PHP_EOL;

// 文字列比較
if (strcasecmp($text, 'ExAmPlE') == 0) {
    echo 'Equal', PHP_EOL;
}

// string1がstring2より小さい場合
echo strcasecmp('ああ', 'あああ'), PHP_EOL;

// string1がstring2より大きい場合
echo strcasecmp('あああ', 'ああ'), PHP_EOL;

echo PHP_EOL;

/**
 * printfでの出力フォーマット
 * printf(string $format, mixed ...$value)
 */

 echo 'printfでの出力フォーマット', PHP_EOL;

// フォーマット形式に従い文字列を出力
$price = 5; $tax = 0.1;
printf('This apple costs $%.2f', $price * (1 + $tax));

echo PHP_EOL, PHP_EOL;

/**
 * printfでの0パディング
 * printf()
 * 詳しくはhttps://www.php.net/manual/ja/function.printf.phpを参照
 */

echo 'printfでの0パディング', PHP_EOL;

// 文字列定義
$month = 7;
$day = 12;
$year = 2021;

// フォーマット形式に従い文字列を出力
printf('Today is %d/%02d/%02d', $year, $month, $day);

echo PHP_EOL, PHP_EOL;

/**
 * printfでの符号の表示
 * printf()
 */

echo 'printfでの符号の表示', PHP_EOL;

// 数値定義
$min = -40;
$max = 40;

// フォーマット形式に従い出力
printf('The TV can operate between %-d and %+d degrees Celslus', $min, $max);

echo PHP_EOL, PHP_EOL;

/**
 * 大文字、小文字の変更
 * strtolower(string $string):string
 * 引数に指定されたアルファベット文字列をすべて小文字にして返す
 * strtoupper(string $string):string
 * 引数に指定されたアルファベット文字列をすべて大文字にして返す
 */

echo '大文字、小文字の変更', PHP_EOL;

// 全て小文字で文字列出力
echo strtolower('APPLE, ORANGE, GRAPE'), PHP_EOL;

// 全て大文字で文字列出力
echo strtoupper('apple, orange, grape'), PHP_EOL;

echo PHP_EOL;

/**
 * ucwords()を使った文字列の整形
 * ucwords(string $string, string $separators):string
 * 文字列の各単語の最初の文字を大文字にする
 * この関数における単語はseparatorsに含まれていない文字からなる文字列
 * デフォルトのseparatorsはスペース、第二引数で単語の区切り文字列を指定できる
 */

 echo 'ucwords()を使った文字列の整形', PHP_EOL;

 // 文字列出力
 echo ucwords(strtolower('JAPAN TOKYO')), PHP_EOL;
 echo ucwords(strtolower('JAPAN|TOKYO'), '|'), PHP_EOL;

 echo PHP_EOL;

/**
 * substr()を使った文字列切り取り
 * substr(string $string, int $offset, int|null $length = null):string
 * 文字列stringの、offsetで指定された位置からlengthバイト分の文字列を返す
 * offsetが負の場合、返される文字列はstringの後ろから数えてoffset番目から始まる文字列
 * stringの長さがoffset文字より短い場合はfalseが返される
 */

echo 'substr()を使った文字列切り取り', PHP_EOL;

// 文字列定義
$text = "supercalifragilisticexpialidocious";

// $textの最初の5文字を切り出す
echo substr($text, 0, 5), PHP_EOL;

// $textの5文字以降を切り出す
echo substr($text, 5), PHP_EOL;

// $textの末尾から7文字目から最後まで切り出す
echo substr($text, -7), PHP_EOL;

// $textの末尾から7文字目から、2文字を切り出す
echo substr($text, -7, 2), PHP_EOL;

echo PHP_EOL;

/**
 * str_replace()の使用
 * str_replace(array|string $search, array|string $replace, string|array $subject, int $count = null):string|array
 * 検索文字列に一致した全ての文字列を置換する
 * subjectの中のsearchをすべてreplaceに置換する
 * countを指定した場合は、マッチして置換が行われた箇所の個数が格納される
 */

echo 'str_replaceの使用', PHP_EOL; 

// 文字列定義
$text = 'appleorangegrapeapple';

// 文字列置換
echo str_replace('orange', 'banana', $text), PHP_EOL;

echo str_replace('apple', 'banana', $text, $count), PHP_EOL;
echo '置換回数：' . $count . '回', PHP_EOL;


 
