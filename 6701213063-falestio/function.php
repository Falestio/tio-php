<?php
function cekUmur($umur) {
    if($umur >= 18){
        echo "Kamu hebat<br>";
    } else {
        echo "Yee";
    }
}

cekUmur(21);

function generateNumber($num = 5) {
    for ($x = 0; $x <= $num; $x++){
        echo "<i>$x<i>";
    }
}

generateNumber();