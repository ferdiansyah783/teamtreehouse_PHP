<?php
//buat function celcius ke fahrenheit
// rumus (nilai celcius *9/5)+32
//nilai 1 celcius=33,8 fahrenheit
//parameter function int celcius
//invoke function celciusToFahrenheit(12);//print 53,6

function celciusToFahrenheit($celcius){
    $convertion=($celcius*9/5)+32;
    echo "$celcius celcius= $convertion fahrenheit";
}
// celciusToFahrenheit(80);



?>