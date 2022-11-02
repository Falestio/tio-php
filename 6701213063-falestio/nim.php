
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    

<?php
$nim = "6709213063";

function cekProdi($nim) {
    $prodi = "";
    $nimProdi = substr($nim, 3, 1);
    switch ($nimProdi) {
        case "1":
            $prodi = "Sistem Informasi";
            break;
        case "2":
            $prodi = "Teknik Komputer";
            break;
        case "3":
            $prodi = "Sistem Informasi Akuntansi";
            break;
        case "4":
            $prodi = "MP";
            break;
        case "5":
            $prodi = "TT";
            break;
        case "6":
            $prodi = "RPLA";
            break;        
    }
    return $prodi
}

$hasil = cekProdi("6701213063")

if ($prodi === "") {
    echo "Prodi tidak terdeteksi";
} else {
    echo "Anda berada di prodi $prodi";
}
?>
</body>
</html>