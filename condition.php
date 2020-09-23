<?php

$tanya=readline("pilih (yes/no)?\t");
if($tanya=="yes")
{
    echo "kamu yes";
}elseif($tanya=="no"){
    echo "kamu no";
}else{
    echo "kamu tolol";
}
echo "\n";

$menu=readline("pilih angka 0-9\t");
switch($menu)
{
    case 1:
        echo "anda 1";
    // break;
    case 2:
        echo "anda 2";
    break;
    case 3:
        echo "anda 3";
    break;
    default:
    echo "anda tidak memilih";
}