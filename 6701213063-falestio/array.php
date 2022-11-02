<?php
$pirate = [
    "nama" => "Luffy",
    "bounty" => "3.000.000.000",
    "crew" => "straw hat"
];

foreach ($pirate as $key => $value) {
    echo "$key - $value <br>";
}

$arrayBuatan = range(1, 31);
echo json_encode($arrayBuatan);

$dataAnak = [
    "Dani" =>  130,
    "Thomas" => 125,
    "Lilo" =>  112,
    "Evan" => 133,
];

function cekTertinggi($data){
    $tertinggi = null;
    $namaTertinggi = null;
    
    foreach ($data as $nama => $tinggi) {
        if($tertinggi < $tinggi){
            $namaTertinggi = $nama;
            $tertinggi = $tinggi;
        }
    }
    
    echo "<br> Yang tertinggi adalah $namaTertinggi";
}

cekTertinggi($dataAnak);