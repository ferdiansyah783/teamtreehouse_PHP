<?php

//buat function askName
//parameternya $nama
//askName("ferdi");//namamu adalah ferdi

function askName($nama){
    $format_nama=ucwords(strtolower($nama));
    echo "Nama saya adalah $format_nama";
}
// askName("ferDi");

