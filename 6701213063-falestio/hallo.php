<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Guys</title>
</head>
<body>

    <?php 
        $nama = "Falestio Hanif Al Hakim";
        $nim = 6701213063;

        $bil1 = 10;
        $bil2 = 11;

        $tambah = $bil1 + $bil2;
        $kurang = $bil1 - $bil2;
        $kali = $bil1 * $bil2;
        $bagi = $bil1 / $bil2;

        echo "<h1>Halo Nama saya $nama dengan NIM $nim </h1>";
        echo "Bilangan 1 = $bil1 <br>";
        echo "Bilangan 2 = $bil2";
        echo "<p>Hasil tambah $tambah</p>";
        echo "<p>Hasil kurang $kurang</p>";
        echo "<p>Hasil kali $kali</p>";
        echo "<p>Hasil bagi $bagi</p>";

        for ($x = 0; $x < 100; $x++) {
            if($x % 2 !== 0) {
                echo "$x <br>";
            }
        }
    ?>

</body>
</html>