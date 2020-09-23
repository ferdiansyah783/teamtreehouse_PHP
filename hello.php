<?php
echo "hello.php\n";
$number_one=1.2;
$number_two=1.3;
var_dump($number_one+$number_two);
echo "\n";
$number=1;
$float=1.2;
$int_float=(int)$float;
$str_float=(string)$float;
$str_boolean=(bool)$float;
var_dump($str_boolean);

function kali(int $satu,int $dua):int{
    return $satu*$dua;
}

/**
 * operator
 * subtract(-)
 * addtion(+)
 * multiply(*)
 * divide(/)
 * increment(++)
 * decrement(--)
 */

 echo 4/2;//2
 echo PHP_EOL;
 echo 4%2;//0

$angka=1;//1
$angka++;//2
$angka--;//1
$angka+=9;//10
$angka/=5;//2
$angka.=7;//27

echo "\n";
echo $angka;



?>