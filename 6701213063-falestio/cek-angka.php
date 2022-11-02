<?php
function cekGanjil($num) {
    if ($num % 2 == 1){
        echo "ganjil = $num <br>";
    } else {
        return null;
    }
}

function cetakAngka($angka) {
    for ($x = 0; $x <= $angka; $x++){
        cekGanjil($x);
    }
}

cetakAngka(100);