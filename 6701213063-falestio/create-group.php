<?php
function createGroup($kumpulanSiswa){
    shuffle($kumpulanSiswa);
    $hasil = array_chunk($kumpulanSiswa,3);
    foreach ($hasil as $kelompok) {
        $encode_array = json_encode($kelompok);
        $kelompok_index = array_search($kelompok, $hasil) + 1;
        echo "kelompok $kelompok_index $encode_array <br>";
    }
}

createGroup(array('ANDRI JUNAEDI','CARISSA OKTAVIA PRAHMADHINI','DERRYNA AULYA FURHANISSA','EKA DIAN WANANDA','ENDANG BUHORI','FALESTIO HANIF AL HAKIM','FARHAN FAJRUL HUDA','FATHUR RAHMAN NUR','FATMA SARI ','FEBIANI','GERY AUDIA SIMANULLANG','GLEN DAVIS KUSUMA','GRACE NATASYA SIBARANI','HAIDAR AHLAN GHAFFAR','JUNIA PUTRI DAMANIK','JURIZKI FARID','KARIN TRISVIASYIFA KHAIRUNISA ','M. STEVANUS HALIM SAPUTRA','MUHAMMAD ALIM HIDAYAT','MUHAMMAD DZAKYYUDDIN BADRI','MUHAMMAD HANIF AULIA RASYID','NUR AZIZ ASHSHIDIQY','RADHITYA AHMAD MUSYAFFA','REGINA GAYATRI','RENALDI DAFA SAPUTRA','RIDHO FAHREZA GUNAWAN','ZULFA AULIA HIDAYAT','FRANKLIN HUTAJULU','XVA JONATHAN','PUTRI REMBULAN'));