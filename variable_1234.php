<?php
$greeting="こんにちは";

echo $greeting;
/* echoしたものしか画面に出ない
変数に使える文字　半角英数，_(アンダーバー)
名前はルールを決めて付ける
文字列は必ず""か''で囲む
数字は囲まなくてもよい
*/
?>

<?php
$greeting="こんばんわ";

echo $greeting;

$price=1000;

echo $price;
?>
<?php

$a="こんにちわ";
var_dump($a);

/*
var_dump();はデバック用関数。プログラミング中にバグを生まない、ロジックを間違わない、
コードを把握するために使う。
*/

$greeChugoku="ニーハオ";
echo"<pre>";
var_dump($greeChugoku); //null(未定義)
var_dump(true); //論理値
var_dump(1 > 2);
var_dump($greeting =="こんばんわ");
?>