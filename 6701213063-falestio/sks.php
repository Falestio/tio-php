<!-- Buat fungsi untuk menghitung jumlah total SKS dari sekelompok kode mata kuliah. 
Lihat contoh kode mata kuliah berikut: VSI3F4, VSI3H3. Karakter keenam adalah bobot SKSnya. Sehingga VSI3F4 berarti 4 SKS.
Gunakan fungsi dengan variable length parameter untuk menyelesaikan soal ini. -->
<?php

function cekSKS(...$kodeMatkul) {
    foreach ($kodeMatkul as $kode){
        $totalSKS = substr($kode,5,1);
        echo "Untuk kode matkul $kode SKS nya adalah $totalSKS <br>";
    }
}

cekSKS("VSI3F4", "VSI3H3");